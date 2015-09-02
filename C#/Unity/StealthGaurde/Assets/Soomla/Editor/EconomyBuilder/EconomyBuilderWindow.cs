using UnityEngine;
using UnityEditor;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.IO;
using Soomla.Store;

public class EconomyBuilder : EditorWindow 
{

	private Vector2 scrollPos = Vector2.zero;
	private SoomlaEditorData editorData;
	private bool inited = false;

	private enum screens
	{
		goods = 0,
		currencies,
		currencyPacks,
		categories,
	};

	//string[] goodTypeOptions = {"Add Virtual Good", "Single Use", "Lifetime", "Equippable", "Upgradable", "Single Use Pack"};
	//without upgradable
	private string[] goodTypeOptions = {"Add Virtual Good", "Single Use", "Lifetime", "Equippable", "Single Use Pack"}; 
	private int goodTypeIndex = 0;

	private string[] displayingModes = {"+-", "Expand All", "Collapse All"};
	private int displayingIndex = 0;
	
	private screens screenNumber = screens.goods;

	[MenuItem ("Window/Soomla/Economy Builder")]
	static void Init ()
	{
		EconomyBuilder window = (EconomyBuilder)EditorWindow.GetWindow(typeof (EconomyBuilder), false, "EconomyBuilder");
		window.InitSoomlaEditorData ();
	}

	void InitSoomlaEditorData()
	{
		editorData = new SoomlaEditorData ();
		editorData.ReadFromJSONFile ();
		editorData.updateSingleUseItems();
		inited = true;
	}

	public void OnGUI () 
	{
		if (!inited) {
			InitSoomlaEditorData();
		}

		EditorGUILayout.BeginHorizontal();
		{
			if (GUILayout.Toggle(screenNumber == screens.goods, "Goods", EditorStyles.toolbarButton)) 
				screenNumber = screens.goods;	
			if (GUILayout.Toggle(screenNumber == screens.currencies, "Currencies", EditorStyles.toolbarButton))
				screenNumber = screens.currencies;
			if (GUILayout.Toggle(screenNumber == screens.currencyPacks, "Currency Packs", EditorStyles.toolbarButton))
				screenNumber = screens.currencyPacks;
			
//			if (GUILayout.Toggle(screenNumber == screens.categories, "Categories", EditorStyles.toolbarButton))
//			{
//				screenNumber = screens.categories;
//			}
		}
		EditorGUILayout.EndHorizontal();

		if(editorData != null)
			this.ShowData();
		else
			InitSoomlaEditorData();

	}


	void ShowData()
	{
		switch (screenNumber) {
			case screens.goods:
				ShowGoods ();
				break;
			case screens.currencies:
				ShowCurrencies ();
				break;
			case screens.currencyPacks:
				ShowCurrencyPacks ();
				break;
			case screens.categories:
				ShowCategories ();
				break;
			default:
				break;
		}
	}

	void ShowGoods()
	{
		EditorGUILayout.BeginHorizontal ();
		goodTypeIndex = EditorGUILayout.Popup(goodTypeIndex, goodTypeOptions, GUILayout.Width(100));

		if (goodTypeIndex > 0)
		{
			if (goodTypeIndex == 1) {
				editorData.AddGood(ZFGood.GoodType.SingleUseVG);
			}
			else if (goodTypeIndex == 2) {
				editorData.AddGood(ZFGood.GoodType.LifetimeVG);
			}
			else if (goodTypeIndex == 3) {
				editorData.AddGood(ZFGood.GoodType.EquippableVG);
			}
			/*else if (goodTypeIndex == 4) {
				editorData.AddGood(ZFGood.GoodType.UpgradeVG);
			}*/
			else if (goodTypeIndex == 4) {
				editorData.AddGood(ZFGood.GoodType.SingleUsePackVG);
			}

			editorData.updateSingleUseItems();

			goodTypeIndex = 0;
		}

		addGenerateButton();


		EditorGUILayout.EndHorizontal ();

		EditorGUILayout.BeginHorizontal ();
		addModesDisplaying(screens.goods);
		EditorGUILayout.EndHorizontal ();

        scrollPos = GUILayout.BeginScrollView (scrollPos);

		for (int i = 0; i < editorData.goods.Count; i++)
		{
			EditorGUILayout.BeginVertical(GUI.skin.box);
			ShowGood(i);
			EditorGUILayout.EndVertical();
		}

		GUILayout.EndScrollView ();

		EditorGUILayout.Space ();
		EditorGUILayout.Space ();
		EditorGUILayout.BeginHorizontal(GUI.skin.box);

		FileStream fs = new FileStream(Application.dataPath + @"/Soomla/Resources/soom_logo.png", FileMode.Open, FileAccess.Read);
		byte[] imageData = new byte[fs.Length];
		fs.Read(imageData, 0, (int)fs.Length);
		Texture2D soomlaLogoTexture = new Texture2D(300, 92);
		soomlaLogoTexture.LoadImage(imageData);

		GUIContent logoImgLabel = new GUIContent (soomlaLogoTexture);
		EditorGUILayout.LabelField(logoImgLabel, GUILayout.MaxHeight(70), GUILayout.ExpandWidth(true));
		EditorGUILayout.HelpBox ("Basic Instructions: navigate throught the goods, currencies and currency packs tabs.  In each tab you may add new definitions of items in your virtual economy as well as edit or delete existing ones.  The economy model is documented in detail in the SOOMLA knowledge base: http://know.soom.la/unity/store/store_model/.  The economy builder is in beta, any feedback is appreciated and can be sent to builder@soom.la.", MessageType.Info, true);
		GameObject.DestroyImmediate(soomlaLogoTexture);

		EditorGUILayout.EndHorizontal ();
	}
	
	void ShowGood(int goodIndex)
	{
		ZFGood good = editorData.goods [goodIndex];
		EditorGUILayout.BeginHorizontal();

		good.render = EditorGUILayout.Foldout(good.render, "<" + good.name +"> (" + good.goodType + ")");

		if (goodIndex != 0)
		{
			GUIContent btnMoveUp = new GUIContent (char.ConvertFromUtf32(8593), "Move Up"); 
			if(GUILayout.Button(btnMoveUp, EditorStyles.miniButton, GUILayout.Width(20f))) {
				editorData.goods[goodIndex] = editorData.goods[goodIndex-1];
				editorData.goods[goodIndex-1] = good;
			}
		}

		if (goodIndex != editorData.goods.Count-1)
		{
			GUIContent btnMoveDown = new GUIContent (char.ConvertFromUtf32(8595), "Move Down"); 
			if(GUILayout.Button(btnMoveDown, EditorStyles.miniButton, GUILayout.Width(20f))) {
				editorData.goods[goodIndex] = editorData.goods[goodIndex+1];
				editorData.goods[goodIndex+1] = good;
			}
		}

		GUIContent deleteButtonContent = new GUIContent ("X", "Delete");
		if(GUILayout.Button(deleteButtonContent, EditorStyles.miniButton, GUILayout.Width(20))) {
			editorData.DeleteGood(good);
		}

		EditorGUILayout.EndHorizontal();
        
		if (good.render) {
			EditorGUI.indentLevel++;
			good.ID = EditorGUILayout.TextField("Item ID ", good.ID);
			good.name = EditorGUILayout.TextField("Name", good.name);
			good.name = Regex.Replace(good.name, "\n", "");
			good.description = EditorGUILayout.TextField("Description", good.description);
			good.description = Regex.Replace(good.description, "\n", "");
			good.typePurchase = (ZFGood.PurchaseInfo)EditorGUILayout.EnumPopup("Purchase With", good.typePurchase);
			EditorGUI.indentLevel++;
            if (good.typePurchase == ZFGood.PurchaseInfo.Market) {
				good.marketInfo.price = EditorGUILayout.FloatField("Price", good.marketInfo.price);

				good.marketInfo.productId = EditorGUILayout.TextField("Product ID", good.marketInfo.productId);
            } else {
				if (editorData.currencies.Count > 0) {
					good.virtualInfo.pvi_amount = EditorGUILayout.IntField("Price", good.virtualInfo.pvi_amount);
					
					int indexInArray = 0;
					List <string> currencyNames = new List<string>();
					for (int i = 0; i < editorData.currencies.Count; i++)
					{
						currencyNames.Add(editorData.currencies[i].name);
						if (good.virtualInfo.pvi_itemId == null) {
							indexInArray = 0;
						}
						else if (editorData.currencies[i].ID == good.virtualInfo.pvi_itemId)
						{
							indexInArray = i;
						}
					}
					
					int index = EditorGUILayout.Popup("Item", indexInArray, currencyNames.ToArray()); 
					good.virtualInfo.pvi_itemId = editorData.currencies[index].ID;
				} else {
					EditorGUILayout.HelpBox("You have no defined currencies", MessageType.Warning, true);
				}
			}
			EditorGUI.indentLevel--;
            
            if (good.goodType == ZFGood.GoodType.SingleUsePackVG) {
				editorData.updateSingleUseItems();
				if (editorData.singleUseGoodsIDs.Count > 0) {
					int indexInArray = 0;
					if (editorData.singleUseGoodsIDs.Count != 0)
					{
						for (int i = 0; i < editorData.singleUseGoodsIDs.Count; i++)
						{
							if (editorData.singleUseGoodsIDs[i] == good.good_itemId)
                            {
                                indexInArray = i;
                            }
                        }
					}
					int index = EditorGUILayout.Popup("Single Use Item", indexInArray, editorData.singleUseGoodsIDs.ToArray()); 
					good.good_itemId = editorData.singleUseGoodsIDs[index];

					EditorGUI.indentLevel++;
					good.good_amount = EditorGUILayout.IntField("Amount", good.good_amount);
					EditorGUI.indentLevel--;
				} else {
					EditorGUILayout.HelpBox("You should define a Single Use Item before", MessageType.Warning, true);
                }
			}

		    EditorGUI.indentLevel--;
		}
	}

	void ShowCurrencies()
	{
		EditorGUILayout.BeginHorizontal();
		if (GUILayout.Button ("Add Currency", EditorStyles.miniButton, GUILayout.Width(100))) {
			editorData.AddCurrency();
		}

		addGenerateButton();
		EditorGUILayout.EndHorizontal();

		EditorGUILayout.BeginHorizontal();
		addModesDisplaying(screens.currencies);
		EditorGUILayout.EndHorizontal();

		scrollPos = GUILayout.BeginScrollView (scrollPos);
        
        for (int i = 0; i < editorData.currencies.Count; i++)
		{
			GUILayout.BeginVertical(GUI.skin.box);
			{
				this.ShowCurrency(i);
			}
			GUILayout.EndVertical();
		}

		GUILayout.EndScrollView();
	}

	void ShowCurrency(int currencyIndex)
	{
		ZFCurrency currency = editorData.currencies [currencyIndex];

		EditorGUILayout.BeginHorizontal();

		currency.render = EditorGUILayout.Foldout(currency.render, "<" + currency.name +"> (" + currency.ID + ")");

		if (currencyIndex != 0)
		{
			GUIContent btnMoveUp = new GUIContent (char.ConvertFromUtf32(8593), "Move Up"); 
			if(GUILayout.Button(btnMoveUp, EditorStyles.miniButton, GUILayout.Width(20f))) {
				editorData.currencies[currencyIndex] = editorData.currencies[currencyIndex-1];
				editorData.currencies[currencyIndex-1] = currency;
			}
		}
		
		if (currencyIndex != editorData.currencies.Count-1)
		{
			GUIContent btnMoveDown = new GUIContent (char.ConvertFromUtf32(8595), "Move Down"); 
			if(GUILayout.Button(btnMoveDown, EditorStyles.miniButton, GUILayout.Width(20f))) {
				editorData.currencies[currencyIndex] = editorData.currencies[currencyIndex+1];
				editorData.currencies[currencyIndex+1] = currency;
			}
		}

		GUIContent deleteButtonContent = new GUIContent ("X", "Delete");
		if(GUILayout.Button(deleteButtonContent, EditorStyles.miniButton, GUILayout.Width(20))) {
			editorData.DeleteCurrency(currency);
		}
		
		EditorGUILayout.EndHorizontal();
		
		if (currency.render) {
            EditorGUI.indentLevel++;
            currency.ID = EditorGUILayout.TextField("Item ID ", currency.ID);
			currency.name = EditorGUILayout.TextField("Name", currency.name);
			currency.name = Regex.Replace(currency.name, "\n", "");
			EditorGUI.indentLevel--;
		}
	}

	void ShowCurrencyPacks() {
		EditorGUILayout.BeginHorizontal();
		if (GUILayout.Button ("Add Currency Pack", EditorStyles.miniButton, GUILayout.Width(100)))  {
			editorData.AddCurrencyPack();
		}
		addGenerateButton();
		EditorGUILayout.EndHorizontal();

		EditorGUILayout.BeginHorizontal();
		addModesDisplaying(screens.currencyPacks);
		EditorGUILayout.EndHorizontal();

		scrollPos = GUILayout.BeginScrollView (scrollPos);
		for (int i = 0; i < editorData.currencyPacks.Count; i++)
		{
			GUILayout.BeginVertical(GUI.skin.box);
			{
				ShowCurrencyPack(i);
			}
			GUILayout.EndVertical();
		}
		GUILayout.EndScrollView();
	}

	void ShowCurrencyPack(int currencyPackIndex)
	{
		ZFCurrencyPack currencyPack = editorData.currencyPacks [currencyPackIndex];

		EditorGUILayout.BeginHorizontal();

		currencyPack.render = EditorGUILayout.Foldout(currencyPack.render, "<" + currencyPack.name +"> (" + currencyPack.ID + ")");

		if (currencyPackIndex != 0)
		{
			GUIContent btnMoveUp = new GUIContent (char.ConvertFromUtf32(8593), "Move Up"); 
			if(GUILayout.Button(btnMoveUp, EditorStyles.miniButton, GUILayout.Width(20f))) {
				editorData.currencyPacks[currencyPackIndex] = editorData.currencyPacks[currencyPackIndex-1];
				editorData.currencyPacks[currencyPackIndex-1] = currencyPack;
			}
		}
		
		if (currencyPackIndex != editorData.currencyPacks.Count-1)
		{
			GUIContent btnMoveDown = new GUIContent (char.ConvertFromUtf32(8595), "Move Down"); 
			if(GUILayout.Button(btnMoveDown, EditorStyles.miniButton, GUILayout.Width(20f))) {
				editorData.currencyPacks[currencyPackIndex] = editorData.currencyPacks[currencyPackIndex+1];
				editorData.currencyPacks[currencyPackIndex+1] = currencyPack;
			}
		}

		GUIContent deleteButtonContent = new GUIContent ("X", "Delete");
		if(GUILayout.Button(deleteButtonContent, EditorStyles.miniButton, GUILayout.Width(20))) {
			editorData.currencyPacks.Remove(currencyPack);
		}

		EditorGUILayout.EndHorizontal();
		
		if (currencyPack.render) {
			EditorGUI.indentLevel++;
			currencyPack.ID = EditorGUILayout.TextField("Item ID ", currencyPack.ID);
			currencyPack.name = EditorGUILayout.TextField("Name", currencyPack.name);
			currencyPack.name = Regex.Replace(currencyPack.name, "\n", "");
			currencyPack.description = EditorGUILayout.TextField("Description", currencyPack.description);
			currencyPack.description = Regex.Replace(currencyPack.description, "\n", "");

			// market info
			currencyPack.marketInfo.price = EditorGUILayout.FloatField("Price", currencyPack.marketInfo.price);
			
			currencyPack.marketInfo.productId = EditorGUILayout.TextField("Product ID", currencyPack.marketInfo.productId);
			
            // currency data
			if (editorData.currencies.Count > 0) {
				int indexInArray = 0;
				List <string> currencyNames = new List<string>();
				for (int i = 0; i < editorData.currencies.Count; i++)
				{
					currencyNames.Add(editorData.currencies[i].name);
					if (currencyPack.currency_itemId == null) {
						indexInArray = 0;
					}
					else if (editorData.currencies[i].ID == currencyPack.currency_itemId)
					{
						indexInArray = i;
					}
				}
				
				int index = EditorGUILayout.Popup("Currency", indexInArray, currencyNames.ToArray()); 
				currencyPack.currency_itemId = editorData.currencies[index].ID;
				EditorGUI.indentLevel++;
				currencyPack.currency_amount = EditorGUILayout.IntField("Amount", currencyPack.currency_amount);
				EditorGUI.indentLevel--;
			} else {
                EditorGUILayout.HelpBox("You have no defined currencies", MessageType.Warning, true);
            }
            
		
            EditorGUI.indentLevel--;
        }

	}

	void ShowCategories()
	{
		
	}

	private void addGenerateButton() {
		if(GUILayout.Button("Generate", EditorStyles.miniButton, GUILayout.Width(100)))
		{
			if(!editorData.areUniqueGoods() || !editorData.areUniqueCurrencies() || !editorData.areUniqueCurrencyPacks())
			{
				EditorUtility.DisplayDialog("ERROR", editorData.getResponseAboutSameItems(), "Ok");
			}
			else
			{
				editorData.WriteToJSONFile(editorData.toJSONObject());
				editorData.generateSoomlaAssets();
				EditorUtility.DisplayDialog("", "File has been saved to path:\nAssets/SoomlaAssets.cs", "Ok");
			}
		}
	}

	private void addModesDisplaying(screens scr)	{
		displayingIndex = EditorGUILayout.Popup (displayingIndex, displayingModes, GUILayout.Width(30));
		
		if (displayingIndex == 0) {
			displayingIndex = 0;	
		}
		else if (displayingIndex == 1)	{
			editorData.expandAll((int)scr);
		}
		else if (displayingIndex == 2)	{
			editorData.collapseAll((int)scr);
		}
		displayingIndex = 0;
	}	
}