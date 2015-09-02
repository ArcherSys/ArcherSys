using UnityEngine;
using System.Collections;

public class WaterBottle : MonoBehaviour {
    public PassengerController Max;
	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}

    void onColllisionEnter(Collider other)
    {
        if (other.gameObject.CompareTag("Player"))
        {
            Max.Speed += 2.0f;
        }
    }
}
