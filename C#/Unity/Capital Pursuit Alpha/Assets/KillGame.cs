using UnityEngine;
using ArcherSysOS.DDG.CapitalPursuit.Nav;
using System.Collections;

public class KillGame : MonoBehaviour {
    private SceneLoadr sl;
	// Use this for initialization
	void Start () {
        sl = new SceneLoadr();
	}
	
	// Update is called once per frame
	void Update () {
	
	}
    void onCollisionEnter(Collider other)
    {
        if (other.gameObject.CompareTag("Player"))
        {
            Debug.Log("Game Over");
            sl.loadScenery(1);
        }
    }
}
