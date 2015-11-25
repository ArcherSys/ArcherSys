using UnityEngine;
using System.Collections;

public class Turn : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}
    public void  RotateRight()
    {
        transform.Rotate(Vector3.back * 180);
    }
    public void RotateLeft()
    {
        transform.Rotate(Vector3.forward * -180);
    }
    // Update is called once per frame
    void Update () {
        if (Input.GetKey("left"))
        {
            RotateLeft();
        }else if (Input.GetKey("right"))
        {
            RotateRight();
        }
	}
}
