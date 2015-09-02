using UnityEngine;
using System.Collections;

public class MouseOrbit : MonoBehaviour {
	public Transform target;
	public float minimalDistance = 1f;
	float distance = 3.0f;
	public float zoomSpeed = 4.0f;

	public float xSpeed = 250.0f;
	public float ySpeed = 120.0f;

	public float yMinLimit = -20f;
	public float yMaxLimit = 80f;

	float x = 0.0f;
	float y = 0.0f;
	
	// Use this for initialization
	void Start () {
    Vector3 angles = transform.eulerAngles;
    x = angles.y;
    y = angles.x;

	// Make the rigid body not change rotation
   	if (rigidbody)
		rigidbody.freezeRotation = true;	
	}
	
	// Update is called once per frame
	void Update(){
	DefineCameraDistance_ScrollWheel();
	DefineCameraDistance_Keys();
	distance = Mathf.Clamp(distance,minimalDistance,100f);
	}

	void LateUpdate () {
    	if (target) {
       		x += Input.GetAxis("Mouse X") * xSpeed * 0.02f;
       		y -= Input.GetAxis("Mouse Y") * ySpeed * 0.02f;
 		
 			y = ClampAngle(y, yMinLimit, yMaxLimit);
 		       
        	Quaternion rotation = Quaternion.Euler(y, x, 0f);
        	Vector3 position = rotation * new Vector3(0.0f, 0.0f, -distance);
			position+= target.position;
        
        	transform.rotation = rotation;
        	transform.position = position;
    	}
	}

	public static float ClampAngle (float angle,float min,float max) {
	if (angle < -360f)
		angle += 360f;
	if (angle > 360f)
		angle -= 360f;
	return Mathf.Clamp (angle, min, max);
	}

	void DefineCameraDistance_ScrollWheel(){
		if(Input.GetAxis("Mouse ScrollWheel")<0f)
		distance +=0.4f;
		else if(Input.GetAxis("Mouse ScrollWheel")>0f)
		distance -=0.4f;
	}

	void DefineCameraDistance_Keys(){
		if(Input.GetKey(KeyCode.P)){
		distance +=zoomSpeed*Time.deltaTime;
		}else if(Input.GetKey(KeyCode.O)){
		distance-=zoomSpeed*Time.deltaTime;
		}
	}

	void SetCameraTarget(Transform t){
		target = t;
	}
	
}