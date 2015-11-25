using UnityEngine;
using ArcherSysOS.DDG.CapitalPursuit.Nav;
public class MaxKilla : MonoBehaviour {
    public Animator m_MAX;
    public SceneLoadr sl;
	// Use this for initialization
	void Start () {
        m_MAX = GetComponent<Animator>();
        sl = GetComponent<SceneLoadr>();
	}
	
	// Update is called once per frame
	void Update () {
	  
	}

    void onTriggerEnter(Collider other)
    {
        if (other.gameObject.CompareTag("Player"))
        {
            m_MAX.SetBool("Dead", true);
            m_MAX.StopPlayback();
            sl.loadScenery("Game Over");
        }
            
    }
}
