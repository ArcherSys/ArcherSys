using UnityEngine;
using System.Collections;

public class GameOver : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}

	// Update is called once per frame
	void Update () {
	  if(transform.localPosition.y < 0)
        {
            Debug.Log("Game Over!!!");
            Application.LoadLevel("Game Over");
        }
	}
}
