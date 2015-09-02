using UnityEngine;
using System.Collections;

public class CharactersSpawn : MonoBehaviour {
int curNumber = 0, targetNumber = 0,result;
public Transform NPC;
TextMesh cameraText;
string fps ="0",targetNumberStr = "1",curNumberStr = "0",timeScaleStr = "";
Rect windowPos ;
bool showWindow = true;

	
	float timeScale = 1.0f;
	
	string[] availabledPaths = new string[0];
	
	void Start(){
	windowPos = new Rect(Screen.width-240,Screen.height-160,240,130);
		timeScaleStr = timeScale.ToString();
		string[] ignore = {"cameraPath","camera"};
		availabledPaths = GetFilteredPaths(ignore);
	}
	
	void Update(){
	fps = (1f/Time.deltaTime).ToString();
		if(curNumber<targetNumber)
			Spawn ();
		else if(curNumber>targetNumber)
			RemoveNPCs();

		if(Input.GetKeyDown(KeyCode.F5)){
		if(showWindow)
				showWindow = false;
			else
				showWindow = true;
		}
	}
	
	void OnGUI(){
		if(showWindow)
	windowPos = GUILayout.Window (0,windowPos,GUIWindow,"");	
	}
	
	void GUIWindow(int windowID){
	GUILayout.Label ("FPS:"+fps);
	GUILayout.Label ("NPCs in scene: "+curNumberStr);
		GUILayout.BeginHorizontal ();
			GUILayout.Label ("Time scale:",GUILayout.Width(100));
			timeScaleStr = GUILayout.TextField(timeScaleStr,GUILayout.Width (40));
			if(GUILayout.Button ("Set")){
			timeScale = float.Parse (timeScaleStr);
			Time.timeScale = timeScale;
			timeScaleStr = timeScale.ToString ();
			}
		GUILayout.EndHorizontal ();
		GUILayout.BeginHorizontal();	
			GUILayout.Label ("Target number of NPC:");
			targetNumberStr = GUILayout.TextField(targetNumberStr,GUILayout.Width(60));
		GUILayout.EndHorizontal ();
		if(GUILayout.Button ("Set")){
			if(int.TryParse(targetNumberStr,out result)){
			targetNumber = int.Parse (targetNumberStr);	
				if(targetNumber<0){
				targetNumber = 1;	
				}
				targetNumberStr = targetNumber.ToString();
			}
		}
		GUI.DragWindow();
	}
	
	void Spawn(){
		if(!Pathfinding.DataLoaded()){
		Debug.Log ("Navigation data is not loaded!");	
			return;
		}
		int p;
		Pathfinding.Node[] nodes = new Pathfinding.Node[2];
		nodes[0] = Pathfinding.GetRandomPathsNode(availabledPaths);
		p = Pathfinding.FindPathOfType(nodes[0].type);
		if(p<0)
		return;
	
		for(int i=0;i<Pathfinding.Paths[p].size;i++){
			if(Pathfinding.Paths[p].connectionLength[nodes[0].number,i]<Mathf.Infinity){
			nodes[1] = new Pathfinding.Node(i,nodes[0].type);
			break;
			}
		}
		if(!Pathfinding.NodeIsEmpty(nodes[0]) && !Pathfinding.NodeIsEmpty(nodes[1])){
		Vector3 spawnPos = Pathfinding.GetPointInArea(nodes[0],nodes[1],Vector3.zero,-1f);
		Transform newNPC = Instantiate (NPC,spawnPos,Quaternion.identity) as Transform;
			newNPC.position = spawnPos;
			//Debug.Log ("pos:"+spawnPos);
			newNPC.parent = transform;
			newNPC = newNPC.GetChild (0).GetChild (0);
			newNPC.animation["walk_fun"].time = Random.Range (0f,newNPC.animation["walk_fun"].length);
			curNumber++;
			curNumberStr = curNumber.ToString();
		}else return;
	}
	
	void RemoveNPCs(){
	int number = curNumber - targetNumber;
		for(int i =0;i<number;i++){
		Destroy (transform.GetChild (i).gameObject);
			curNumber--;
			curNumberStr = curNumber.ToString();
		}
	}
	
	
	string [] GetFilteredPaths(string[] ignored){
	string[] result = new string[0];
	int i;
		bool skipPath = false;
	ArrayList availabledPaths = new ArrayList();
		foreach(string path in Pathfinding.pathsTypes){
			for(i=0;i<ignored.Length;i++){
			if(path == ignored[i])
				skipPath = true;	
			}
			if(!skipPath)
				availabledPaths.Add (path);
		}
		result = (string[]) availabledPaths.ToArray(typeof(string));
		return result;
	}

}
