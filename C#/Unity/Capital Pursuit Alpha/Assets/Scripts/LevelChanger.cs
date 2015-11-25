using UnityEngine;
using System.Collections;
namespace ArcherSysOS.DDG{
public class LevelChanger : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}
	public void loadLevel(string level){
			Application.LoadLevel (level);
	}
	void onTriggerEnter(Collider other){
			loadLevel ("Level 1");
	}
}
}
