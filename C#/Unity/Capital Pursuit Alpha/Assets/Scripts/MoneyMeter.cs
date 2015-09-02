using UnityEngine;
using UnityEngine.UI;

using System.Collections;

public class MoneyMeter : MonoBehaviour {
    public Text moneyText;
    private double money;
	// Use this for initialization
	void Start () {
        money = 0.00;
	}
	
	// Update is called once per frame
	void FixedUpdate () {
        moneyText.text = "Cash: $" + money.ToString();
	}
}
