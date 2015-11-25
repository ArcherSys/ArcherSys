using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SocialPlatforms;
using System.Collections;
using System;

public class UserProfile : MonoBehaviour {
  
    public ILeaderboard lead;
    public dreamloLeaderBoard leadb;
    public Canvas guic;
	// Use this for initialization
	void Start () {
        leadb = dreamloLeaderBoard.GetSceneDreamloLeaderboard();
        Social.localUser.Authenticate(ProcessAuthentication);

	}
	
	// Update is called once per frame
	void Update () {
	
	}
    void ProcessAuthentication(bool success)
    {
        if (success)
        {
            lead = Social.CreateLeaderboard();
            lead.id = "bankboard";
            leadb.AddScore(Social.localUser.userName, (int)lead.localUserScore.value);
            
        }
        else 
            Debug.Log("Failed to authenticate");
    }
   void onGUI()
    {
        GUILayoutOption[] width200 = new GUILayoutOption[] { GUILayout.Width(200) };

        
        float width = 400;  // Make this wider to add more columns
        float height = 200;
        Rect r = new Rect((Screen.width / 2) - (width / 2), (Screen.height / 2) - (height), width, height);
        GUILayout.BeginArea(r, new GUIStyle("box"));

        GUILayout.BeginVertical();
        GUILayout.Label("Scores:");
        GUILayout.EndVertical();
        GUILayout.EndArea();
    }
  
    
}
