using UnityEngine;
using UnityEngine.UI;
using System.Collections;


public class Killer : MonoBehaviour {
    public Transform RobotPlayer;
    public GameObject Robot;
    public Text GameOVER;
    // Use this for initialization
    void Start() {
        RobotPlayer = GetComponent<Transform>();

    }

    void FixedUpdate()
    {
        if(RobotPlayer.gameObject.transform.position.y < -2)
        {
            GameOVER.gameObject.SetActive(true);
        }
    }
    
}

	


