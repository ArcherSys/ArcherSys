using UnityEngine;
using System.Collections;

public class SwimAround : MonoBehaviour {
	
	public Vector3 rotateBy;

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
		transform.Rotate(rotateBy * Time.deltaTime);
	}
}
