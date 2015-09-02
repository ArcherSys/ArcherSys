using UnityEngine;
using System.Collections;

public class RunnerAI : MonoBehaviour {
    private PassengerController Player;
	// Use this for initialization
	void Start () {
        NavMeshAgent agent = GetComponent<NavMeshAgent>();
        agent.destination = Player.transform.position;
    }
	
	// Update is called once per frame
	void Update () {
	
	}
}
