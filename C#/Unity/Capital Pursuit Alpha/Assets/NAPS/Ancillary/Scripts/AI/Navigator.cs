using UnityEngine;
using System.Collections;

public class Navigator : MonoBehaviour {
	public bool autoRamble = true;
	public bool moveToDestinationIfNotZero = true;
	public bool useVisibility = true;
	public bool useDestinationPointVisibility = true;
	public bool useNodeDistance = false;
	public float pointReachRadius = 0.7f;
	public float pathOptimization = 1f;
	public float trajectoryUpdateInterval = 3f;
	public string[] types = new string[0];
	public Pathfinding.Constraint3 targetPointConstraints = new Pathfinding.Constraint3(true,true,true);
	[HideInInspector]
	public float distToCurPoint = 0f;
	[HideInInspector]
	public bool destinationPointIsVisible = false;
	[HideInInspector]
	public float distanceToDestinationPoint = Mathf.Infinity;
	float trajectoryUpdateTime = 0f,curTime; 
	[HideInInspector]
	public Vector3 destinationPoint = Vector3.zero;
	[HideInInspector]
	public float thisRadius,targetPointValue = -1f;
	Transform This;
	int pointVisibility = -1,failCounter = 0;
	[HideInInspector]
	public NPCMovement movement;
	[HideInInspector]
	public Pathfinding.RouteData routeData = new Pathfinding.RouteData();

	// Use this for initialization
	void Start () {
		movement = GetComponent <NPCMovement>();
		thisRadius = GetComponent<CapsuleCollider>().radius;
		This = transform;
	}
	
	// Update is called once per frame
	void Update () {
		curTime = Time.time;
		if(!Pathfinding.DataLoaded()){
			Debug.Log ("Navigation data is not loaded!");
			return;
		}
		MoveToDestination(autoRamble,moveToDestinationIfNotZero);
	}

   public void MoveToDestination(Vector3 destPoint){
		if(!Pathfinding.DataLoaded()){
			Debug.Log ("Navigation data is not loaded!");
			return;
		}
		if(destPoint == Vector3.zero){
			Debug.Log ("destination point is Vector3.zero, use value different from 0 for one of coordinates of destPoint,example: new Vector3(0.0000000001,0,0)");
			return;
		}
		if(!movement){
			Debug.Log ("NPCMovement component not found on this transform! Can't move anywhere!");
			return;
		}
		if(types.Length<1){
			Debug.Log ("paths types array is empty! Can't move by any path!");
			return;
		}
		if(!Pathfinding.ObjectIsVisible(destPoint,This.position,thisRadius,movement.layerMask)){
			if(!routeData.IsNotValid())
				if(!Pathfinding.ObjectIsVisible(destPoint,Pathfinding.GetWaypointInSpace(0.5f,routeData.destinationNode),thisRadius,movement.layerMask))
					routeData = new Pathfinding.RouteData();
			if(routeData.IsNotValid()){
				movement.targetPoint = Vector3.zero;
				targetPointValue = -1f;
				routeData = Pathfinding.GetRouteForPoint(routeData,types,destPoint,This.position,thisRadius,movement.layerMask2);
			}
			FollowRoute ();
			destinationPointIsVisible = false;
		}else{
			if(!routeData.IsNotValid())
				routeData = new Pathfinding.RouteData();
			movement.targetPoint = ApplyVector3(movement.targetPoint,destPoint,targetPointConstraints);
			destinationPointIsVisible = true;
		}
		distanceToDestinationPoint = Vector3.Distance (This.position,destPoint);
	}

	public void MoveToDestination(bool _autoRamble,bool _moveToDestinationIfNotZero){
		if(!_autoRamble && !_moveToDestinationIfNotZero){
			return;
		}
		if(movement.targetPoint !=Vector3.zero && destinationPoint == Vector3.zero)
			movement.targetPoint = Vector3.zero;
	
		if(destinationPoint == Vector3.zero){
			if(failCounter>0)
				failCounter = 0;
			if(_autoRamble)
			destinationPoint = Pathfinding.GetRandomNavigationPoint(types);
			else return;
		}
		MoveToDestination(destinationPoint);
		Debug.DrawLine(This.position,destinationPoint,Color.green);
		if(destinationPointIsVisible){
			if(useDestinationPointVisibility)
				destinationPoint = Vector3.zero;
			if(distanceToDestinationPoint<=pointReachRadius)
				destinationPoint = Vector3.zero;
			//else Debug.Log (transform.name+" dist to destination point:"+distanceToDestinationPoint);
		}
		if(failCounter>=3)
			destinationPoint = Vector3.zero;
		if(routeData.CurrentAreaDefined())
			Debug.Log ("current area:"+routeData.prevNode.ToString()+" and "+routeData.curNode.ToString());

	}

	void FollowRoute(){
		if(routeData.IsNotValid ()){
			Debug.Log (This.name+": routeData is not valid, can't follow route!");
			failCounter++;
			return;
		}
		//check visibility of next point,because if it already visible, we can start moving to it
		if(useVisibility)
			pointVisibility = Pathfinding.VisibilityOfNode(routeData.nextNode,This.position,thisRadius,movement.layerMask2);
		else pointVisibility =-1;
		//if visible
		if(useNodeDistance)
			distToCurPoint = Pathfinding.DistanceToNode(routeData.curNode,This.position);
		else
			distToCurPoint = Vector3.Distance (This.position,movement.targetPoint);

		if(pointVisibility>0 || distToCurPoint<=pointReachRadius){
			//then update currrent point and next point (curPoint = nextPoint,get new nextPoint)
			routeData = Pathfinding.GetNextNode(routeData);
			//reset trajectory update time
			if(!Pathfinding.NodesEqual(routeData.nextNode,routeData.destinationNode)){
			trajectoryUpdateTime = 0f;
			//reset curPoint presentation value(this value represent point inside curPoint node, if
			// curPoint is bipoint
			targetPointValue = -1f;
			}
			//reset movement interpolation point(do this on each curPoint update)
			//Movement.ResetMovement();
		}
		//now check visibility of current node
		pointVisibility = Pathfinding.VisibilityOfNode(routeData.curNode,This.position,thisRadius*0.6f,movement.layerMask2);
		//if visible
		if(pointVisibility>0){
			//and current node is single point, or half-visible bipoint
			if(pointVisibility==0 || pointVisibility == 1){
				//then move to center of this bipoint or single point
				targetPointValue = 0.5f;
				//reset trajectory update time
				trajectoryUpdateTime = 0f;
			}
			//in other case, if current point is fully visible bipoint and we can update trajectory
			else if(curTime>trajectoryUpdateTime){
				//then get new target point value
				targetPointValue = Pathfinding.GetOptimizedTrajectoryPoint(routeData.curNode,routeData.nextNode,
				                                                           targetPointValue,pathOptimization,This.position,Random.Range(0.5f,1f),5f,0.2f); //Random.Range(0.5f,1f),5f,0.2f
				//set next trajectory update time
				trajectoryUpdateTime = curTime + trajectoryUpdateInterval;
			}
			//set real movement point  by transforming targetPointValue into point in space
			//temporary line below, delete this
			//targetPointValue = 0.5f;
			movement.targetPoint = ApplyVector3(movement.targetPoint,Pathfinding.GetWaypointInSpace(targetPointValue,routeData.curNode),targetPointConstraints);
		}
		//if current point are lost and is not visible anymore
		else{
			//then  build new route to destination point
			//get new current point
			routeData = Pathfinding.ResumeRoute(routeData,types,This.position,thisRadius,movement.layerMask2);
			trajectoryUpdateTime = 0f;
			//reset movement interpolation point
			movement.ResetMovement();
		}
		//Draw current point direction
		Debug.DrawLine(This.position,movement.targetPoint,Color.yellow);	
		//Draw next point direction
		Debug.DrawLine(movement.targetPoint,Pathfinding.GetWaypointInSpace(0.5f,routeData.nextNode),Color.red);		
		
	}

	public Vector3 ApplyVector3(Vector3 to,Vector3 from,Pathfinding.Constraint3 constraints){
		Vector3 result = to;
		if(constraints.a)
			result.x = from.x;
		if(constraints.b)
			result.y = from.y;
		if(constraints.c)
			result.z = from.z;

		return result;
	}
}
