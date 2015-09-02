using UnityEngine;
using System.Collections;

public class SafeTrain : MonoBehaviour {
    public PassengerController Character;
    public string level;
	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	     if(Character.transform.position.x >= 109f)
        {
            Application.LoadLevel(level);
        }
	}
   
}
