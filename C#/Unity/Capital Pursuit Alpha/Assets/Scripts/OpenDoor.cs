using UnityEngine;
using System.Collections;

public class OpenDoor : MonoBehaviour {
	public Animator Door;
	public GameObject Robot;

	// Use this for initialization
	void Start () {
	  
	}
	
	// Update is called once per frame
	void Update () {
	if(Door.transform.position.x == Robot.transform.position.x){

			Door.Play("DoorOpen");
	}
}
}
