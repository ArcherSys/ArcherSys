using UnityEngine;
using System.Collections;
using Soomla.Store;
using ArcherSysOS.DDG.CapitalPursuit.Live;

public class LoadStore : MonoBehaviour {

	// Use this for initialization
	void Start () {
        SoomlaStore.Initialize(new CPLiveAssets());
        Debug.Log("Store Loaded...");
	}
	
	// Update is called once per frame
	void Update () {
	
	}
}
