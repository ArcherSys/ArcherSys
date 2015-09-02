/* Made by Vladimir SILENT Maevskiy
 * This is a universal NPC movement code, you can use it for many purpose, by customizing 
 * some parameters or by extending it with your custom code.
 * */
using UnityEngine;
using System.Collections;

public class NPCMovement : MonoBehaviour {
	//maximal movement speed
	public float maxSpeed = 2.5F;
	//acceleration time in seconds
	public float accelerationTime = 0.3F;
	public float decelerationTime = 0.1f;
	/*movement smooth coefficient
	determines how smoothly changes movement vector, lower values -  more smoothly changing vector
	*/
	public float movementSmooth = 0.54f;
	public float movementSmoothDistance = 5f;
	//speed of rotation transform's forward direction to move direction
	public float rotationSpeed = 2.8F;
	float rotationMultiplier;
	//determines whether it is possible to automatically rotate transform's forward direction into move direction
	public bool autoRotationSpeed = true;
	float movementMultiplier = 1.0f;
	[HideInInspector]
	//point in space, which actually move
	public Vector3 targetPoint = Vector3.zero;
	[HideInInspector]
	//actual move direction
	public Vector3 moveDir = Vector3.zero;
	[HideInInspector]
	//store this transform
	public Transform This;
	//store Time.deltaTime
	float DeltaTime;
	public bool rotateYonly = false;
	public bool rotateToLookDir = true;
	public bool canMove = true;
	public bool canRotate = true;
	/*switch between spherical and linear movement direction interpolation
	in some cases one of this methods can be more relevant, so you can switch it at any time
	*/
	public bool useSlerp = true;
	public bool moveOnlyIfGrounded = true;
	public bool checkObstaclesInForward = true;
	//Debug section-----------------------------------
	public float debugUpdate = 0.1F;
	public Color debugColor = Color.blue;
	Vector3 debugLastPos = Vector3.zero;
	//public Transform debugSphere,debugSphere1,targetDebug;
	float debugTime = 0.0F;
	//------------------------------------------------
	//actual movement speed
	[HideInInspector]
	public float moveSpeed;
	/*this two variables needs only to work with function SmoothDamp
	  for output data
	 */
	float curVelocity;
	Vector3 curRotVelocity;
	//store current interpolation point between old and new movement directions
	Vector3 curMovementPoint = Vector3.zero;
	//store point wich determine new movement direction
	Vector3 newTargetPoint = Vector3.zero;
	//NBOT section ===================================={
	[HideInInspector]
	public float minJumpDelay = 0.1f;
	float colliderHeight,jumpTime = 0f,curTime,jumpStateTime =0f,colliderRadius;
	[HideInInspector]
	public bool grounded = false;
	[HideInInspector]
	public int jumpState = -1;
	[HideInInspector]
	//used for calculation look direction 
	public Vector3 lookAtPoint = Vector3.zero;
	[HideInInspector]
	//used as look direction if lookAtPoint is empty (equal to Vector3.zero)
	public Vector3 lookDir = Vector3.zero;
	//=================================================}
	public int playerLayer = 9;
	public int objectLayer = 8;
	[HideInInspector]
	public int layerMask = 0;
	[HideInInspector]
	public int layerMask2 = 0;
	RaycastHit hit;
    
	// Use this for initialization
	void Start () {
	moveSpeed = 0.0F;
	This = transform;
	debugLastPos = This.position;
		//layerMask = gameObject.layer;
		layerMask = 1 << playerLayer;
		layerMask2 = layerMask |(1<<objectLayer);
		layerMask = ~layerMask;
		layerMask2 = ~layerMask2;
		//Debug.Log ("layerMask:" + layerMask);
		if(rigidbody)
	rigidbody.freezeRotation = true;
		CapsuleCollider thisCollider = This.GetComponent<CapsuleCollider>();
		if(thisCollider){
			colliderHeight = thisCollider.height;
			colliderRadius = thisCollider.radius;
		}

	}
	
	// Update is called once per frame
	void Update () {
		DeltaTime = Time.deltaTime;	
		curTime = Time.time;
		if(moveOnlyIfGrounded)
		grounded = IsGrounded();
		else grounded = true;

		if(targetPoint == Vector3.zero)
			return;
		if(grounded && curTime>=jumpStateTime)
			if(jumpState >-1)
			jumpState = 1;
		//if movement enabled
		if(canMove && grounded){
		//then accelerate 
		moveSpeed = Mathf.SmoothDamp(moveSpeed,maxSpeed,ref curVelocity,accelerationTime);
		}//else, drop down speed
		else if(moveSpeed !=0.0F){
			if(grounded)
		moveSpeed = Mathf.SmoothDamp(moveSpeed,0.0F,ref curVelocity,decelerationTime);	
			else 
		moveSpeed = Mathf.SmoothDamp(moveSpeed,0.0F,ref curVelocity,1.8f);
		}
		//movement function
		Move ();
		//if rotation enabled,then rotate
		if(canRotate)
		RotateToDir();
		// Debug section
		//============================
		//Draw current movement direction
		Debug.DrawRay(This.position,moveDir*2,Color.white);
		//Draw trail
		if(curTime>debugTime){
		debugUpdate = 0.13F/maxSpeed; 
		Debug.DrawLine(debugLastPos,This.position,debugColor,15.0F);
			debugLastPos = This.position;
		debugTime = curTime+debugUpdate;
		}
		//=============================
	}
	
	//Movement function
	void Move(){
		/* Here we are make modification of original target point in order to prevent issue.
		 * Because of movement smoothness depends on how far target point is, so we just making a
		 * new target point at the same direction as original, but always at fixed distance from this transform
		 * */
		//get original target point direction
		newTargetPoint = targetPoint;
		newTargetPoint -= This.position;

		//get new target point at fixed distance
		newTargetPoint = This.position+newTargetPoint.normalized*movementSmoothDistance;
		//Debug.DrawLine(This.position,targetPoint,Color.yellow);
		//if(debugSphere1)
			//debugSphere1.position = newTargetPoint;
		//calculate movement smooth relatively to current movement speed
		movementMultiplier = moveSpeed*movementSmooth;
		if(moveDir !=Vector3.zero){
			curMovementPoint = This.position+moveDir*movementSmoothDistance;
			//Debug.DrawLine(This.position,curMovementPoint,Color.white);
		//if spherically interpolation is selected
		if(useSlerp){
	//then spherically interpolate between old and new movement directions points
	curMovementPoint = Vector3.Slerp(curMovementPoint,newTargetPoint,DeltaTime*movementMultiplier);
	/*set height of this point equal target point height, because spherical interpolation can change y coordinate
	and we don't need that
	*/
	curMovementPoint.y = newTargetPoint.y;
		}
		//if spherically interpolation is not selected
		else
		//then linearly interpolate between old and new movement directions points
	curMovementPoint = Vector3.Lerp(curMovementPoint,newTargetPoint,DeltaTime*movementMultiplier);
		}else{
			curMovementPoint = newTargetPoint;
		}
		//if debug sphere appointed
		//if(debugSphere)
		//then show current movement direction point
		//debugSphere.position = curMovementPoint;
	//calculate movement direction from current interpolation point
	moveDir= curMovementPoint - This.position;
	moveDir.Normalize();
		bool obstacleInForward = false;
		if(checkObstaclesInForward)
			obstacleInForward = ObstaclesInForward(moveDir,colliderRadius+0.1f);
		if(!obstacleInForward)
	//move in this direction
	This.Translate(moveDir*moveSpeed*DeltaTime,Space.World);
		//if(targetDebug)
			//targetDebug.position = targetPoint;
	}
	


	/*Rotation function
	 * The rotation function is not depends on a movement function, it's can inherit rotation
	 * direction from movement direction or not(canRotate flag responsible for that)
	*/
	void RotateToDir(){
	//get target rotation
		Quaternion targetRot = Quaternion.identity;
		if(!rotateToLookDir)
			targetRot = Quaternion.LookRotation(moveDir);
		else if(lookDir != Vector3.zero)
			targetRot = Quaternion.LookRotation(lookDir);
		else
			targetRot = This.rotation;
	//read angles of this rotation
		curRotVelocity = This.rotation.eulerAngles;
	//if can rotate only around Y axis
		if(rotateYonly){
		//then reset other angles
			curRotVelocity.y = targetRot.eulerAngles.y;
		}else
			curRotVelocity = targetRot.eulerAngles;
		
		//can rotation direction directly change  with move direction?
		if(autoRotationSpeed)
		//yes
		rotationMultiplier = 1f;
		else
		//no,set custom speed
		rotationMultiplier = DeltaTime*rotationSpeed;
	//apply changed angles to target rotation
	targetRot.eulerAngles = curRotVelocity;
	//interpolate current rotation to target rotation
	This.rotation = Quaternion.Lerp (This.rotation,targetRot,rotationMultiplier);
	}
	
	/*This function reset current interpolation point when NPC got new target point,must be called
	 * from  AI script.
	  */ 
	public void ResetMovement(){
	moveDir = Vector3.zero;	
	}
	
	bool ObstaclesInForward(Vector3 checkDir,float checkDist){
	bool result = false;
	Vector3 p1,p2;
		p1 = This.position+Vector3.up*colliderHeight*0.5f;
		p2 = This.position+Vector3.up*colliderHeight*-0.5f;
	
		if(Physics.CapsuleCast(p1,p2,0.3f,checkDir,checkDist,layerMask)){
			result = true;
			//Debug.Log (This.name+": collision in forward");
		}
		return result;
	}
	
	//jump function
	public void Jump(){
		if(curTime<jumpTime)
			return;
		if(grounded){
		rigidbody.AddForce(This.up*382f,ForceMode.Impulse);
		//Debug.Log ("collider detected:"+hit.transform.name);
		jumpTime = curTime+minJumpDelay;
			jumpState = 0;
			jumpStateTime = curTime+0.05f;
		Debug.Log("force applied");
		}
		
	}
	
	bool IsGrounded(){
	bool result = false;
	if(Physics.Raycast(This.position,This.up*-1,out hit,colliderHeight*0.5f,layerMask)){
			//Debug.Log ("collision dist:"+Vector3.Distance (This.position,hit.point));
	result = true;	
		}
		//Debug.Log ("grounded:"+result);
	return result;	
	}
}
