using UnityEngine;
using System.Collections;


public class PathsDebug : MonoBehaviour {
	int selectedPathIndex = 0;
	int gridCell;
	Vector2 scrollPosition = Vector2.zero;
	string curPathType = "";
	string [] allConnections = new string[0];
	string[] allPaths = new string[0];
	Pathfinding.Node[] curRoute;
	bool drawCustomPath = true;
	bool showConnectionLength = true;
	bool showPathLength = false;
	bool readPathLength,readConnectionLength,atypical = false;
	int counter=-1;
	string startPointNStr="0",endPointNStr="1";
	Pathfinding.Node startPoint = new Pathfinding.Node(0,""),endPoint = new Pathfinding.Node(0,"");
	Rect textPos;
	Camera thisCamera;
	Pathfinding.RouteData routeData;
	bool enableButton = true;
	public string[] types = {"type1","type2","type3","type4","type5"};
	float drawTime = 0f;
	
	// Use this for initialization
	void Start () {
		if(!Pathfinding.DataLoaded())
			return;
		if(Pathfinding.pathsTypes.Length<1)
			return;
		curPathType = Pathfinding.Paths[selectedPathIndex].type;
	}
	
	// Update is called once per frame
	void Update () {
		if(!thisCamera)
			thisCamera = transform.camera;
		if(!Pathfinding.DataLoaded())
			return;
			if(Pathfinding.pathsTypes.Length<1)
			return;
		if(!atypical){
		if(readConnectionLength)
		ReadConnections();
		if(readPathLength)
		ReadPaths();
		DrawPaths();
		DrawSelectedPaths();
		}else{
		if(readConnectionLength)
		ReadAtypicalConnections();
		if(readPathLength)
		//ReadAtypicalPaths();
		DrawAtypicalPaths();
		DrawAtypicalSelectedPaths();
		}
		/*if(Input.GetKeyDown(KeyCode.Q)){
			GetRoute();
		}
		*/
	}
	
	
	void OnGUI(){
		if(!Pathfinding.DataLoaded())
			return;
	if(Pathfinding.pathsTypes.Length<1)
			return;
		PathTypeSelectionDialog ();
		if(!atypical)
	ShowGeneralPathsDialogs();
		else
	ShowAtypicalPathsDialogs();
	}
	
	void ShowGeneralPathsDialogs(){
		DrawNodeName();
		PathRouteDialog();
		scrollPosition = GUILayout.BeginScrollView(scrollPosition);
		showConnectionLength = GUILayout.Toggle(showConnectionLength,"show connectionLength");
		if(allConnections.Length>0 && showConnectionLength && !readConnectionLength)
		ShowPathsConnectionsDialog();
		showPathLength = GUILayout.Toggle(showPathLength,"show pathLength");
		if(allPaths.Length>0 && showPathLength && !readPathLength)
			ShowPathsLengthDialog();
		GUILayout.EndScrollView();
	}
	
	void ShowAtypicalPathsDialogs(){
		DrawAtypicalNodeName();
		AtypicalPathRouteDialog();
		scrollPosition = GUILayout.BeginScrollView(scrollPosition);
		showConnectionLength = GUILayout.Toggle(showConnectionLength,"show connectionLength");
		if(allConnections.Length>0 && showConnectionLength && !readConnectionLength)
		ShowAtypicalPathsConnectionsDialog();
		GUILayout.EndScrollView();
	}
	
	
	void PathTypeSelectionDialog(){
	GUILayout.BeginHorizontal ();
		GUILayout.Label("Select path type:");
		GUILayout.Label(curPathType);
	GUILayout.EndHorizontal ();
		
	GUILayout.BeginHorizontal ();
		GUILayout.Space(100);
		if(GUILayout.Button("<",GUILayout.Width(40))){
		selectedPathIndex--;
		Reset ();
		}
		if(GUILayout.Button("<",GUILayout.Width(40))){
		selectedPathIndex++;
		Reset();
		}
	GUILayout.EndHorizontal();
		selectedPathIndex = Mathf.Clamp (selectedPathIndex,0,Pathfinding.Paths.Length);//1added as atypical paths type(Length instead of Length-1)
		if(selectedPathIndex<Pathfinding.Paths.Length){
		curPathType = Pathfinding.Paths[selectedPathIndex].type;
		atypical = false;	
		}else{
		curPathType = "atypical";
		atypical = true;
		}
	}
	
	
	void ShowPathsConnectionsDialog(){
		gridCell = GUILayout.SelectionGrid(gridCell,allConnections,Pathfinding.Paths[selectedPathIndex].size);
	}
	
	void ShowPathsLengthDialog(){
		gridCell = GUILayout.SelectionGrid(gridCell,allPaths,Pathfinding.Paths[selectedPathIndex].size);	
	}
	
	void ShowAtypicalPathsConnectionsDialog(){
		gridCell = GUILayout.SelectionGrid(gridCell,allConnections,Pathfinding.newAtypicalPaths.nodes.Length);
	}
	
	/*void ShowAtypicalPathsLengthDialog(){
		gridCell = GUILayout.SelectionGrid(gridCell,allPaths,Pathfinding.newAtypicalPaths.nodes.Length);	
	}
	*/	
	
	void PathRouteDialog(){
	GUILayout.BeginHorizontal ();
	GUILayout.Label("Show path: from ");
	startPointNStr = GUILayout.TextField(startPointNStr);
	GUILayout.Label(" to ");
	endPointNStr = GUILayout.TextField (endPointNStr);
		if(GUILayout.Button ("Show") && enableButton){
		enableButton = false;
		startPoint.number = int.Parse (startPointNStr);
			startPoint.number--;
		startPoint.number = Mathf.Clamp (startPoint.number,0,Pathfinding.Paths[selectedPathIndex].size-1);
		endPoint.number = int.Parse(endPointNStr);
			endPoint.number--;
		endPoint.number = Mathf.Clamp (endPoint.number,0,Pathfinding.Paths[selectedPathIndex].size-1);
			Debug.Log ("start:"+(startPoint.number+1)+" end:"+(endPoint.number+1));
		}else enableButton = true;
		drawCustomPath = GUILayout.Toggle(drawCustomPath,"draw custom path");
	GUILayout.EndHorizontal();
	}
	
	void AtypicalPathRouteDialog(){
	GUILayout.BeginHorizontal ();
	GUILayout.Label("Show path: from ");
	startPointNStr = GUILayout.TextField(startPointNStr);
	GUILayout.Label(" of type");
	startPoint.type = GUILayout.TextField(startPoint.type);
	GUILayout.Label(" to ");
	endPointNStr = GUILayout.TextField(endPointNStr);
	GUILayout.Label(" of type");
	endPoint.type = GUILayout.TextField(endPoint.type);
		if(GUILayout.Button ("Show") && enableButton){
			enableButton = false;
		startPoint.number = int.Parse (startPointNStr);
		startPoint.number--;
		//startPoint.number = Mathf.Clamp (startPoint.number,0,Pathfinding.Paths[selectedPathIndex].size-1);
			endPoint.number = int.Parse(endPointNStr);
			endPoint.number--;
			//endPoint.number = Mathf.Clamp (endPoint.number,0,Pathfinding.Paths[selectedPathIndex].size-1);
			Debug.Log ("start:"+(startPoint.number+1)+" end:"+(endPoint.number+1));
			GetRoute ();
		}else enableButton = true;
		drawCustomPath = GUILayout.Toggle(drawCustomPath,"draw custom path");
	GUILayout.EndHorizontal();
	}
	
	void GetRoute(){
	routeData = new Pathfinding.RouteData();
	routeData.route = Pathfinding.GetRoute(types,startPoint,endPoint);
	routeData.curNode = new Pathfinding.Node(startPoint.number,startPoint.type);
	routeData.destinationNode = new Pathfinding.Node(endPoint.number,endPoint.type);
	routeData.nextNodeIndex = 0;
	routeData.nextNode = new Pathfinding.Node(-1,"");
	}
	
	void DrawNodeName(){
		int i;
		string nodeName ="none";
		Vector3 nodePosV3 = Vector3.zero;
		Vector3 nodePosScr = Vector3.zero;
	if(Pathfinding.Paths[selectedPathIndex].size<1)
			return;
		if(!thisCamera)
			return;
		for(i=0;i<Pathfinding.Paths[selectedPathIndex].size;i++){
		nodePosV3 = Pathfinding.GetWaypointInSpace(0.5f,i,Pathfinding.Paths[selectedPathIndex].type);
			if(Vector3.Angle(nodePosV3-transform.position,transform.forward)<thisCamera.fieldOfView ){
		nodePosScr = thisCamera.WorldToScreenPoint(nodePosV3);
		nodeName = (i+1).ToString()+Pathfinding.Paths[selectedPathIndex].type;
		textPos = new Rect(nodePosScr.x,nodePosScr.y,100,20);
		textPos.y = Screen.height-nodePosScr.y;
			GUI.Label(textPos,nodeName);	
		}
		}
	}
	
	void DrawAtypicalNodeName(){
		int i;
		string nodeName ="none";
		Vector3 nodePosV3 = Vector3.zero;
		Vector3 nodePosScr = Vector3.zero;
	if(Pathfinding.newAtypicalPaths.nodes.Length<1)
			return;
		if(!thisCamera)
			return;
		for(i=0;i<Pathfinding.newAtypicalPaths.nodes.Length;i++){
		nodePosV3 = Pathfinding.GetWaypointInSpace(0.5f,Pathfinding.newAtypicalPaths.nodes[i].number,Pathfinding.newAtypicalPaths.nodes[i].type);
			if(Vector3.Angle(nodePosV3-transform.position,transform.forward)<thisCamera.fieldOfView ){
		nodePosScr = thisCamera.WorldToScreenPoint(nodePosV3);
nodeName = (Pathfinding.newAtypicalPaths.nodes[i].number+1).ToString()+Pathfinding.newAtypicalPaths.nodes[i].type;
		textPos = new Rect(nodePosScr.x,nodePosScr.y,100,20);
		textPos.y = Screen.height-nodePosScr.y;
			GUI.Label(textPos,nodeName);	
		}
		}
	}
	
	void ReadConnections(){
	int i,j;
		counter = -1;
		allConnections = new string[Pathfinding.Paths[selectedPathIndex].size*Pathfinding.Paths[selectedPathIndex].size];
		for(i=0;i<Pathfinding.Paths[selectedPathIndex].size;i++){
		for(j=0;j<Pathfinding.Paths[selectedPathIndex].size;j++){
			counter++;
			allConnections[counter] = i.ToString()+"-"+j.ToString()+":"+Pathfinding.Paths[selectedPathIndex].connectionLength[i,j].ToString();
			}
		}
		//Debug.Log ("counter:"+counter);
		readConnectionLength = false;
	}
	
	void ReadPaths(){
	int i,j;
		counter=-1;
		allPaths = new string[Pathfinding.Paths[selectedPathIndex].size*Pathfinding.Paths[selectedPathIndex].size];
		for(i=0;i<Pathfinding.Paths[selectedPathIndex].size;i++){
		for(j=0;j<Pathfinding.Paths[selectedPathIndex].size;j++){
			counter++;
			allPaths[counter] = i.ToString()+"-"+j.ToString()+":"+Pathfinding.Paths[selectedPathIndex].pathLength[i,j].ToString();
			}
		}
		readPathLength = false;
	}
	
	void DrawPaths(){
		int i,j;
		string curType ="";
	if(Pathfinding.Paths[selectedPathIndex].size<1)
			return;
		curType = Pathfinding.Paths[selectedPathIndex].type;
	for(i=0;i<Pathfinding.Paths[selectedPathIndex].size;i++){
		for(j=0;j<Pathfinding.Paths[selectedPathIndex].size;j++){
			if(Pathfinding.Paths[selectedPathIndex].connectionLength[i,j]<Mathf.Infinity){
			Debug.DrawLine(Pathfinding.GetWaypointInSpace(0.5f,i,curType),Pathfinding.GetWaypointInSpace(0.5f,j,curType),Color.green);		
				}
			}
			
		}
	}
	
	void DrawAtypicalPaths(){
		int i,j;
		Vector3 point1,point2;
	if(Pathfinding.newAtypicalPaths.nodes.Length<1)
			return;
		for(i=0;i<Pathfinding.newAtypicalPaths.nodes.Length;i++){
		for(j=0;j<Pathfinding.newAtypicalPaths.nodes.Length;j++){
				if(i!=j){
			if(Pathfinding.newAtypicalPaths.nodes[i].type != Pathfinding.newAtypicalPaths.nodes[j].type ){
			if(Pathfinding.newAtypicalPaths.connectionLength[i,j]!=Mathf.Infinity && i!=j){
point1 = Pathfinding.GetWaypointInSpace(0.5f,Pathfinding.newAtypicalPaths.nodes[i].number,Pathfinding.newAtypicalPaths.nodes[i].type);
point2 = Pathfinding.GetWaypointInSpace(0.5f,Pathfinding.newAtypicalPaths.nodes[j].number,Pathfinding.newAtypicalPaths.nodes[j].type);
Debug.DrawLine(point1,point2,Color.green);		
					}
				}else{
DrawIntermediateAtypicalPaths(Pathfinding.newAtypicalPaths.nodes[i].number,Pathfinding.newAtypicalPaths.nodes[j].number,Pathfinding.newAtypicalPaths.nodes[i].type);		
				}
			}
			}
		}
	}
	
	void DrawIntermediateAtypicalPaths(int firstPoint,int secondPoint,string type){
		int pathIndex = Pathfinding.FindPathOfType(type);
		if(pathIndex<0)
			return;
		int i,next,prev;
		prev = firstPoint;
		next = Pathfinding.Paths[pathIndex].nextPoint[firstPoint,secondPoint];
		for(i=0;i<Pathfinding.Paths[pathIndex].size;i++){
Debug.DrawLine (Pathfinding.GetWaypointInSpace(0.5f,prev,type),Pathfinding.GetWaypointInSpace(0.5f,next,type),Color.yellow);
		if(next == secondPoint)
				break;
		prev = next;
		next = Pathfinding.Paths[pathIndex].nextPoint[next,secondPoint];
		}		
	}
	
	
	void DrawSelectedPaths(){
		if(!drawCustomPath)
	     return;
		if(Pathfinding.Paths[selectedPathIndex].size<1)
			return;
		int i,next,prev;
		prev = startPoint.number;
		next = Pathfinding.Paths[selectedPathIndex].nextPoint[startPoint.number,endPoint.number];
		for(i=0;i<Pathfinding.Paths[selectedPathIndex].size;i++){
Debug.DrawLine (Pathfinding.GetWaypointInSpace(0.5f,prev,Pathfinding.Paths[selectedPathIndex].type),Pathfinding.GetWaypointInSpace(0.5f,next,Pathfinding.Paths[selectedPathIndex].type),Color.blue);
		if(next == endPoint.number)
				break;
		prev = next;
		next = Pathfinding.Paths[selectedPathIndex].nextPoint[next,endPoint.number];
		}
	}
	
	
	void DrawAtypicalSelectedPaths(){
		if(!drawCustomPath)
	     return;
		if(Time.time>drawTime){
		drawTime = Time.time+0.1f;	
		}else return;
		if(Pathfinding.newAtypicalPaths.nodes.Length<1)
			return;
		if(startPoint.number == endPoint.number && startPoint.type == endPoint.type)
			return;
		//Debug.Log ("Request route: startPoint number="+startPoint.number+" of type "+startPoint.type);
		//Debug.Log ("			   endPoint number="+endPoint.number+" of type "+endPoint.type);
		int i;
		Pathfinding.Node prev = new Pathfinding.Node(startPoint.number,startPoint.type);
		routeData.curNode = new Pathfinding.Node(startPoint.number,startPoint.type);
		routeData.destinationNode = new Pathfinding.Node(endPoint.number,endPoint.type);
		routeData.nextNode = new Pathfinding.Node(-1,"");
		routeData.nextNodeIndex = 0;
        routeData = Pathfinding.GetNextNode(routeData);
		for(i=0;i<34567;i++){
Debug.DrawLine(Pathfinding.GetWaypointInSpace(0.5f,prev.number,prev.type),Pathfinding.GetWaypointInSpace(0.5f,routeData.curNode.number,routeData.curNode.type),Color.blue,0.1f);	
		if(routeData.curNode.number == routeData.destinationNode.number)
			if(routeData.curNode.type == routeData.destinationNode.type)
				break;
		//Debug.Log ("prev:"+prev.number.ToString ()+prev.type+"; curPoint:"+routeData.curPoint.number.ToString ()+routeData.curPoint.type);
			prev = new Pathfinding.Node(routeData.curNode.number,routeData.curNode.type);
			//Debug.Log ("Calculate new cur point(step "+i+")");
		routeData = Pathfinding.GetNextNode(routeData);
		}
		
	}
	
	
	
	
	void Reset(){
	readPathLength = true;
	readConnectionLength = true;
	startPointNStr = "1";
	endPointNStr = "2";
	startPoint.number = 0;
	endPoint.number = 0;
		startPoint.type ="t";
		endPoint.type = "t";
		drawCustomPath = false;
	}
	
//Atypical paths functions
	void ReadAtypicalConnections(){
	int i,j;
		counter = -1;
		string curConnection ="";
		allConnections = new string[Pathfinding.newAtypicalPaths.nodes.Length*Pathfinding.newAtypicalPaths.nodes.Length];
		for(i=0;i<Pathfinding.newAtypicalPaths.nodes.Length;i++){
		for(j=0;j<Pathfinding.newAtypicalPaths.nodes.Length;j++){
			counter++;
curConnection = Pathfinding.newAtypicalPaths.nodes[i].number.ToString()+ Pathfinding.newAtypicalPaths.nodes[i].type+"-";
curConnection+= Pathfinding.newAtypicalPaths.nodes[j].number.ToString()+ Pathfinding.newAtypicalPaths.nodes[j].type+";";
curConnection+= Pathfinding.newAtypicalPaths.connectionLength[i,j].ToString();
			allConnections[counter] = curConnection;
			}
		}
		//Debug.Log ("counter:"+counter);
		readConnectionLength = false;
	}	
	


}
