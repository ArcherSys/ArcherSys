using UnityEngine;
using System.Collections;
using UnityStandardAssets.Vehicles.Car;

public class MaxTrap : MonoBehaviour {
    public CarController Car;

    // Use this for initialization
    void Start () {
        Car = GetComponent<CarController>();
	}
	
	// Update is called once per frame
	void Update () {
	
	}
    void onTriggerEnter()
    {
        Car.gameObject.SetActive(true);
    }
}
