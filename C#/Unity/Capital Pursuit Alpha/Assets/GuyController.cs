using UnityEngine;
using System.Collections;

public class GuyController : MonoBehaviour {
    public Vector3 horiz;
	// Use this for initialization
	void Start () {
	
	}
	void Update()
    {
       horiz = transform.localPosition;
        horiz.x = Input.GetAxis("Horizontal");
        horiz = horiz * Time.deltaTime;
    }
	// Update is called once per frame
	void FixedUpdate () {
     
        transform.localPosition = horiz;
	}
}
