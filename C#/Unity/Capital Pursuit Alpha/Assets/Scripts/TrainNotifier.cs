using UnityEngine;
using UnityEngine.UI;
using System.Collections;

public class TrainNotifier : MonoBehaviour {
    public Text LevelUp;
    public string stationName;
    public Transform Robot;
    public Transform Door;
    public string doorText;
	// Use this for initialization
	void Start () {
        LevelUp = GetComponent<Text>();
        Robot = GetComponent<Transform>();
        Door = GetComponent<Transform>();
        stationName = "Southern Avenue";

	}
	
	// Update is called once per frame
	void FixedUpdate () {
	if(Robot.gameObject.transform.position.x - Door.gameObject.transform.position.x <= 1.5)
        {
            if (doorText == "left" || doorText == "right")
                LevelUp.text = "Next stop, " + stationName + "; Doors open on your " + doorText;
            LevelUp.gameObject.SetActive(true);
        }
	}

}
