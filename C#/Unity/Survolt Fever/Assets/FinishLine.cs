using UnityEngine;
using System.Collections;
using UnityStandardAssets.Vehicles.Car;
using System;

public class FinishLine : MonoBehaviour {
    public CarAIControl[] oppcar;
    public CarUserControl car;
    private bool gameOver;
    private int level;
    public int maxLevel;
    private int i = 0;

    // Use this for initialization
    void Start () {
        Debug.Log(oppcar[3]);
	}
	
    void Awake()
    {

        Invoke("DeclareWinner", 90.0f);

    }
    public void DeclareWinner()
    {
        try {
            if (car.transform.position.z > oppcar[i].transform.position.z)
            {
                if (level == maxLevel)
                {
                    gameOver = true;
                }
                if (oppcar.Length != 0)
                {
                    Debug.Log("Level " + (i + 2).ToString());
                    DestroyObject(oppcar[i].gameObject);
                    Invoke("DeclareWinner", 60.0f);
                    i++;
                }
                else if (oppcar.Length == 1)
                {
                    
                }
            }
            else
            {
                Application.LoadLevel("Game Over");
            }
        }
        catch (IndexOutOfRangeException e)
        {
            Application.LoadLevel("You Win");
        }
        
    }
	// Update is called once per frame
	void Update () {
	
	}
  
}
