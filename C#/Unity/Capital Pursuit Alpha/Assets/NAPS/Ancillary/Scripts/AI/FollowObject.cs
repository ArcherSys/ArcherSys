using UnityEngine;
using System.Collections;

public class FollowObject : MonoBehaviour {
	public Transform targetObject;
	public float distance = 1f;
	Navigator navigator;

	// Use this for initialization
	void Start () {
		navigator = GetComponent<Navigator>();
		if(navigator){
			navigator.autoRamble = false;
			navigator.moveToDestinationIfNotZero = true;
		}
	}
	
	// Update is called once per frame
	void Update () {
		if(navigator && targetObject){
			if(Vector3.Distance (transform.position,targetObject.position)>distance)
			navigator.destinationPoint = targetObject.position;
		}
	}
}
