using UnityEngine;
using System.Collections;

public class PathfindingManager : MonoBehaviour {
	public  string fileName = "dummyScene1";
	public  string fileFolder = "NAPS/Paths";
	string filePath = "";
	public bool autoload = false;
	bool newFilePathDialog = true;
	
	void Awake(){
		filePath = Application.dataPath+"/"+fileFolder;
		if(!autoload)
			return;
		if(!Pathfinding.DataLoaded()){
		Pathfinding.LoadNavigationData(filePath,fileName);
		newFilePathDialog = false;
		}
	}
	
	void Update(){
		if(!autoload)
			return;
		if(!Pathfinding.DataLoaded()){
		Pathfinding.LoadNavigationData(filePath,fileName);
		newFilePathDialog = false;
		}
	}
	
	void Start(){
	Debug.Log ("Paths size = "+Pathfinding.Paths.Length);	
	}
	
	void OnGUI(){
	GUILayout.BeginVertical ();	
	if(newFilePathDialog){
	GUILayout.BeginHorizontal ();
	GUILayout.Label("file path:");
	filePath = GUILayout.TextField(filePath,GUILayout.MaxWidth(250));
	GUILayout.EndHorizontal ();
	GUILayout.BeginHorizontal ();
	GUILayout.Label("file name:",GUILayout.MaxWidth(65));
	fileName = GUILayout.TextField(fileName,GUILayout.MaxWidth(100));
	GUILayout.EndHorizontal ();
		if(GUILayout.Button ("Load",GUILayout.MaxWidth(40))){
		Pathfinding.LoadNavigationData(filePath,fileName);
		newFilePathDialog = false;
			}
		}else{
		if(GUILayout.Button ("Load other file"))
		newFilePathDialog = true;
		}
	GUILayout.EndVertical ();
	}
}