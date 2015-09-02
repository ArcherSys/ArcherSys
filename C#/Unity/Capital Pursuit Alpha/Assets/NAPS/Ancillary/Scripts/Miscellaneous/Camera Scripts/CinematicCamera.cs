using UnityEngine;
using System.Collections;

public class CinematicCamera : MonoBehaviour {
	//this array of nodes stores a  camera's route, in this case it's only two nodes
	public Pathfinding.Node[] route = new Pathfinding.Node[0];
	//stores information about the movement along a curve, including the data of the curve itself
	Pathfinding.MotionCurve curveData = new Pathfinding.MotionCurve();
	//stores self trasform
	Transform This;
	//declare an instance of class of NPC movement
	NPCMovement movement ;
	/*indexes of points, between which we move along the curve (prevIndex - the node where the curve starts;
	 * curIndex - node where the curve ends)
	*/
	int curIndex,prevIndex;
	bool initialDataSet = false;
	public Transform debugSphere;
	public bool cycleRoute = true;
	
	// Use this for initialization
	void Start () {
	This = transform;
	//get an instance of class of NPC movement
	movement = GetComponent<NPCMovement>();
	//if navigation data is loaded,
		if(Pathfinding.DataLoaded())
		//then set initial data:)
			SetInitialData ();
		if(cycleRoute){
		if(!Pathfinding.NodesEqual(route[0],route[route.Length-1])){
		cycleRoute = false;		
			}
		}

	}
	
	void SetInitialData(){
		if(route.Length<2)
			return;
		for(int i=0;i<route.Length;i++){
		route[i].number--;	
		}
		transform.position = Pathfinding.GetWaypointInSpace(0.5f,route[0].number,route[0].type);
		prevIndex = 0;
		curIndex =  1;
		//obtain a curve between two nodes and store it in an instance of the class MotionCurve
	curveData.curve = Pathfinding.GetCurve(route[prevIndex],route[curIndex]);
		//get the length of this curve
	curveData.curveLength  = Pathfinding.GetCurveLength(100,curveData.curve);
		//check curve, if the number of points = 4, the curve is not empty and contains the desired data
		if(curveData.curve.tangents.Length == 4){
	//in this case, set the starting point of the curve as current point to which we will move  
	curveData.newPoint = curveData.curve.tangents[0].GetVector3 ();
	/* Send the current position into the instance of MotionCurve class, it is necessary to
function of movement along the curve can already estimate the distance passed along the curve, all you need
to do is to pass the current position into lastPoint each time when got newPoint
	*/
	curveData.lastPoint = This.position;		
		}
	initialDataSet = true;
	}
	
	// Update is called once per frame
	void Update () {
		//if navigation data is not loaded
		if(!Pathfinding.DataLoaded()){
		//then, if movement enabled
		if(movement.canMove)
		// disable it
		movement.canMove = false;
		return;
		}//else enable movement
		else if(!movement.canMove)
			movement.canMove = true;
		//if initial data is not set
		if(!initialDataSet)
		//then set it
		SetInitialData();
		//check the current curve, if the number of points = 4, then curve is not empty and contains the desired data
		if(curveData.curve.tangents.Length==4){
		//if the distance to the current point <0.9 and the current point is the end point of the curve,
		if(Vector3.Distance (This.position,curveData.newPoint)<0.9f &&
				curveData.newPoint == curveData.curve.tangents[3].GetVector3()){
			if(curIndex == route.Length-1){
			/*
			if(useRouteReverse){
			//then reset data of the current curve and reverse route
			ReverseRoute();
			Debug.Log ("route reversed");
			}else
			*/ 
			ResetRoute();
			if(!cycleRoute)
			movement.canMove = false;
			}				
			prevIndex = curIndex;
			curIndex++;
			curveData = new Pathfinding.MotionCurve();
			//get curve data of new route 
			curveData.curve = Pathfinding.GetCurve (route[prevIndex],route[curIndex]);
			//get length of curve
			curveData.curveLength = Pathfinding.GetCurveLength(100,curveData.curve);
			/* set the distance already passed along a curve equal to 0.1, it is necessary for the function of movement along the curve 
			 * to choose the next point for the movement (in the curve), if you do not, you can get errors when driving on the curve,
			  * such as an object starts to move in the opposite direction, or get pauses of movement. In order to avoid this, just set the 
			  * start passedDist increment at each time when got new curve for the motion. Can experiment with the increment in case 
			  *of any problems with the movement along a curve, but usually 0.1 is enough.
			*/
			curveData.passedDist = 0.1f;
			/*Send the current position of the object as the last visited point in the curve, it is necessary that
            the function of movement choose next point where you want to move(point on the curve)
			*/
			curveData.lastPoint = This.position;
			/*obtain a new movement point by using function MoveByCurve, this point will be stored as curveData.newPoint
			 * and 1.5 - is the current increment, which also may vary. 
			 * The value 1.5 is generally suitable for rapid movement through a small curve, and for slow motion over a large curve.
			*/
			curveData = Pathfinding.MoveByCurve(curveData,This.position,1.5f);
							Debug.Log("curIndex:"+curIndex);
			//if current moving point  are not a start point of the curve,
			}else if(curveData.newPoint != curveData.curve.tangents[0].GetVector3()){
			//then got next movement point on the curve 
			curveData = Pathfinding.MoveByCurve(curveData,This.position,1.5f);
			/*otherwise, if the current point for the movement is a  starting point of the curve 
			 * (ie, the object is not moving along the curve, but moves to the starting point of the curve to start moving on it)
			  * and the distance to that point is less than 0.1
			*/
			}else if(Vector3.Distance (This.position,curveData.newPoint)<0.1f &&
				curveData.newPoint == curveData.curve.tangents[0].GetVector3()){
			//then set the passedDist increment equal to 0.1
				curveData.passedDist = 0.1f;
			//pass current position as last visited point on the curve
			    curveData.lastPoint = This.position;
			//get new point on the curve
				curveData = Pathfinding.MoveByCurve(curveData,This.position,1.5f);	
			}
			//pass to the script of the movement of an object, the resulting point  into which you want to move
			movement.targetPoint = curveData.newPoint;
			//if object of debug is enabled (shows the point into which the object is moving at the moment)
			if(debugSphere)
				//then show current moving point
				debugSphere.position = movement.targetPoint;
		}
	}
	
	/*
	void ReverseRoute(){
		Pathfinding.Node[] tempRoute = new Pathfinding.Node[route.Length];
		int i,j;
		j = tempRoute.Length;
		for(i = 0; i<tempRoute.Length;i++){
		j--;
		tempRoute[j] = new Pathfinding.Node(route[i].number,route[i].type);
		Debug.Log ("tempRoute["+j+"] "+tempRoute[j].number.ToString ()+tempRoute[j].type);
		}
		route = tempRoute;
		Debug.Log (route.Length);
		tempRoute = null;
		ResetRoute();
	}
	*/
	
	//This function reset the indexes of nodes, which are start and end points of the curve
	void ResetRoute(){
	curIndex = 0;
	prevIndex = 0;	
	}
}
