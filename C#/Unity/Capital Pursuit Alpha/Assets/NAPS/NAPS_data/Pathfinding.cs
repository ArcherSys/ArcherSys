using UnityEngine;
using System.Collections;
using System.Collections.Generic;
/*
 * Made by Vladimir SILENT Maevskiy
 */ 

public  class Pathfinding : MonoBehaviour {

	public static GameObject PathsRoot;
	public static string pathsRootObject = "Paths";
	public static string[] pathsTypes;
	public static Path[] Paths = new Path[0];
	public static PathsStore newPathsStore;
	public static AtypicalPaths newAtypicalPaths = new AtypicalPaths();
	public static TrajectoryData trajectoryData = new TrajectoryData();
	//temporary static Vector3 variable (used to share data between some functions)
	public static Vector3 tempV3 = Vector3.zero;
	//global infinity point
	public static Vector3 DeadEndPoint = new Vector3(Mathf.Infinity,Mathf.Infinity,Mathf.Infinity);
	
//Separate matrices modification	
	[System.Serializable]
	public  class Path
	{
	public string type = "";
	public  float [,] connectionLength = new float[0,0];
	[System.NonSerialized]	
	public  float [,] pathLength = new float[0,0];
	[System.NonSerialized]	
	public  int [,] nextPoint = new int[0,0];
	public  int size = 0;
	public  Waypoint [] Waypoints = new Waypoint[0];
	}
	
	[System.Serializable]
	public class Waypoint
	{
	public AtypicalNode[] atypicalConnections = new AtypicalNode[0];
	[System.NonSerialized]	
	public Transform transform;
	}
	
	[System.Serializable]
	public class AtypicalNode
	{
	public string type = "";
	public int number = -1;
	public float linkWeigth = 0.0f;
	}
	
// classes to store curves data----------------------
	[System.Serializable]
	public class TrajectoryData
	{
	public ArrayList nodes = new ArrayList();
	[System.NonSerialized]
	public Dictionary<string,int> indexOf = new Dictionary<string,int >();
	public CurveData[,] curvesData = new CurveData[0,0];
	}
	
	
	[System.Serializable]
	public class CurveData
	{
	public Vector3S[] tangents = new Vector3S[0];	
	}
	
	
	[System.Serializable]
	public class Vector3S
	{
	float x=0,y=0,z=0;
		public Vector3S(UnityEngine.Vector3 v3){
		x = v3.x;
		y = v3.y;
		z = v3.z;
		}
		
		public UnityEngine.Vector3 GetVector3(){
		return new UnityEngine.Vector3(x,y,z);	
		}
	}
///---------------------------------------------------
	
		[System.Serializable]
	public class PathsStore
	{
	public Pathfinding.Path[] PathsData = new Pathfinding.Path[0];
	public Pathfinding.TrajectoryData trajectoryData = new Pathfinding.TrajectoryData();	
		[System.Serializable]
		public class PathObject
		{
			[System.Serializable]
			public class NodeObject
			{
				string name ="";
				float x,y,z,x1,y1,z1;
				public bool bipoint = false;
				public NodeObject(string n,UnityEngine.Vector3 p)
				{
				name = n;
				x = p.x;
				y = p.y;
				z = p.z;
				}
				
				public Vector3 GetPosition()
				{
				return new Vector3(x,y,z);
				}
				
				public string GetName()
				{
				return name;	
				}
				
				public void SetChildPos(UnityEngine.Vector3 p)
				{
				x1 = p.x;
				y1 = p.y;
				z1 = p.z;
				bipoint = true;
				}
				
				public Vector3 GetChildPos()
				{
				return new Vector3(x1,y1,z1);	
				}
			}
			public string type ="";
			public NodeObject[] Nodes = new NodeObject[0];
		}
	public PathObject[] PathsObjects = new PathObject[0];
	}
	
	[System.Serializable]
	public class Node
	{
	public int number = -1;
	public string type = "";
		public Node(int n,string t){
		number = n;
		type = t;
		}
	}
	
	public class AtypicalPaths
	{
	public Node[] nodes = new Node[0];
	public Dictionary<string,int> indexOf = new Dictionary<string, int>();
	public float[,] connectionLength = new float[0,0];
	}
	
	//AI class used to store route data
	public class RouteData
	{
	public Node[] route = new Node[0];
	public Node curNode = new Node(-1,"");
	public Node nextNode = new Node(-1,"");
	public Node destinationNode = new Node(-1,"");
	public Node prevNode = new Node(-1,"");
	public int nextNodeIndex = 0;

		public Node[] GetCurrentArea(){
			Node[] result = new Node[2];
			if(!Pathfinding.NodeIsEmpty(prevNode))
				result[0] = prevNode;
			else result = new Node[0];
			if(result.Length==2){
				if(!Pathfinding.NodeIsEmpty(curNode))
					result[1] = curNode;
				else result = new Node[0];
			}
			return result;
		}

		public bool CurrentAreaDefined(){
			bool result = true;
			if(NodeIsEmpty(prevNode)||NodeIsEmpty(curNode))
				result = false;
			return result;
		}

		public bool IsNotValid(){
			bool result = false;
			if(Pathfinding.NodeIsEmpty (curNode) ||Pathfinding.NodeIsEmpty (nextNode) || Pathfinding.NodeIsEmpty (destinationNode)){
				result = true;
			}
			return result;
		}
	}
	
	//AI class used to store movement through curve data
	public class MotionCurve
	{
	public CurveData curve = new CurveData();
	public float curveLength = 0f;
	public float passedDist = 0f;
	public Vector3 lastPoint = new Vector3(Mathf.Infinity,Mathf.Infinity,Mathf.Infinity);
	public Vector3 newPoint =  new Vector3(Mathf.Infinity,Mathf.Infinity,Mathf.Infinity);
	}

	[System.Serializable]
	public struct Constraint3
	{
		public bool a,b,c;

		public Constraint3(bool A,bool B,bool C){
			a = A;
			b = B;
			c = C;
		}
	}
	
	
	public static void CheckConnections(string pathType){
	int pathIndex = FindPathOfType(pathType);
	if(pathIndex<0)
		return ;
	int i;
	int j ;
	Vector3 point1Pos;
	Vector3 point2Pos;
		for(i=0;i<Paths[pathIndex].size;i++){
		for(j=0;j<Paths[pathIndex].size;j++){
			if(i==j){
			Paths[pathIndex].connectionLength[i,j] = Mathf.Infinity;
		}else{
			point1Pos = GetWaypointInSpace(0.5f,i,pathType);
			point2Pos = GetWaypointInSpace(0.5f,j,pathType);
			if(!Physics.Linecast(point1Pos,point2Pos)){
			Paths[pathIndex].connectionLength[i,j] = Vector3.Distance (point1Pos,point2Pos);	
			}else{
			 Paths[pathIndex].connectionLength[i,j] = Mathf.Infinity;		
			}
			}
			}
		}
	}
	

	
public static void CalculatePaths(string pathType){
	int pathIndex = FindPathOfType(pathType);
	if(pathIndex<0)
		return ;
		int i;
		int j;
		int k;
		float Infinity = Mathf.Infinity;
		Paths[pathIndex].pathLength = new float[Paths[pathIndex].size,Paths[pathIndex].size];
		Paths[pathIndex].nextPoint = new int[Paths[pathIndex].size,Paths[pathIndex].size];
		for(i=0;i<Paths[pathIndex].size;i++){
		for(j=0;j<Paths[pathIndex].size;j++){
				Paths[pathIndex].pathLength[i,j] = Paths[pathIndex].connectionLength[i,j];
				if(Paths[pathIndex].connectionLength[i,j]== Mathf.Infinity)
				Paths[pathIndex].nextPoint[i,j] =-1;	
				else
				Paths[pathIndex].nextPoint[i,j] = j;
			}
		}
		for(i=0;i<Paths[pathIndex].size;i++){
			for(j=0;j<Paths[pathIndex].size;j++){
				for(k=0;k<Paths[pathIndex].size;k++){
				//if(i!=j && Paths[pathIndex].pathLength[j,i]!= Infinity && i!=k && Paths[pathIndex].pathLength[i,k]!=Infinity)
				if(i!=j && Paths[pathIndex].pathLength[j,i]!= Infinity && i!=k && Paths[pathIndex].pathLength[i,k]!=Infinity)
				if(Paths[pathIndex].pathLength[j,k]==Infinity || Paths[pathIndex].pathLength[j,k]>Paths[pathIndex].pathLength[j,i]+Paths[pathIndex].pathLength[i,k]){
					Paths[pathIndex].nextPoint[j,k] = Paths[pathIndex].nextPoint[j,i];
					Paths[pathIndex].pathLength[j,k] = Paths[pathIndex].pathLength[j,i]+Paths[pathIndex].pathLength[i,k];
					}
				}

			}

		}
		for(i=0;i<Paths[pathIndex].size;i++){
		for(j=0;j<Paths[pathIndex].size;j++){
				if(i==j){
			Paths[pathIndex].pathLength[i,j] = 0;
			Paths[pathIndex].nextPoint[i,j] = i;
			}
			}
		}
	}


	
	public static void RebuildPath(string type,int removedNode,int curSize){
	int pathIndex = FindPathOfType(type);
	if(pathIndex<0)
			return;
		Path tempPath = new Path();
		if(removedNode ==-1 && Paths[pathIndex].size == curSize)
			return;
Debug.Log ("rebuild path: type = "+type+"; removedNode = "+removedNode+"; curSize = "+curSize+"; Path of type "+type+" size ="+Paths[pathIndex].size);
		int i,j,i2,j2;
		//deleted node is inside of nodes row
		//===========================================================
		if(removedNode>-1){
		RebuildTrajectoryData(new Node(removedNode,type),false);
		tempPath = new Path();
		tempPath.type = type;
		tempPath.size = curSize;
		tempPath.connectionLength = new float[tempPath.size,tempPath.size];
		tempPath.Waypoints = new Waypoint[tempPath.size];
		i2 = -1;
		j2 = -1;
		//remove connection link with removed node(just do not write removedNode link to a new array)
		for(i=0;i<Paths[pathIndex].size;i++){
				j2=-1;
			for(j=0;j<Paths[pathIndex].size;j++){
			if(j!=removedNode && i!=removedNode){
				if(j2<0)
				i2++;
				j2++;
				Debug.Log ("this index:i2="+i2+";j2="+j2);
				tempPath.connectionLength[i2,j2] = Paths[pathIndex].connectionLength[i,j];
				Debug.Log ("write:tempPath.connectionLength["+i2+","+j2+"]="+tempPath.connectionLength[i2,j2]+"Paths[pathIndex].connectionLength["+i+","+j+"]");
				}
				}
			if(i!=removedNode){
			tempPath.Waypoints[i2] = new Waypoint();
			tempPath.Waypoints[i2].transform = Paths[pathIndex].Waypoints[i].transform;
			tempPath.Waypoints[i2].atypicalConnections = Paths[pathIndex].Waypoints[i].atypicalConnections;
				}
				
		}
			Paths[pathIndex] = new Path();
			Paths[pathIndex].type = tempPath.type;
			Paths[pathIndex].size = curSize;
			Paths[pathIndex].connectionLength = new float [curSize,curSize];
			Paths[pathIndex].pathLength = new float [curSize,curSize];
			Paths[pathIndex].nextPoint = new int[curSize,curSize];
			Paths[pathIndex].Waypoints = new Waypoint[curSize];
			for(i=0;i<curSize;i++){
				for(j=0;j<curSize;j++){
			Paths[pathIndex].connectionLength[i,j] = tempPath.connectionLength[i,j];	
			}
			Paths[pathIndex].Waypoints[i] = new Waypoint();
				Paths[pathIndex].Waypoints[i] = tempPath.Waypoints[i];
			}
			CalculatePaths(type);
		}else if(Paths[pathIndex].size > curSize) {
			RebuildTrajectoryData(new Node(removedNode,type),true);
			tempPath = new Path();
			tempPath.type = Paths[pathIndex].type;
			tempPath.size = curSize;
			tempPath.connectionLength = new float[curSize,curSize];
			tempPath.pathLength = new float[curSize,curSize];
			tempPath.nextPoint = new int[curSize,curSize];
			tempPath.Waypoints = new Waypoint[curSize];
			for(i=0;i<curSize;i++){
				for(j=0;j<curSize;j++){
				tempPath.connectionLength[i,j] = Paths[pathIndex].connectionLength[i,j];
				tempPath.pathLength[i,j] = Paths[pathIndex].pathLength[i,j];
				tempPath.nextPoint[i,j] = Paths[pathIndex].nextPoint[i,j];
				}
			tempPath.Waypoints[i] = new Waypoint();	
				tempPath.Waypoints[i].atypicalConnections = Paths[pathIndex].Waypoints[i].atypicalConnections;
				tempPath.Waypoints[i].transform = Paths[pathIndex].Waypoints[i].transform;
			}
	    Paths[pathIndex] = tempPath;
			return;
		}else if(Paths[pathIndex].size<curSize){
		tempPath = new Path();
			tempPath.size = Paths[pathIndex].size;
			tempPath.type = Paths[pathIndex].type;;
			tempPath.connectionLength = new float[tempPath.size,tempPath.size];
			tempPath.pathLength = new float[tempPath.size,tempPath.size];
			tempPath.nextPoint = new int[tempPath.size,tempPath.size];
			tempPath.Waypoints = new Waypoint[tempPath.size];
			for(i=0;i<tempPath.size;i++){
				for(j=0;j<tempPath.size;j++){
				tempPath.connectionLength[i,j] = Paths[pathIndex].connectionLength[i,j];
				tempPath.pathLength[i,j] = Paths[pathIndex].pathLength[i,j];
				tempPath.nextPoint[i,j] = Paths[pathIndex].nextPoint[i,j];
				}
			tempPath.Waypoints[i] = new Waypoint();	
				tempPath.Waypoints[i].atypicalConnections = Paths[pathIndex].Waypoints[i].atypicalConnections;
				tempPath.Waypoints[i].transform = Paths[pathIndex].Waypoints[i].transform;
			}
			Paths[pathIndex] = new Path();
			Paths[pathIndex].type = tempPath.type;
			Paths[pathIndex].size = curSize;
			Paths[pathIndex].connectionLength = new float[curSize,curSize];
			Paths[pathIndex].pathLength = new float[curSize,curSize];
			Paths[pathIndex].nextPoint = new int[curSize,curSize];
			Paths[pathIndex].Waypoints = new Waypoint[curSize];
		Transform typeT = PathsRoot.transform.Find(type);
		if(typeT){
		if(typeT.childCount>0){
			for(i=0;i<typeT.childCount;i++){
				Paths[pathIndex].Waypoints[i] = new Waypoint();
				Paths[pathIndex].Waypoints[i].transform = typeT.GetChild (i);	
				}
			}
		}
		CheckConnections (type);
		for(i=0;i<curSize;i++){
		 for(j=0;j<curSize;j++){
				if(i<tempPath.size && j<tempPath.size)
			Paths[pathIndex].connectionLength[i,j] = tempPath.connectionLength[i,j];
				//else if(j>=tempPath.size)
			//Paths[pathIndex].connectionLength[i,j] = Mathf.Infinity;			
			}
				if(i<tempPath.size)
				Paths[pathIndex].Waypoints[i].atypicalConnections = tempPath.Waypoints[i].atypicalConnections;
		}

			CalculatePaths(type);
		}
	}
	
	
	public static void RebuildTrajectoryData(Node node,bool lastNode){
	int i,j,i2,j2,nodeIndex,newSize;
		Node tempNode = new Node(-1,"");
		if(lastNode){
		i = Pathfinding.FindPathOfType(node.type);
		if(i>-1){
		tempNode.number =Pathfinding.Paths[i].size-1; 
		tempNode.type = node.type;		
			}else Debug.Log ("Path of type "+node.type+" not found!");
		j = tempNode.number;
		}else j = node.number;
		string key = tempNode.number.ToString ()+tempNode.type;

		CurveData[,] tempCurvesData = new CurveData[0,0];
		tempCurvesData = Pathfinding.trajectoryData.curvesData;
		if(trajectoryData.indexOf.Count<1)
			return;
		
		newSize = trajectoryData.indexOf.Count -1;
		//node index in curves data matrix
		if(!trajectoryData.indexOf.ContainsKey(key)){
		Debug.Log ("Key not found in indexOf dictionary:"+key);
			return;
		}
		nodeIndex = trajectoryData.indexOf[key];
		Debug.Log ("remove node "+key+"; cur trajectory nodes.Count = "+trajectoryData.nodes.Count);
		//rebuilding indexes of trajectoryData.indexOf dictionary
		trajectoryData.nodes.RemoveAt(nodeIndex);
		ArrayList newNodes = new ArrayList();
		trajectoryData.indexOf = new Dictionary<string, int>();
		
		for(i=0;i<trajectoryData.nodes.Count;i++){
		tempNode =  trajectoryData.nodes[i] as Node;
			if(tempNode.number>j)
				tempNode.number--;
			newNodes.Add (tempNode);
			trajectoryData.indexOf.Add (tempNode.number.ToString()+tempNode.type,i);
		}
		trajectoryData.nodes = newNodes;
		Debug.Log ("cur nodes.Count = "+trajectoryData.nodes.Count+"; indexOf.Count ="+trajectoryData.indexOf.Count);
		//rebuilding curve data matrix
		tempCurvesData = new CurveData[newSize,newSize];
		if(!lastNode){
		i2 = -1;
		j2 = -1;
		for(i=0;i<newSize+1;i++){
			j2 = -1;
		for(j=0;j<newSize+1;j++){
			if(i!=nodeIndex && j!=nodeIndex){
				if(j2<0)
				i2++;
				j2++;
				tempCurvesData[i2,j2] = trajectoryData.curvesData[i,j];
				}
			}
		}
		}else{
		for(i=0;i<newSize;i++)
		for(j=0;j<newSize;j++){
		tempCurvesData[i,j] = trajectoryData.curvesData[i,j];		
		}
		}
		trajectoryData.curvesData = tempCurvesData;
		Debug.Log ("curvesData size x size:"+trajectoryData.curvesData.Length);
	}
	
	public static Vector3 GetWaypointInSpace(float v,int index,string pathType){
		int pathIndex = FindPathOfType(pathType);
		if(pathIndex<0)
			return Vector3.zero;
		Vector3 result; 
		float va = 1.0F-v;
		Transform waypoint = Paths[pathIndex].Waypoints[index].transform;
		if(!waypoint)
			return Vector3.zero;
		if(waypoint.childCount>0){
		result = (waypoint.GetChild (0).position- waypoint.position)*va;
			result = waypoint.position+result;
		}else{
		result = waypoint.position;	
		}
		return result;
	}


	public static Vector3 GetWaypointInSpace(float v,Node node){
		int pathIndex = FindPathOfType(node.type);
		if(pathIndex<0){
			Debug.Log ("Path of type "+node.type+" not found! Return Vector3.zero!");
			return Vector3.zero;
		}
		Vector3 result; 
		float va = 1.0F-v;
		Transform waypoint = Paths[pathIndex].Waypoints[node.number].transform;
		if(!waypoint)
			return Vector3.zero;
		if(waypoint.childCount>0){
			result = (waypoint.GetChild (0).position- waypoint.position)*va;
			result = waypoint.position+result;
		}else{
			result = waypoint.position;	
		}
		return result;
	}
	
	public static Vector3 GetWaypointInSpace(float v,int index,int pathIndex){
		Vector3 result = Vector3.zero; 		
		if(pathIndex<0)
			return result;
		float va = 1.0F-v;
		Transform waypoint = Paths[pathIndex].Waypoints[index].transform;
		if(!waypoint)
			return result;
		if(waypoint.childCount>0){
		result = (waypoint.GetChild (0).position- waypoint.position)*va;
			result = waypoint.position+result;
		}else{
		result = waypoint.position;	
		}
		return result;
	}
	
	
	 public static int FindPathOfType(string pathType){
	 int result =-1;
	 int i;
		for(i=0;i<Paths.Length;i++){
		if(Paths[i].type == pathType){
		result = i;
		break;
		}
		}
		if(result ==-1)
		Debug.Log ("Error: path of type "+pathType+" no exist!");
			return result;
	}
	
	
	public static Transform GetPointTransform(int nodeNumber,string type){
		int pathIndex = FindPathOfType(type);
		if(pathIndex<0){
		Debug.Log ("Error:Path of type "+type+" not exist!");	
		return null;
		}
		if(Paths[pathIndex].size>nodeNumber)
		return Paths[pathIndex].Waypoints[nodeNumber].transform;
		else{
		Debug.Log ("Error:Path of type "+type+" does not contain point "+nodeNumber+"!");
		return null;	
		}
	}
	

 public static void SerializePaths(string filePath,string fileName){
	GameObject pathsRoot = GameObject.Find(Pathfinding.pathsRootObject);
		if(!pathsRoot){
		Debug.Log ("Error:Can't save paths data!(paths root object not found)");	
		return;
		}
		if(pathsRoot.transform.childCount<0){
		Debug.Log ("Error:paths object is not contain any type of path!");	
			return;
		}
		//Debug.Log ("paths serialized");
		newPathsStore = new PathsStore();
		SerializePathsObjects(pathsRoot.transform);
		SerializePathsData();
		SerializeTrajectory();
		BINS.Save(newPathsStore,filePath,fileName);
	}		


 public static void SerializePathsObjects(Transform pO){
	newPathsStore.PathsObjects = new PathsStore.PathObject[pO.childCount];
		int i,j;
		Transform type;
		Transform node;
		for(i=0;i<pO.childCount;i++){
			type = pO.GetChild (i);
			newPathsStore.PathsObjects[i] = new PathsStore.PathObject();
		newPathsStore.PathsObjects[i].type = type.name;
			if(type.childCount>0){
				newPathsStore.PathsObjects[i].Nodes = new PathsStore.PathObject.NodeObject[type.childCount];
			for(j=0;j<type.childCount;j++){
				node = type.GetChild (j);
			newPathsStore.PathsObjects[i].Nodes[j] = new PathsStore.PathObject.NodeObject(node.name,node.position);
					if(node.childCount>0){
					newPathsStore.PathsObjects[i].Nodes[j].SetChildPos(node.GetChild(0).position);	
					}
				}
			}
		}
		type = null;
		node = null;
	}
	
	public static void SerializePathsData(){
	newPathsStore.PathsData = new Pathfinding.Path[Pathfinding.Paths.Length];
		int i;
		for(i=0;i<Pathfinding.Paths.Length;i++){
		newPathsStore.PathsData[i] = Pathfinding.Paths[i];	
		}
	}
	
	public static void SerializeTrajectory(){
	newPathsStore.trajectoryData = trajectoryData;	
	}
	

	
	public static void DeserializePaths(string filePath,string fileName){
		Reset ();
		newPathsStore = BINS.Load(filePath,fileName) as PathsStore;
		GameObject pathsRoot = GameObject.Find(Pathfinding.pathsRootObject);
		if(pathsRoot){
		DestroyImmediate(pathsRoot);
		}
		pathsRoot = new GameObject();
		pathsRoot.transform.position = Vector3.zero;
		pathsRoot.name = Pathfinding.pathsRootObject;
		Pathfinding.PathsRoot = pathsRoot;
		//PathsRoot.hideFlags = HideFlags.HideInHierarchy;
		GameObject.DontDestroyOnLoad(PathsRoot);
		if(newPathsStore != null){
		DeserializePathsObjects(pathsRoot);
		DeserializePathsData(pathsRoot);
		DeserializeTrajectory();
		}
		int i;
		for(i=0;i<pathsTypes.Length;i++){
			CalculatePaths(pathsTypes[i]);
		}

	}
	
	
 public static void DeserializePathsObjects(GameObject pO){
		int i,j;
		GameObject type;
		GameObject node;
		GameObject nodeChild;
		
		for(i=0;i<newPathsStore.PathsObjects.Length;i++){
		type = new GameObject();
		type.transform.parent = pO.transform;
		type.name = newPathsStore.PathsObjects[i].type;
			if(newPathsStore.PathsObjects[i].Nodes.Length>0){
			for(j=0;j<newPathsStore.PathsObjects[i].Nodes.Length;j++){
				node = new GameObject();
				node.transform.parent = type.transform;
				node.transform.position = newPathsStore.PathsObjects[i].Nodes[j].GetPosition();
				node.name = newPathsStore.PathsObjects[i].Nodes[j].GetName();
				if(newPathsStore.PathsObjects[i].Nodes[j].bipoint){
					nodeChild = new GameObject();
					nodeChild.transform.parent = node.transform;
					nodeChild.name = node.name;
					nodeChild.transform.position = newPathsStore.PathsObjects[i].Nodes[j].GetChildPos();
					}
				}
			}
		}
		type = null;
		node = null;
	}
	
 public static void DeserializePathsData(GameObject pO){
		if(newPathsStore.PathsData.Length<1){
		Debug.Log ("Error: length of newPathsStore.PathsData<1");
			return;
		}
	Pathfinding.Paths = new Pathfinding.Path[newPathsStore.PathsData.Length];
	Pathfinding.pathsTypes = new string[newPathsStore.PathsData.Length];
		int i;
		int j;
		Transform type;
		for(i=0;i<newPathsStore.PathsData.Length;i++){
		Pathfinding.Paths[i] = newPathsStore.PathsData[i];	
		Pathfinding.pathsTypes[i] = newPathsStore.PathsData[i].type;
		Pathfinding.Paths[i].Waypoints = newPathsStore.PathsData[i].Waypoints;
			type = pO.transform.Find (newPathsStore.PathsData[i].type);
			if(type){
			if(type.childCount>0){
					if(Pathfinding.Paths[i].Waypoints.Length<1)
			Pathfinding.Paths[i].Waypoints = new Waypoint[type.childCount];
			for(j=0;j<type.childCount;j++){
				if(Pathfinding.Paths[i].Waypoints[j]==null)
			Pathfinding.Paths[i].Waypoints[j] = new Waypoint();
			Pathfinding.Paths[i].Waypoints[j].transform = type.GetChild (j);			
					}
				}
			}
		}
		type = null;
	}
	
	public static void DeserializeTrajectory(){
	if(newPathsStore.trajectoryData.nodes.Count<1)
			return;
		int i;
		Node tempNode;
	Pathfinding.trajectoryData = newPathsStore.trajectoryData;
		//loading "indexOf" dictionary from "nodes" array
		trajectoryData.indexOf = new Dictionary<string, int>();
		for(i=0;i<newPathsStore.trajectoryData.nodes.Count;i++){
		tempNode = newPathsStore.trajectoryData.nodes[i] as Node;
		trajectoryData.indexOf.Add (tempNode.number.ToString ()+tempNode.type,i);
		}
	}
	
	
	public static void Reset(){
	pathsTypes = new string[0];
	Paths = new Path[0];
	trajectoryData = new TrajectoryData();
	newPathsStore = null;	
	}


	public static void LoadNavigationData(string filePath, string fileName){
	if(!string.IsNullOrEmpty(filePath) && !string.IsNullOrEmpty(fileName)){
	Reset();
	DeserializePaths(filePath,fileName+".nvf");
	ReadAtypicalConnections();
	}else 
		Debug.Log ("Can't load navigation data: invalid file path or file name!");
	}
	

	public static bool DataLoaded(){
	bool result = false;
	if(Paths.Length>0)
	result = true;
	return result;
	}
	
	
	public static void ReadAtypicalConnections(){
	ArrayList nodes = new ArrayList();
	newAtypicalPaths = new AtypicalPaths();
		Node newNode;
		int i,j,k,index;
		string curKey = "";
		if(Paths.Length<1){
		Debug.Log ("Error:No one path type found!");
		return;
		}
		index = -1;
		for(i=0;i<Paths.Length;i++){
		for(j=0;j<Paths[i].size;j++){
		if(Paths[i].Waypoints[j].atypicalConnections.Length>0){
					curKey  = j.ToString()+Paths[i].type;
					newNode = new Node(j,Paths[i].type);
			if(nodes.Count<1){
				newNode = new Node(j,Paths[i].type);
				nodes.Add (newNode);
				index++;
				newAtypicalPaths.indexOf.Add(curKey,index);
			}else{
				if(!NodeInArray (newNode,(Node[])nodes.ToArray(typeof(Node)))){
				        nodes.Add (newNode);
						index++;
						newAtypicalPaths.indexOf.Add(curKey,index);
				}				
			}
					for(k=0;k<Paths[i].Waypoints[j].atypicalConnections.Length;k++){
curKey = Paths[i].Waypoints[j].atypicalConnections[k].number.ToString()+Paths[i].Waypoints[j].atypicalConnections[k].type;
newNode = new Node(Paths[i].Waypoints[j].atypicalConnections[k].number,Paths[i].Waypoints[j].atypicalConnections[k].type);
						if(!NodeInArray(newNode,(Node[])nodes.ToArray(typeof(Node)))){
						nodes.Add (newNode);
						index++;
						newAtypicalPaths.indexOf.Add(curKey,index);
						}
						}
			}
			}
			}
		newAtypicalPaths.nodes = (Node[]) nodes.ToArray(typeof(Node));
		nodes = null;
		newAtypicalPaths = GetAtypicalConnectionLengths(newAtypicalPaths);
		}
	
	
	public static AtypicalPaths GetAtypicalConnectionLengths(AtypicalPaths atypicalPaths){
		if(Paths.Length<1){
		Debug.Log ("Error:No one path type found!");
		return atypicalPaths;
		}
		atypicalPaths.connectionLength = new float[atypicalPaths.indexOf.Count,atypicalPaths.indexOf.Count];
		int i,j,k,index1,index2,pathIndex;
		for(i=0;i<atypicalPaths.nodes.Length;i++)
		for(j=0;j<atypicalPaths.nodes.Length;j++){
		atypicalPaths.connectionLength[i,j] = Mathf.Infinity;	
		}
		for(i=0;i<Paths.Length;i++){
		for(j=0;j<Paths[i].size;j++){
		if(Paths[i].Waypoints[j].atypicalConnections.Length>0){
			index1 = atypicalPaths.indexOf[j.ToString ()+Paths[i].type];
					for(k=0;k<Paths[i].Waypoints[j].atypicalConnections.Length;k++){
index2 = atypicalPaths.indexOf[Paths[i].Waypoints[j].atypicalConnections[k].number.ToString()+Paths[i].Waypoints[j].atypicalConnections[k].type];	
		atypicalPaths.connectionLength[index1,index2] = Paths[i].Waypoints[j].atypicalConnections[k].linkWeigth;
//Debug.Log ("read connection:"+(j+1)+Paths[i].type+" to "+(Paths[i].Waypoints[j].atypicalConnections[k].number+1)+Paths[i].Waypoints[j].atypicalConnections[k].type+",link weigth ="+Paths[i].Waypoints[j].atypicalConnections[k].linkWeigth);
		//Debug.Log ("connections:"+Paths[i].Waypoints[j].atypicalConnections.Length);			
					}
			}
			}
			}
		for(i=0;i<atypicalPaths.nodes.Length;i++){
		for(j=0;j<atypicalPaths.nodes.Length;j++){
			if(atypicalPaths.nodes[i].type == atypicalPaths.nodes[j].type){
				pathIndex = FindPathOfType(atypicalPaths.nodes[i].type);
					if(pathIndex>-1){
						if(i!=j)
	atypicalPaths.connectionLength[i,j] = Paths[pathIndex].pathLength[atypicalPaths.nodes[i].number,atypicalPaths.nodes[j].number];
						else
	atypicalPaths.connectionLength[i,j] = Mathf.Infinity;
						//Debug.Log("set connection:"+(atypicalPaths.nodes[i].number+1)+atypicalPaths.nodes[i].type+" to "+(atypicalPaths.nodes[j].number+1)+atypicalPaths.nodes[i].type+",length="+atypicalPaths.connectionLength[i,j]);			
					}
				}
			}
		}
		return atypicalPaths;
	}
	
	
	public static bool NodeInArray(Node node,Node[] nodes){
	bool result = false;
		int i;
	if(nodes.Length<1){
	Debug.Log ("nodes length <1");
		return result;
	}
		for(i=0;i<nodes.Length;i++){
		if(node.number == nodes[i].number && node.type == nodes[i].type)
				result = true;
		}
		return result;
}
	
	
	public static bool LinkExist(Node first,Node second){
	bool result = false;
	int pathIndex,i;
		if(Paths.Length<1){
		Debug.Log ("Error:No one path found!");	
			return result;
		}
		pathIndex = FindPathOfType(first.type);
		if(pathIndex<0){
		Debug.Log ("Error:Path of type "+first.type+"not found!");	
			return result;
		}
		if(first.type == second.type){
			if(Paths[pathIndex].connectionLength[first.number,second.number]<Mathf.Infinity){
			result = true;	
			}
		}else{
		if(Paths[pathIndex].Waypoints[first.number].atypicalConnections.Length>0){
		for(i=0;i<Paths[pathIndex].Waypoints[first.number].atypicalConnections.Length;i++){
			if(Paths[pathIndex].Waypoints[first.number].atypicalConnections[i].number == second.number)
				if(Paths[pathIndex].Waypoints[first.number].atypicalConnections[i].type == second.type){
				result = true;
				break;
					}
				}
			}
		}
		return result;
	}
	

	
	/*==================================================
	 * AI functions
	 * =====================================================
	 */
	public static Node FindClosestNodeTo(string[] types,Vector3 v3){
		Node result = new Node(-1,"");
	if(types==null){
		Debug.Log ("Types is emtpy!");
			return result;
		}
		if(types.Length<1){
		Debug.Log ("Types length<1");
			return result;
		}
		int i,k,pathIndex;
		float minDist,curDist;
		minDist = Mathf.Infinity;
		curDist = minDist;
		for(k=0;k<types.Length;k++){
		if(!string.IsNullOrEmpty(types[k])){
			pathIndex = FindPathOfType(types[k]);
				if(pathIndex>-1){
				if(Paths[pathIndex].size>0){
				for(i=0;i<Paths[pathIndex].size;i++){
					if(!Physics.Linecast(GetWaypointInSpace(0.5f,i,Paths[pathIndex].type),v3)){
				curDist = Vector3.Distance (GetWaypointInSpace(0.5f,i,Paths[pathIndex].type),v3);
					if(curDist<minDist){
					result.number = i;
					result.type = Paths[pathIndex].type;
					minDist = curDist;
						}
						}
						}
					}
				}
			}
		}
		//Debug.Log ("Closest point:"+result.number+result.type+"("+(result.number+1)+result.type+")");
		return result;
		
	}

	public static Node FindClosestNodeTo(string[] types,Vector3 v3,float radius,int layerMsk){
		Node result = new Node(-1,"");
		if(types==null){
			Debug.Log ("Types is emtpy!");
			return result;
		}
		if(types.Length<1){
			Debug.Log ("Types length<1");
			return result;
		}
		int i,k,pathIndex;
		float minDist,curDist;
		minDist = Mathf.Infinity;
		curDist = minDist;
		for(k=0;k<types.Length;k++){
			if(!string.IsNullOrEmpty(types[k])){
				pathIndex = FindPathOfType(types[k]);
				if(pathIndex>-1){
					if(Paths[pathIndex].size>0){
						for(i=0;i<Paths[pathIndex].size;i++){
							if(!Physics.Linecast(GetWaypointInSpace(0.5f,i,Paths[pathIndex].type),v3,layerMsk)){
								curDist = Vector3.Distance (GetWaypointInSpace(0.5f,i,Paths[pathIndex].type),v3);
								if(curDist<minDist){
									result.number = i;
									result.type = Paths[pathIndex].type;
									minDist = curDist;
								}
							}
						}
					}
				}
			}
		}
		//Debug.Log ("Closest point:"+result.number+result.type+"("+(result.number+1)+result.type+")");
		return result;
		
	}

	public static RouteData GetRandomRoute(RouteData newRouteData,string[] pTypes,Vector3 pos,float plrRadius,int routeKind,int layerMsk){
		RouteData routeData = new RouteData();
		routeData.curNode = FindClosestNodeTo(pTypes,pos,plrRadius,layerMsk);
		//if(routeKind<1)
			routeData.destinationNode = GetRandomPathsNode(pTypes);
		routeData.route = GetRoute(pTypes,routeData.curNode,routeData.destinationNode);
		routeData = GetNextNode(routeData);
		return routeData;
	}

	public static RouteData GetRouteForPoint(RouteData newRouteData,string[] types,Vector3 destPoint,Vector3 plrPos,float plrRadius,int layerMsk){
		RouteData routeData = new RouteData();
		routeData.curNode = FindClosestNodeTo(types,plrPos,plrRadius,layerMsk);
		routeData.destinationNode = FindClosestNodeTo(types,destPoint,plrRadius,layerMsk);
		routeData.route = GetRoute(types,routeData.curNode,routeData.destinationNode);
		routeData = GetNextNode(routeData);
		return routeData;
	}

	public static RouteData ResumeRoute(RouteData newRouteData,string[] types,Vector3 plrPos,float plrRadius,int layerMsk){
		RouteData routeData = new RouteData();
		routeData.destinationNode = new Node(newRouteData.destinationNode.number,newRouteData.destinationNode.type);
		routeData.curNode = FindClosestNodeTo(types,plrPos,plrRadius,layerMsk);
		routeData.route = GetRoute(types,routeData.curNode,routeData.destinationNode);
		routeData = GetNextNode(routeData);
		return routeData;
	}

	public static Vector3 GetRandomNavigationPoint(string[] types){
		Vector3 result = Vector3.zero;
		if(types.Length<1){
			Debug.Log ("Paths types array is empty!");
			return result;
		}
		Node[] nodes = new Node[2];
		nodes[0] = Pathfinding.GetRandomPathsNode(types);
		if(NodeIsEmpty(nodes[0])){
			Debug.Log ("Can't get random paths node!");
			return result;
		}
		int pathIndex = FindPathOfType(nodes[0].type);
		if(pathIndex<0){
			Debug.Log ("Can't find path of type '"+nodes[0].type+"'!");
			return result;
		}
		for(int i=0;i<Paths[pathIndex].size;i++){
			if(Paths[pathIndex].connectionLength[nodes[0].number,i]<Mathf.Infinity){
				nodes[1] = new Pathfinding.Node(i,nodes[0].type);
				break;
			}
		}
		if(!NodeIsEmpty(nodes[1])){
		  //result = GetPointInArea(nodes[0],nodes[1],Vector3.zero,-1f);
			result = GetWaypointInSpace(Random.Range (0.3f,0.6f),nodes[0]);
			result = result + (GetWaypointInSpace(Random.Range (0.3f,0.6f),nodes[1])-result)*Random.value;
		}else Debug.Log ("Can't get point between nodes:"+nodes[0].number+nodes[0].type+" and "+nodes[1].number+nodes[1].type);
		return result;	
	}

	public static Node[] GetAllVisibleNodes(string[] types,Vector3 pos,int layerMask){
		Node[] result = new Node[0];
		if(types.Length<1){
			Debug.Log ("Empty array of types !");
			return result;
		}
		int pathIndex = -1,visibility = -1;
		ArrayList tempNodes = new ArrayList();
		for(int i=0;i<types.Length;i++){
			pathIndex = FindPathOfType(types[i]);
			if(pathIndex>-1)
				if(Paths[pathIndex].size>0)
			for(int j =0;j<Pathfinding.Paths[pathIndex].size;j++){
					visibility = VisibilityOfNode(j,pathIndex,pos,layerMask);
					if(visibility>-1){
						tempNodes.Add (new Node(j,Paths[pathIndex].type));
					}
			}
		}
		result = (Node[]) tempNodes.ToArray(typeof(Node));
		return result;
	}
	
	
	public static Vector3 GetOptimizedTrajectoryPoint(Node curPoint,Node nextPoint,float po,Vector3 curPos){
		Vector3 result = Vector3.zero;
		po = Mathf.Clamp01(po);
		float v = 1.0f-po;
		float dist1,dist2;
		int pathIndex;
		Vector3 bipointDir;
		//Debug.Log ("lastTargetPoint:"+lastTargetPoint);
		if(curPoint.number<0 || string.IsNullOrEmpty(curPoint.type)){
		Debug.Log ("Error: invalid curPoint!");	
			return result;
		}
		if(nextPoint.number<0 || string.IsNullOrEmpty(nextPoint.type)){
		Debug.Log ("Error: invalid nextPoint!");	
			return result;
		}
		pathIndex = FindPathOfType(curPoint.type);
		if(pathIndex<0){
		Debug.Log ("Error: Path of type "+curPoint.type+" not exist!");	
			return result;
		}
		if(Paths[pathIndex].Waypoints[curPoint.number].transform.childCount<1){
		result = Paths[pathIndex].Waypoints[curPoint.number].transform.position;	
		}else{
dist1 = Vector3.Distance (Paths[pathIndex].Waypoints[curPoint.number].transform.position,GetWaypointInSpace(0.5f,nextPoint.number,nextPoint.type)); 	
	dist1+= Vector3.Distance(curPos,Paths[pathIndex].Waypoints[curPoint.number].transform.position);
dist2 = Vector3.Distance (Paths[pathIndex].Waypoints[curPoint.number].transform.GetChild (0).position,GetWaypointInSpace(0.5f,nextPoint.number,nextPoint.type)); 	
	dist2+=	Vector3.Distance(curPos,Paths[pathIndex].Waypoints[curPoint.number].transform.GetChild (0).position);
		if(dist1<dist2){
bipointDir = (Paths[pathIndex].Waypoints[curPoint.number].transform.GetChild (0).position - Paths[pathIndex].Waypoints[curPoint.number].transform.position);				
result = Paths[pathIndex].Waypoints[curPoint.number].transform.position;		
			}else{
bipointDir = (Paths[pathIndex].Waypoints[curPoint.number].transform.position - Paths[pathIndex].Waypoints[curPoint.number].transform.GetChild (0).position);				
result = Paths[pathIndex].Waypoints[curPoint.number].transform.GetChild (0).position;					
			}
result+=bipointDir*Random.Range (0f,v);
		}
		return result;
	}
	
	public static float GetOptimizedTrajectoryPoint(Node curPoint,Node nextPoint,float lastValue,float pathOptimization,
		Vector3 curPos,float defaultAmplitude,float minDistance,float maxAmplitude){
		float result,curDistance,dist1,dist2,bipointLength;
		Transform nodeTransform;
		result = lastValue;
		if(NodeIsEmpty(curPoint) || NodeIsEmpty (nextPoint))
			return result;
		int pathIndex = FindPathOfType(curPoint.type);
		if(pathIndex<0)
			return result;
		if(!NodeIsBipoint(curPoint))
			return 1f;
			bipointLength = GetBipointLength(curPoint);
			//critical scenario)
			if(bipointLength == 0f)
			bipointLength = 1f;
		if(pathOptimization>bipointLength)
			pathOptimization = bipointLength;
		if(result>=0){
		curDistance = Vector3.Distance (curPos,GetWaypointInSpace(result,curPoint.number,pathIndex));
			result = result*bipointLength;
			if(curDistance<=minDistance){
			result +=Random.Range (-maxAmplitude,maxAmplitude);	
			}else
			result +=Random.Range (-defaultAmplitude,defaultAmplitude);
		}else
			result = Random.Range(0f,bipointLength);
		nodeTransform = GetPointTransform(curPoint.number,curPoint.type);
		dist1 = Vector3.Distance (curPos,nodeTransform.position);
		dist1+=Vector3.Distance (nodeTransform.position,GetWaypointInSpace(0.5f,
				nextPoint.number,nextPoint.type));
		dist2 = Vector3.Distance (curPos,nodeTransform.GetChild(0).position);
		dist2+=Vector3.Distance (nodeTransform.GetChild(0).position,GetWaypointInSpace(0.5f,
				nextPoint.number,nextPoint.type));
		if(dist1>dist2)
		result = Mathf.Clamp (result,0f,pathOptimization)/bipointLength;
		else
		result = Mathf.Clamp (result,bipointLength-pathOptimization,bipointLength)/bipointLength;
		return result;
	}
	
	
	//Use this function to get next point of route from RouteData of AI unit
	public static RouteData GetNextNode(RouteData newRouteData){
		RouteData routeData = new RouteData();
		routeData.route = newRouteData.route;
		routeData.curNode = new Node(newRouteData.curNode.number,newRouteData.curNode.type);
		routeData.destinationNode = new Node(newRouteData.destinationNode.number,newRouteData.destinationNode.type);
		routeData.nextNodeIndex = newRouteData.nextNodeIndex;
	    routeData.nextNode = new Node(newRouteData.nextNode.number,newRouteData.nextNode.type);
		if(NodeIsEmpty(routeData.curNode)){
		Debug.Log ("Invalid curNode of routeData!");	
			return routeData;
		}
		if(NodeIsEmpty(routeData.destinationNode)){
			Debug.Log ("Invalid destinationNode of routeData!");	
			return routeData;
		}
		int pathIndex;
//If route is null, this mean that a both points(start and end) is of same type,so get next point from nextPoint matrix of path of their type.
		if(routeData.route.Length<1){
			routeData.nextNodeIndex = 0;
		if(routeData.curNode.type != routeData.destinationNode.type){
		Debug.Log("Can't get next point: curPoint.type is not equal to endPoint.type!");
			return routeData;
			}
			pathIndex = FindPathOfType(routeData.curNode.type);
			routeData.curNode = new Node(Paths[pathIndex].nextPoint[routeData.curNode.number,routeData.destinationNode.number],routeData.curNode.type);
if(routeData.curNode.number != routeData.destinationNode.number || routeData.curNode.type != routeData.destinationNode.type){
 routeData.nextNode = new Node(Paths[pathIndex].nextPoint[routeData.curNode.number,routeData.destinationNode.number],routeData.curNode.type);				
}else{
	routeData.nextNode = routeData.curNode;			
	}
		}else{
			//if nextNode of routeData is empty this mean that route was generated just now
			// and we dont follow it yet, so we don't need to get new curentNode
			if(!Pathfinding.NodeIsEmpty(routeData.nextNode)){
				routeData.prevNode = routeData.curNode;
				routeData = GetNextNode_GetNewCurNode(routeData);
			}
			// and we only need to get nextNode for existing curNode, cos it is empty
	    routeData = GetNextNode_GetNewNextNode(routeData);
		}
		return routeData;
	}
	
	
	public static RouteData GetNextNode_GetNewCurNode( RouteData  newRouteData){
		int pathIndex;
		RouteData routeData = new RouteData();
		routeData.route = newRouteData.route;
		routeData.curNode = new Node(newRouteData.curNode.number,newRouteData.curNode.type);
		routeData.destinationNode = new Node(newRouteData.destinationNode.number,newRouteData.destinationNode.type);
		routeData.nextNodeIndex = newRouteData.nextNodeIndex;
	//Debug.Log ("curPoint processing");
	//============================ curPoint process block start ==============
	if(routeData.curNode.number == routeData.route[routeData.nextNodeIndex].number && routeData.curNode.type == routeData.route[routeData.nextNodeIndex].type){
		routeData.nextNodeIndex++;
		routeData.nextNodeIndex = Mathf.Clamp (routeData.nextNodeIndex,0,routeData.route.Length-1);
			}

	if(routeData.curNode.type == routeData.route[routeData.nextNodeIndex].type){
		pathIndex = FindPathOfType(routeData.curNode.type);
//Debug.Log ("routeData.curPoint:"+routeData.curPoint.number.ToString()+routeData.curPoint.type);
		routeData.curNode.number = Paths[pathIndex].nextPoint[routeData.curNode.number,routeData.route[routeData.nextNodeIndex].number];		
//Debug.Log ("routeData.nextPoint:"+routeData.curPoint.number.ToString()+routeData.curPoint.type);	
			}else{
	routeData.curNode = routeData.route[routeData.nextNodeIndex];			
	}
	//============================= curPoint process block end ===============
	 return routeData;
	}
	
	
	public static RouteData GetNextNode_GetNewNextNode(RouteData newRouteData){
		int newIndex,pathIndex;
		RouteData routeData = new RouteData();
		routeData.route = newRouteData.route;
		routeData.curNode = new Node(newRouteData.curNode.number,newRouteData.curNode.type);
		routeData.destinationNode = new Node(newRouteData.destinationNode.number,newRouteData.destinationNode.type);
		routeData.nextNodeIndex = newRouteData.nextNodeIndex;
	   routeData.nextNode = new Node(routeData.curNode.number,newRouteData.curNode.type);
		//Debug.Log ("nextPoint processing(curPoint:"+routeData.curPoint.number.ToString()+routeData.curPoint.type);
	//using a newIndex instead of routeData.nextPointIndex to remember last right target point.
	newIndex = routeData.nextNodeIndex;
		if(routeData.route.Length<1)
			return routeData;
	if(routeData.nextNode.number == routeData.route[newIndex].number && routeData.nextNode.type == routeData.route[newIndex].type){
		newIndex++;
		newIndex = Mathf.Clamp (newIndex,0,routeData.route.Length-1);
			}
	if(routeData.nextNode.type == routeData.route[newIndex].type){
			pathIndex = FindPathOfType(routeData.nextNode.type);
		routeData.nextNode.number = Paths[pathIndex].nextPoint[routeData.nextNode.number,routeData.route[newIndex].number];		
			//Debug.Log ("nextPoint processing(curPoint,step2:"+routeData.curPoint.number.ToString()+routeData.curPoint.type);
		}else{
	routeData.nextNode = routeData.route[newIndex];			
	}
//Debug.Log ("output nextPoint:"+routeData.nextPoint.number.ToString()+routeData.nextPoint.type);
		 return routeData;
	}

	
	public static Node[] GetRoute(string[] types,Node startPoint,Node endPoint){
	   Node[] result = new Node[0];
		if(NodeIsEmpty(startPoint) || NodeIsEmpty(endPoint)){
			Debug.Log ("Error:invalid start or end node!");	
			Debug.Log ("start node:number="+startPoint.number+";type="+startPoint.type+";end node:number="+endPoint.number+";type="+endPoint.type);
			return result;
		}
		Node tempNode;
		ArrayList newNodes = new ArrayList();
		float[,] newConnectionLength;
		int i,j,index1=-1,index2=-1,size,pathIndex1,pathIndex2,k;
		bool flag1 = false,flag2 = false;
		//validate nodes parameters (step 1)
		//=================================================================

		//=================================================================
		//validate nodes parameters (step2)
		//================================================
		for(i=0;i<types.Length;i++){
		if(startPoint.type == types[i])
				flag1 = true;
		if(endPoint.type == types[i])
				flag2 = true;
		}
		//if start or end point is of unacceptable type then return null route
		if(!flag1 || !flag2){
			Debug.Log ("Can't get route!This AI unit does not support one of nodes type.");
			return result;
		}
		//================================================
		//Check whether one or both (start and end) points is atypical
		//===================================================================
		flag1 = false;
		flag2 = false; 
		flag1 = NodeInArray(startPoint,newAtypicalPaths.nodes);
		flag2 = NodeInArray(endPoint,newAtypicalPaths.nodes);
		//if one of points is not exist in atypical points array then rewrite existent points to a new array
		//(this new array will be extended by this non-existent points(start,end or both)
		//if(!flag1 || !flag2){
		newNodes = new ArrayList();
		for(i=0;i<newAtypicalPaths.nodes.Length;i++){
			newNodes.Add (newAtypicalPaths.nodes[i]);	
			}
		//}
		if(!flag1){
			index1 = newNodes.Count;
			newNodes.Add (startPoint);
		}else{
			index1 = newAtypicalPaths.indexOf[startPoint.number.ToString()+startPoint.type];
		}

		if(!flag2){
			index2 = newNodes.Count;
			newNodes.Add (endPoint);
		}else{
			index2 = newAtypicalPaths.indexOf[endPoint.number.ToString()+endPoint.type];
		}
		// expand connectionLength matrix of atypical nodes
		i = newNodes.Count - newAtypicalPaths.nodes.Length;
		if(i>0){
			pathIndex1 = FindPathOfType(startPoint.type);
			pathIndex2 = FindPathOfType(endPoint.type);
			 tempNode = new Node(-1,"");
		size = newNodes.Count;	
			//Debug.Log ("new size:"+size+"; old size:"+newAtypicalPaths.nodes.Length);
		newConnectionLength = new float[size,size];
		for(i=0;i<newAtypicalPaths.nodes.Length;i++)
		for(j=0;j<size;j++){
				if(j<newAtypicalPaths.nodes.Length)
		newConnectionLength[i,j] = newAtypicalPaths.connectionLength[i,j];
				else
		newConnectionLength[i,j] = Mathf.Infinity;
			}
			for(i=0;i<size;i++){
			tempNode =  newNodes[i] as Node;
				if(!flag1){
				if(tempNode.type == startPoint.type && tempNode.number != startPoint.number){
		
			newConnectionLength[index1,i] = Paths[pathIndex1].pathLength[startPoint.number,tempNode.number];
			newConnectionLength[i,index1] = Paths[pathIndex1].pathLength[tempNode.number,startPoint.number];
				}else{
			newConnectionLength[index1,i] = Mathf.Infinity;
			newConnectionLength[i,index1] = Mathf.Infinity;					
				}
				}
				if(!flag2){
				if(tempNode.type == endPoint.type && tempNode.number != endPoint.number){
			newConnectionLength[index2,i] = Paths[pathIndex2].pathLength[endPoint.number,tempNode.number];
			newConnectionLength[i,index2] = Paths[pathIndex2].pathLength[tempNode.number,endPoint.number];
				}else{
			newConnectionLength[index2,i] = Mathf.Infinity;
			newConnectionLength[i,index2] = Mathf.Infinity;					
				}
				}
			}
		}else{
		newConnectionLength = newAtypicalPaths.connectionLength;
		//Debug.Log ("cur matrix size:"+newNodes.Count);
		}
		
		size = newNodes.Count;
		bool acceptable,check;
		// remove connections with unacceptable node types
		for(i=0;i<size;i++){
			acceptable = false;
			check = true;
		for(j=0;j<size;j++){
				if(check){
					check = false;
				tempNode = newNodes[i] as Node;
			for(k=0;k<types.Length;k++){
				if(tempNode.type == types[k]){
					acceptable = true;		
						}
				}
			} 
				if(!acceptable){
				newConnectionLength[i,j] = Mathf.Infinity;
				newConnectionLength[j,i] = Mathf.Infinity;
				}
		   }
		}
		//Debug.Log ("start point index:"+index1+"; end point index:"+index2);
		result = GetRoute_CalculateRoute((Node[])newNodes.ToArray(typeof(Node)),newConnectionLength,index1,index2);
		//Debug.Log ("result length ="+result.Length);
		return result;
	
	}
	
	public static Node[] GetRoute_CalculateRoute(Node[] newNodes,float[,] newConnectionLength,int index1,int index2){
		ArrayList result = new ArrayList();
		int[] route = new int[newNodes.Length];
		bool[] passed = new bool[newNodes.Length];
		float[] pathLength = new float[newNodes.Length];
		int i,j,curPoint;
		float minLength;
		curPoint = index1;
		for(i=0;i<passed.Length;i++){
		pathLength[i] = Mathf.Infinity;
		passed[i] = false;
		}
		route[index1] = -1;
		passed[index1] = true;
		pathLength[index1] = 0f;
		//Debug.Log ("Start calculation:");
		for(i=0;i<newNodes.Length;i++){
		 for(j=0;j<newNodes.Length;j++){
			if(passed[j]!=true && pathLength[j]>pathLength[curPoint]+newConnectionLength[curPoint,j]){
				pathLength[j] = pathLength[curPoint]+newConnectionLength[curPoint,j];
				route[j] = curPoint;
				}
			}
			minLength = Mathf.Infinity;
			curPoint = -1;
			for(j=0;j<newNodes.Length;j++){
			if(passed[j] == false && pathLength[j]<minLength){
					minLength = pathLength[j];
					curPoint = j;
				}
			}
			if(curPoint==-1){
				route = new int[0];
				break;
			}else if(curPoint == index2)
				break;
			else 
				passed[curPoint] = true;
		}
		if(route.Length>1){
			curPoint = index2;
		for(i=0;i<route.Length;i++){
			curPoint = route[curPoint];
				if(curPoint!=index1)
					result.Insert (0,newNodes[curPoint]);
				else break;
			}
			result.Add (newNodes[index2]);
		}
		return (Node[])result.ToArray(typeof(Node));
	}
	

	
	//check visibility of node : -1 - not visible; 0-fully visible if single point;
	//1 - one point visible if bipoint; 2 - fully visible bipoint.
	public static int VisibilityOfNode(Node node,Vector3 curPos){
	int result = -1;
		int pathIndex = FindPathOfType(node.type);
		if(pathIndex<0){
		Debug.Log ("Error:Can't find path of type "+node.type+"!");	
			return result;
		}
		if(Paths[pathIndex].Waypoints[node.number].transform==null){
		Debug.Log ("Error: Transform of waypoint "+node.number+" of type "+node.type+" not exist!");
			return result;
		}
		if(!Physics.Linecast(curPos,GetWaypointInSpace(0.5f,node.number,pathIndex))){
			result++;	
			}
		if(!Physics.Linecast(curPos,GetWaypointInSpace(0.0f,node.number,pathIndex))){
			result++;	
			}
		if(!Physics.Linecast(curPos,GetWaypointInSpace(1.0f,node.number,pathIndex))){
			result++;	
			}
		//Debug.Log ("result:"+result+" for node "+node.number.ToString()+node.type);
		return result;

	}

	public static int VisibilityOfNode(int nodeNumber, int nodePathIndex,Vector3 curPos,int layerMsk){
		int result = -1;
		int pathIndex = nodePathIndex;
		if(pathIndex<0){
			Debug.Log ("Error:Can't find path with index "+pathIndex+"!");	
			return result;
		}
		if(Paths[pathIndex].Waypoints[nodeNumber].transform==null){
			Debug.Log ("Error: Transform of waypoint "+nodeNumber+" of type "+Paths[nodePathIndex].type+" not exist!");
			return result;
		}
		if(!Physics.Linecast(curPos,GetWaypointInSpace(0.5f,nodeNumber,pathIndex),layerMsk)){
			result++;	
		}
		if(!Physics.Linecast(curPos,GetWaypointInSpace(0.0f,nodeNumber,pathIndex),layerMsk)){
			result++;	
		}
		if(!Physics.Linecast(curPos,GetWaypointInSpace(1.0f,nodeNumber,pathIndex),layerMsk)){
			result++;	
		}
		//Debug.Log ("result:"+result+" for node "+node.number.ToString()+node.type);
		return result;
		
	}
	
	public static int VisibilityOfNode(Node node,Vector3 curPos,float radius,int layerMsk){
		int result = -1;
		int pathIndex = FindPathOfType(node.type);
		Vector3 dir = Vector3.zero,crossDir = Vector3.zero,p1,p2;
		float distance = Mathf.Infinity;
		
		if(pathIndex<0){
		Debug.Log ("Error:Can't find path of type "+node.type+"!");	
			return result;
		}
		if(Paths[pathIndex].Waypoints[node.number].transform==null){
		Debug.Log ("Error: Transform of waypoint "+node.number+" of type "+node.type+" not exist!");
			return result;
		}
		dir = GetWaypointInSpace(0.5f,node.number,pathIndex);
		distance = Vector3.Distance (curPos,dir);
		dir-=curPos;
		crossDir = Vector3.Cross(dir,Vector3.up);
		//Debug.DrawRay(curPos,crossDir,Color.grey);
		p1 = curPos+crossDir.normalized*radius;
		p2 = curPos+crossDir.normalized*radius*-1;
		
		if(!Physics.CapsuleCast(p1,p2,0.01f,dir,distance,layerMsk))
			result++;
		
		dir = GetWaypointInSpace(0f,node.number,pathIndex);
		distance = Vector3.Distance (curPos,dir);
		dir-=curPos;
		crossDir = Vector3.Cross(dir,Vector3.up);
		p1 = curPos+crossDir.normalized*radius;
		p2 = curPos+crossDir.normalized*radius*-1;
		
		if(!Physics.CapsuleCast(p1,p2,0.01f,dir,distance,layerMsk))
			result++;
		
		dir = GetWaypointInSpace(1f,node.number,pathIndex);
		distance = Vector3.Distance (curPos,dir);
		dir-=curPos;
		crossDir = Vector3.Cross(dir,Vector3.up);
		p1 = curPos+crossDir.normalized*radius;
		p2 = curPos+crossDir.normalized*radius*-1;
		
		if(!Physics.CapsuleCast(p1,p2,0.01f,dir,distance,layerMsk))
			result++;
		//Debug.Log ("result:"+result+" for node "+node.number.ToString()+node.type);
		return result;

	}
	
	public static Node GetRandomPathsNode(string[] types){
	 Node result = new Node(-1,"");
	ArrayList validPaths = new ArrayList();
		int i,j;
		bool flag = false;
		if(Paths.Length<1){
		Debug.Log ("Error: No one path found!");
			return result;
		}
		if(types.Length<1){
		Debug.Log ("Error: Length of types array <1!");	
			return result;
		}
			
		for(i=0;i<Paths.Length;i++){
			flag = false;
		 for(j=0;j<types.Length;j++){
			if(Paths[i].type == types[j])
					flag = true;
			}
			if(flag)
			validPaths.Add (i);
		}
		i = (int)(validPaths[Random.Range (0,validPaths.Count)]);
		j = Random.Range (0,Paths[i].size);
		result = new Node(j,Paths[i].type);
		return result;
	}
	
	
	public static bool NodeIsEmpty(Node node){
	//	Node node = new Node(thisNode.number,thisNode.type);
		bool result = false;
		//if(node == null)
			//result = true;
		//else
	if(node.number<0 || string.IsNullOrEmpty(node.type))
			result = true;
		return result;
	}
	
	
	public static bool NodesEqual(Node a, Node b){
		bool result = false;
		//if(a == null || b == null)
		//return result;	
		if(a.number<0 || b.number<0 || string.IsNullOrEmpty (a.type)|| string.IsNullOrEmpty (a.type))
		return result;
		if(a.type == b.type && a.number == b.number)
			result = true;
		else result = false;
		return result;
	}
	
	
	public static bool NodeIsBipoint(Node node){
	bool result = false;
		if(NodeIsEmpty(node)){
		Debug.Log ("Error:node is empty");
			return result;
		}
	int pathIndex = FindPathOfType(node.type);
		if(pathIndex<0){
		Debug.Log ("Error:Path of type "+node.type+" not found!");
			return result;
		}
		if(Paths[pathIndex].Waypoints[node.number].transform.childCount>0)
			result = true;
		else
			result = false;
		return result;
	}
	
	
	
	public static Vector3 GetPointOnBezier(float t,CurveData newCurve){
		if(newCurve == null)
		return Vector3.zero;
		if(newCurve.tangents.Length<4)
		return Vector3.zero;
    float u  = 1f-t;
    float tt = t*t;
    float uu = u*u;
    float uuu = uu * u;
    float ttt = tt * t;
 
    Vector3 p = uuu * newCurve.tangents[0].GetVector3();    
    p += 3 * uu * t * newCurve.tangents[1].GetVector3();   
    p += 3 * u * tt * newCurve.tangents[2].GetVector3();   
    p += ttt * newCurve.tangents[3].GetVector3();          
    return p;
 	}
	
	
	public static bool CurveExistBetween(Node first, Node second){
	bool result = false;
		int a,b;
		string aStr = first.number.ToString()+first.type,bStr = second.number.ToString()+second.type;
		if(Pathfinding.trajectoryData.indexOf.Count<2){
		//Debug.Log ("Curve data contain less than two points!");	
			return result;
		}
		if(!Pathfinding.trajectoryData.indexOf.ContainsKey(aStr) ||!Pathfinding.trajectoryData.indexOf.ContainsKey(bStr)){
		//Debug.Log ("One of the nodes is not exist in curve data!");
			return result;
		}
		a = Pathfinding.trajectoryData.indexOf[aStr];
		b = Pathfinding.trajectoryData.indexOf[bStr];
		if(Pathfinding.trajectoryData.curvesData[a,b]!=null)
		if(Pathfinding.trajectoryData.curvesData[a,b].tangents.Length>0)
		result  = true;
		return result;
	}
	
	
	public static void  RemoveAllCurvesForNode(Node node){
	 string nStr ;
		int i,j;
	if(NodeIsEmpty(node))
			return;
		nStr = node.number.ToString ()+node.type;
	if(!trajectoryData.indexOf.ContainsKey(nStr))
			return;
		i = trajectoryData.indexOf[nStr];
		trajectoryData.curvesData[i,i] = new CurveData();
		for(j=0;j<trajectoryData.indexOf.Count;j++){
		trajectoryData.curvesData[i,j] = new CurveData();
		trajectoryData.curvesData[j,i] = new CurveData();
		}
	}
	
	
	public static MotionCurve MoveByCurve(MotionCurve motionCurve,Vector3 curPos,float increment){
		MotionCurve result = new MotionCurve();
		float t = 0f,curAngle,curDist;
		Vector3 lastDir,newDir;
		bool pointIsValid = true;
		result.curve = motionCurve.curve;
		result.curveLength = motionCurve.curveLength;
		result.passedDist = motionCurve.passedDist;
		result.lastPoint = motionCurve.lastPoint;
		t = Vector3.Distance (result.lastPoint,curPos);
		result.passedDist += t;
		//result.passedDist = Mathf.Clamp(result.passedDist,0f,result.curveLength);
		t = (result.passedDist+increment)/result.curveLength;
		t = Mathf.Clamp01(t);
		result.newPoint = GetPointOnBezier(t,result.curve);
		lastDir = curPos - result.lastPoint;
		newDir = result.newPoint - curPos;
		curDist = Vector3.Distance (curPos,result.newPoint);
		curAngle = Vector3.Angle(lastDir,newDir);
		pointIsValid = (curDist>0.4f) && (curAngle <= 90f);
		//Debug.Log ("point is valid:"+pointIsValid);
		
		if(!pointIsValid)
		for(int i =0; i<10;i++){
		result.passedDist+=increment;
		result.passedDist = Mathf.Clamp(result.passedDist,0f,result.curveLength);
		t = (result.passedDist)/result.curveLength;
		t = Mathf.Clamp01(t);
		result.newPoint = GetPointOnBezier(t,result.curve);
		newDir = result.newPoint - curPos;
		curDist = Vector3.Distance (curPos,result.newPoint);
		curAngle = Vector3.Angle(lastDir,newDir);
		pointIsValid = (curDist>0.4f) && (curAngle < 90f);
			if(pointIsValid)
				break;
			// Debug.Log ("curDist:"+curDist+"; curAngle: "+curAngle);
		}
		
		/*
		if(Vector3.Distance (curPos,result.newPoint)<0.2f || Vector3.Angle(lastDir,newDir)>90f){
		t =Vector3.Distance (result.lastPoint,curPos)*12.5f; 
		Debug.Log ("cur increment:"+t);
			t = Mathf.Clamp (t,1f,6f);
		result.passedDist+=t;
		result.passedDist = Mathf.Clamp(result.passedDist,0f,result.curveLength);
		t = result.passedDist/result.curveLength;
		t = Mathf.Clamp01(t);
		result.newPoint = GetPointOnBezier(t,result.curve);
		}
		*/
		result.lastPoint = curPos;
		return result;
	}
	
	
		
				
	public static Vector3 GetPointInArea(Node first,Node second,Vector3 curPos,float range){
	float baseDist,curDist;
	Vector3 baseDir,curDir,firstV3,secondV3,result = Vector3.zero;
		if(NodeIsEmpty(first) || NodeIsEmpty (second)){
		return result;	
		}
	firstV3 = GetWaypointInSpace(Random.value,first.number,first.type);
	secondV3 = GetWaypointInSpace(Random.value,second.number,second.type);
	baseDist = Vector3.Distance (firstV3,secondV3);
	baseDir = secondV3 - firstV3;
	if(range >=0){
	curPos.y = firstV3.y;
	curDir = curPos - firstV3;
	curDist = Vector3.Dot(baseDir,curDir)/baseDist;
	curDist+=range;
	if(curDist>baseDist)
		curDist = baseDist;
		result = firstV3+baseDir.normalized*Random.Range (curDist,baseDist);
		}else{
		result = firstV3+baseDir*Random.value;	
		}
		Debug.DrawLine (curPos,result,Color.red,5f);
		//Debug.Log ("generated v3:"+result+"; between:"+first.number.ToString()+first.type+" - "+second.number.ToString()+second.type);
		return result;
	}
	
	//used to get  length of the specific curve represented as CurveData
	public static float GetCurveLength(int segments,CurveData curve){
		if(segments<0){
		Debug.Log ("Error: segments count <0!");
			return 0f;
		}
	float result = 0f,t = 0f,step = (float)(1f/segments);
	int i;
	Vector3 prevPoint = curve.tangents[0].GetVector3(),newPoint;
	CurveData thisCurve = new CurveData();
	thisCurve = curve;
	newPoint = prevPoint;
	for(i=0;i<segments;i++){
	t+=step;
	newPoint = GetPointOnBezier(t,thisCurve);
	Debug.DrawLine (prevPoint,newPoint,Color.green,15f);
	result += Vector3.Distance (prevPoint,newPoint);
	prevPoint = newPoint;
	}
		return result;
	}
	
	
	public static CurveData GetCurve(Node first,Node second){
	if(NodeIsEmpty(first) || NodeIsEmpty(second)){
	Debug.Log ("Error:one of the nodes is empty!");	
			return new CurveData();
		}
	if(!CurveExistBetween(first,second))
		return new CurveData();
	CurveData result = new CurveData();
	int i,j;
		i = trajectoryData.indexOf[first.number.ToString()+first.type];
		j = trajectoryData.indexOf[second.number.ToString()+second.type];
		result.tangents = new Pathfinding.Vector3S[4];
		result.tangents[0] = trajectoryData.curvesData[i,i].tangents[0];
		result.tangents[1] = trajectoryData.curvesData[i,j].tangents[0];
		result.tangents[2] = trajectoryData.curvesData[i,j].tangents[1];
		result.tangents[3] = trajectoryData.curvesData[j,j].tangents[0];
		return result;
	}
	
	
	public static float DistanceToNode(Node thisNode,Vector3 curPos){
	float result = Mathf.Infinity,pointValue = 0f;
	Node node = new Node(thisNode.number,thisNode.type);
	Vector3 firstDir,secondDir,bipointDir,point1,point2;
		firstDir = Vector3.zero;
		secondDir = Vector3.zero;
		point1 = Vector3.zero;
		point2 = Vector3.zero;
	int pathIndex = FindPathOfType(node.type);
		if(pathIndex<0)
			return result;
		//Debug.Log ("cur node:"+(node.number+1)+node.type);
		if(Paths[pathIndex].Waypoints[node.number].transform.childCount == 0){
		result = Vector3.Distance (curPos,Paths[pathIndex].Waypoints[node.number].transform.position);
		}else{
			point1 = Paths[pathIndex].Waypoints[node.number].transform.position;
			//Debug.DrawLine(curPos,point1,Color.cyan);
			point2 = Paths[pathIndex].Waypoints[node.number].transform.GetChild (0).position;
			//Debug.DrawLine(curPos,point2,Color.cyan);
			firstDir = point1-curPos;
			secondDir = point2-curPos;
			if(firstDir.sqrMagnitude>secondDir.sqrMagnitude){
			bipointDir = point1;
			//now firstDir store minimal direction
			firstDir = secondDir;
			// point1 store bipointDir start point
			point1 = point2;
			point2 = bipointDir;
			bipointDir -=point1;
			}else{
			bipointDir = point2-point1;
			}
			pointValue = Vector3.Distance (point1,point2);
			firstDir*=-1;
			pointValue = Vector3.Dot(bipointDir,firstDir)/pointValue;
			//Debug.Log ("pointValue = "+pointValue);
			if(pointValue>0)
			point1 = point1+bipointDir.normalized*pointValue;
			result = Vector3.Distance (curPos,point1);
			Debug.DrawLine(curPos,point1,Color.black);
			
	}
		return result;	
}
	//this function returns a distance between bipoint's points in meters
	public static float GetBipointLength(Node node){
	float result = -1f;
	 if(NodeIsEmpty(node))
			return result;
	Transform nodeTransform = GetPointTransform(node.number,node.type);
	 if(nodeTransform == null)
			return result;
		if(nodeTransform.childCount>0)
			result = Vector3.Distance (nodeTransform.position,nodeTransform.GetChild (0).position);
		else
			result = 0f;
		return result;
	}

	public static bool ObjectIsVisible(Vector3 objPos,Vector3 thisPos, float radius){
		bool result = false;
		Vector3 dir = objPos - thisPos;
		Vector3 crossDir = Vector3.Cross (dir, Vector3.up);
		float dist = Vector3.Distance (objPos, thisPos);
		crossDir.Normalize();
		if (Physics.CapsuleCast (thisPos + crossDir * radius, thisPos + crossDir * radius * -1, 0.01f, dir, dist))
						result = false;
				else
						result = true;
		return result;
	}

	public static bool ObjectIsVisible(Vector3 objPos,Vector3 thisPos, float radius, int layerMsk){
		bool result = false;
		Vector3 dir = objPos - thisPos;
		Vector3 crossDir = Vector3.Cross (dir, Vector3.up);
		float dist = Vector3.Distance (objPos, thisPos);
		crossDir.Normalize();
		if (Physics.CapsuleCast (thisPos + crossDir * radius, thisPos + crossDir * radius * -1, 0.01f, dir, dist,layerMsk))
			result = false;
		else
			result = true;
		return result;
	}

	public static bool ObjectIsVisible(Vector3 objPos,Vector3 thisPos,Vector3 lookDir,float FOV){
		bool result = false;
		float angle = Vector3.Angle (objPos - thisPos, lookDir);
		if (!Physics.Linecast (objPos, thisPos) && angle <= FOV)
						result = true;
		//Debug.Log ("angle:" + angle);
		return result;
	}

	public static bool ObjectIsVisible(Vector3 objPos,Vector3 thisPos,Vector3 lookDir,float FOV,int layerMsk){
		bool result = false;
		float angle = Vector3.Angle (objPos - thisPos, lookDir);
		if (!Physics.Linecast (objPos, thisPos,layerMsk) && angle <= FOV)
			result = true;
		//Debug.Log ("angle:" + angle);
		return result;
	}
	
	
}
