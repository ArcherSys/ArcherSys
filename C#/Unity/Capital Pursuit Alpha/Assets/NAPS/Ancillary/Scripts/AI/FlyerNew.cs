using UnityEngine;
using System.Collections;

public class FlyerNew : MonoBehaviour {

	public float minHeight = 0f,maxHeight = 0f,minUpdateTime = 0.5f,maxUpdateTime = 3f;
	public float speed = 3f;
	float updateTime = 0f,baseHeight = 0f,sign = 1f;
	Navigator navigator;

	// Use this for initialization
	void Start () {
		navigator = GetComponent<Navigator>();
	}
	
	// Update is called once per frame
	void Update () {
		UpdatePointHeight();
	}

	void UpdatePointHeight(){
		if(!navigator){
			Debug.Log ("Navigator component not found!");
			return;
		}
		if(navigator.movement.targetPoint == Vector3.zero)
			return;

		if(!navigator.destinationPointIsVisible){
			navigator.targetPointConstraints = new Pathfinding.Constraint3(true,false,true);
			if(!navigator.routeData.IsNotValid())
				baseHeight = Pathfinding.GetWaypointInSpace(0.5f,navigator.routeData.curNode).y;
			if(Time.time>updateTime){
				updateTime = Random.Range (minUpdateTime,maxUpdateTime)+Time.time;
				sign = Random.Range (-1f,1f);
				sign = Mathf.Sign(sign);
			}
			if(navigator.movement.targetPoint.y>(baseHeight+maxHeight) && sign>0)
				sign = -1f;
			else if(navigator.movement.targetPoint.y<(baseHeight+minHeight) && sign<0)
				sign = 1f;
		navigator.movement.targetPoint+= new Vector3(0,Time.deltaTime*speed*sign,0);
		}else navigator.targetPointConstraints = new Pathfinding.Constraint3(true,true,true);
	}
}
