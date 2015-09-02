using UnityEngine;
using System.Collections.Generic;
using Soomla.Store;
using System.IO;

public class MarketInfo
{

	public string productId = "productId";

	public bool useIos = false;
	public string iosId = "iosProductId";
	
	public bool useAndroid = false;
	public string androidId = "androidProductId";
	
	public PurchaseType type = null;
	
	public float price = 0.99f;
	
	enum Consumable
	{
		nonConsumable = 0,
		consumable,
		description
	}

	Consumable consumable = Consumable.nonConsumable;
	
	public MarketInfo(MarketInfo marketInfo)
	{
		this.productId = marketInfo.productId;
		this.useIos = marketInfo.useIos;
		this.iosId = marketInfo.iosId;
		this.useAndroid = marketInfo.useAndroid;
		this.androidId = marketInfo.androidId;
		this.price = marketInfo.price;
	}
	
	public MarketInfo() {}

	public bool ifMarketPurchaseFull()
	{
		if ((this.iosId != "" || this.androidId != "") && this.price != 0.0f) {
			return true;
		} else {
			return false;
		}
	}

	public JSONObject toJSONObject()
	{
		JSONObject json = new JSONObject(JSONObject.Type.OBJECT);
		JSONObject marketItem = new JSONObject (JSONObject.Type.OBJECT);
	
		marketItem.AddField ("productId", this.productId);
        
		if (this.useIos)
		{
			marketItem.AddField ("iosId", this.iosId);
		}
		if (this.useAndroid) 
		{
			marketItem.AddField("androidId", this.androidId);
		}
		marketItem.AddField ("price", this.price);
		marketItem.AddField ("consumable", (int)this.consumable);
		
		json.AddField ("marketItem", marketItem);
		json.AddField("purchaseType", "market");
		
		return json;
	}

	public void fromJSONObject(JSONObject json)
	{
		JSONObject marketItem = json.GetField("marketItem");

		JSONObject jsonProductId = marketItem.GetField("productId");
		if (jsonProductId != null) {
			this.productId = marketItem.GetField("productId").str;
		} else {
			this.productId = "";
		}
        
		JSONObject jsonIosId = marketItem.GetField ("iosId");

		this.useIos = (jsonIosId != null);
		if (this.useIos)
		{
			this.iosId = jsonIosId.str;
		}
		
		JSONObject jsonAndroidId = marketItem.GetField ("androidId");
		this.useAndroid = (jsonAndroidId != null);
		if (this.useAndroid)
		{
			this.androidId = jsonAndroidId.str;
		}
		
		this.price = marketItem.GetField ("price").f;
		this.consumable = (Consumable)int.Parse(marketItem.GetField("consumable").ToString());
	}
}

public class VirtualInfo
{
	public string pvi_itemId = "";
	public int pvi_amount = 10;
	
	public VirtualInfo(VirtualInfo virtualInfo)
	{
		this.pvi_itemId = virtualInfo.pvi_itemId;
		this.pvi_amount = virtualInfo.pvi_amount;
	}
	
	public VirtualInfo() { }
	
	public bool ifVirtualPurchaseFull()
	{
		if (pvi_itemId != "" && this.pvi_amount != 0	)
			return true;
		else
			return false;
	}
	
	public JSONObject toJSONObject()
	{
		JSONObject json = new JSONObject(JSONObject.Type.OBJECT);
		
		json.AddField ("pvi_itemId", this.pvi_itemId);
		json.AddField ("pvi_amount", this.pvi_amount);
		json.AddField("purchaseType", "virtualItem");
		return json;
	}
	
	public void fromJSONObject(JSONObject json)
	{
		this.pvi_itemId = json.GetField ("pvi_itemId").str;
		this.pvi_amount = (int) json.GetField ("pvi_amount").n;
	}
}
public class ZFGood	
{
	public string ID = "";
	public string name = "Virtual Good Name";
	public string description = "Virtual Good Description";
	public MarketInfo marketInfo = null;
	public VirtualInfo virtualInfo = null;
	// for pack
	public string good_itemId = "";
	public int good_amount = 10;

	public bool render = true;

	public enum GoodType
	{
		LifetimeVG = 0,
		EquippableVG,
		SingleUseVG,
		SingleUsePackVG,
		UpgradeVG
	}
	public GoodType goodType;

	public ZFGood()
	{
		this.ID = "item_";
		this.marketInfo = new MarketInfo();
		this.virtualInfo = new VirtualInfo();
	}
	
	public ZFGood(ZFGood goodInfo)
	{
		this.ID = goodInfo.ID;
		this.name = goodInfo.name;
		this.description = goodInfo.description;
		this.typePurchase = goodInfo.typePurchase;
		this.marketInfo = new MarketInfo(goodInfo.marketInfo);
		this.virtualInfo = new VirtualInfo(goodInfo.virtualInfo);
		this.goodType = goodInfo.goodType;
	}

	public bool ifGoodFull()
	{
		if (this.ID == "" || this.name == "" || this.description == "") {
			return false;
		} else {
			if(this.typePurchase == PurchaseInfo.Market)
			{
				if(this.marketInfo.ifMarketPurchaseFull())
					return true;
				else
					return false;
			}
			else
			{
				if(this.virtualInfo.ifVirtualPurchaseFull())
					return true;
				else
					return false;
			}
		}
	}
	
	public JSONObject toJSONObject()
	{

		JSONObject json = new JSONObject(JSONObject.Type.OBJECT);
		json.AddField ("itemId", this.ID);
		json.AddField ("name", this.name);
		json.AddField ("description", this.description);
		if (this.goodType == ZFGood.GoodType.SingleUsePackVG)
		{
			json.AddField("good_itemId", this.good_itemId);
			json.AddField("good_amount", this.good_amount);
		}
		if (this.typePurchase == PurchaseInfo.Market) 
		{
			json.AddField("purchasableItem", marketInfo.toJSONObject());
			
		}
		else if (this.typePurchase == PurchaseInfo.VirtualItem)
		{
			json.AddField("purchasableItem", virtualInfo.toJSONObject());
		}
		
		return json;
	}
	
	public void fromJSONObject(JSONObject json)
	{
		this.ID = json.GetField("itemId").str;
		this.name = json.GetField("name").str;
		this.description = json.GetField("description").str;
		JSONObject jsonPurchasebleItem = json.GetField ("purchasableItem");
		string purchaseTypeString = jsonPurchasebleItem.GetField ("purchaseType").str;
		if (string.Equals(purchaseTypeString, "market"))
		{
			this.typePurchase = PurchaseInfo.Market;
			this.marketInfo.fromJSONObject(jsonPurchasebleItem);
		}
		else
		{
			this.typePurchase = PurchaseInfo.VirtualItem;
			this.virtualInfo.fromJSONObject(jsonPurchasebleItem);
		}

		if (this.goodType == ZFGood.GoodType.SingleUsePackVG)
		{
			this.good_itemId = json.GetField("good_itemId").str;
			this.good_amount = (int)json.GetField("good_amount").n;
		}
	}
	
	public enum PurchaseInfo
	{
		Market = 0,
		VirtualItem
	}
	
	public PurchaseInfo typePurchase = PurchaseInfo.Market;
}

public class ZFCurrency
{
	public string ID = "currency_";
	public string name = "";

	public bool render = true;

	public ZFCurrency() { }
	public ZFCurrency(ZFCurrency currency)
	{
		this.ID = currency.ID;
		this.name = currency.name;
	}

	public bool isCurrencyFull()
	{
		if (this.ID == "" || this.name == "") {
			return false;
		} else {
			return true;
		}
	}

	public JSONObject toJSONObject()
	{
		JSONObject json = new JSONObject(JSONObject.Type.OBJECT);
		json.AddField ("itemId", this.ID);
		json.AddField ("name", this.name);
		return json;
	}
	
	public void fromJSONObject(JSONObject json)
	{
		this.ID = json.GetField("itemId").str;
		this.name = json.GetField("name").str;
	}
}

public class ZFCurrencyPack	
{
	public string ID = "currencypack_";
	public string name = "Currency Pack Name";
	public string description = "Currency Pack Description";
	public string currency_itemId = "";
	public int currency_amount = 10;
	public MarketInfo marketInfo = null;
	
	public bool render = true;
    
	public ZFCurrencyPack()
	{
		this.marketInfo = new MarketInfo();
	}
	
	public ZFCurrencyPack(ZFCurrencyPack currencyPack)
	{
		this.ID = currencyPack.ID;
		this.name = currencyPack.name;
		this.description = currencyPack.description;
		this.currency_itemId = currencyPack.currency_itemId;
		this.currency_amount = currencyPack.currency_amount;
		this.marketInfo = new MarketInfo(currencyPack.marketInfo);
	}
	
	public bool isCurrencyPackFull()
	{
		if (this.ID == "" || this.name == "" || this.currency_itemId == "" || this.currency_amount == 0) {
			return false;
		} else {
			return true;
		}
	}
	
	public JSONObject toJSONObject()
	{
		JSONObject json = new JSONObject(JSONObject.Type.OBJECT);
		json.AddField ("itemId", this.ID);
		json.AddField ("name", this.name);
		json.AddField ("description", this.description);
		json.AddField ("currency_itemId", this.currency_itemId);
		json.AddField ("currency_amount", this.currency_amount);
		json.AddField ("purchasableItem", marketInfo.toJSONObject()); 
		
		return json;
	}
	
	public void fromJSONObject(JSONObject json)
	{
		this.ID = json.GetField("itemId").str;
		this.name = json.GetField("name").str;
		this.description = json.GetField("description").str;
		this.currency_itemId = json.GetField ("currency_itemId").str;
		this.currency_amount = (int)json.GetField ("currency_amount").n;
		JSONObject jsonPurchasebleItem = json.GetField ("purchasableItem");
		this.marketInfo.fromJSONObject(jsonPurchasebleItem);
	}
}

public class SoomlaEditorData 
{

	private string jsonPath = Application.dataPath + @"/Soomla/Editor/EconomyBuilder/SoomlaAssets.json";
	private string sameItemsBuffer = "";
	private void rememberSameItems(string objectType, string str1, string str2)	{
		sameItemsBuffer = objectType + " have same IDs:\n";
		sameItemsBuffer += str1 + "\n" + str2;
	}
	public string getResponseAboutSameItems()	{
				return sameItemsBuffer;
		}

	public SoomlaEditorData()
	{
		this.InitObjects ();
	}
	
	public ZFGood newGood;
	public List<ZFGood> goods;
	public List<string> singleUseGoodsIDs;

	public ZFCurrency newCurrency;
	public List<ZFCurrency> currencies;

	public ZFCurrencyPack newCurrencyPack;
	public List<ZFCurrencyPack> currencyPacks;

	public struct ZFCategory	
	{
		
	}
	public ZFCategory newCategory;
	public List<ZFCategory> categories;


	private void InitObjects()	
	{
		newGood = new ZFGood();

		goods = new List<ZFGood> ();
		singleUseGoodsIDs = new List<string> ();

		newCurrency = new ZFCurrency ();
		newCurrency.name = "Currency Name";
        
        currencies = new List<ZFCurrency> ();
		newCurrencyPack = new ZFCurrencyPack ();
		currencyPacks = new List<ZFCurrencyPack> ();
		newCategory = new ZFCategory ();
		categories = new List<ZFCategory> ();
	}

	public void AddGood(ZFGood.GoodType goodType) {
		ZFGood good = new ZFGood(newGood);
		good.goodType = goodType;
		int goodItemNumber = goods.Count + 1;
		good.ID = "item_" + goodItemNumber;
		goods.Add(good);
		while (!areUniqueGoods()) {
			goodItemNumber++;
			good.ID = "item_" + goodItemNumber;
		}
	}

	public void AddCurrency() {
        ZFCurrency currency = new ZFCurrency(newCurrency);
		int currencyItemNumber = currencies.Count + 1;
		currency.ID = "currency_" + currencyItemNumber;
		currencies.Add(currency);
		while (!areUniqueCurrencies()) {
			currencyItemNumber++;
			currency.ID = "currency_" + currencyItemNumber;
		}
	}

	public void AddCurrencyPack() {
        ZFCurrencyPack currencyPack = new ZFCurrencyPack(newCurrencyPack);
		int currencyPackItemNumber = currencyPacks.Count + 1;
		currencyPack.ID = "currencypack_" + currencyPackItemNumber;
		currencyPacks.Add (currencyPack);
		while (!areUniqueCurrencyPacks()) {
			currencyPackItemNumber++;
			currencyPack.ID = "currencypack_" + currencyPackItemNumber;
		}
	}
    
    
    public bool areUniqueGoods ()
	{
		for (int i = 0; i < this.goods.Count; i++) 
		{
			ZFGood good1 = this.goods[i];

			for (int j = 0 ; j < this.goods.Count; j++)
			{
				ZFGood good2 = this.goods[j];
				if(good1.ID == good2.ID && i != j)
				{
					rememberSameItems("Goods", good1.name, good2.name);
					return false;
				}
			}
		}
		return true;
	}

	public bool areUniqueCurrencies()
	{
		for (int i = 0; i < this.currencies.Count; i++)	
		{
			ZFCurrency currency1 = this.currencies[i];

			for (int j = 0; j < this.currencies.Count; j++)
			{
				ZFCurrency currency2 = this.currencies[j];
				if(currency1.ID == currency2.ID && i != j)
				{
					rememberSameItems("Currencies", currency1.name, currency2.name);
					return false;
				}
			}
		}
		return true;
	}

	public bool areUniqueCurrencyPacks()
	{
		for (int i = 0; i < this.currencyPacks.Count; i++) 
		{
			ZFCurrencyPack currencyPack1 = this.currencyPacks[i];

			for (int j = 0; j < this.currencyPacks.Count; j++)
			{
				ZFCurrencyPack currencyPack2 = this.currencyPacks[j];
				if(currencyPack1.ID == currencyPack2.ID && i != j)
				{
					rememberSameItems("Currency Packs", currencyPack1.name, currencyPack2.name);
					return false;
				}
			}
		}
		return true;
	}

	public void DeleteGood(ZFGood good)
	{
		for ( int i = 0; i < goods.Count; i++)
		{
			if (goods[i].goodType == ZFGood.GoodType.SingleUsePackVG && goods[i].good_itemId == good.ID)
			{
				goods.Remove(goods[i]);
			}
		}
		goods.Remove (good);
	}

	public void DeleteCurrency(ZFCurrency currency)
	{
		for (int i = 0; i < goods.Count; i++) 
		{
			if (goods[i].typePurchase == ZFGood.PurchaseInfo.VirtualItem && goods[i].virtualInfo.pvi_itemId == currency.ID)
			{
				goods.Remove(goods[i]);
			}
		}
		currencies.Remove (currency);
	}

	public void ReadFromJSONFile()
	{
		string jsonString = "";
		if (File.Exists(jsonPath))
		{
			using (StreamReader sr = File.OpenText(jsonPath))
			{
				jsonString = sr.ReadToEnd();
			}
		}
		else
		{
			Debug.Log ("File not exists");
			return;
		}
		JSONObject json = new JSONObject (jsonString);

		this.ParseJSONObject (json);
	}

	public void ParseJSONObject(JSONObject json)
	{
		JSONObject jsonCurrencies = json.GetField ("currencies");
		JSONObject jsonGoods = json.GetField ("goods");
		JSONObject jsonCurrencyPacks = json.GetField ("currencyPacks");
		if (jsonCurrencies.IsNull == false) 
		{
			foreach(JSONObject jsonCurrency in jsonCurrencies.list)
			{
				ZFCurrency currency = new ZFCurrency();
				currency.fromJSONObject(jsonCurrency);
				currencies.Add(currency);
			}
		}
		if (jsonGoods.IsNull == false) 
		{
			JSONObject jsonEquippableVGs = jsonGoods.GetField("equippable");
			JSONObject jsonLifetimeVGs = jsonGoods.GetField("lifetime");
			JSONObject jsonSingleUsePackVGs = jsonGoods.GetField("goodPacks");
			JSONObject jsonSingleUseVGs = jsonGoods.GetField("singleUse");
			JSONObject jsonUpgradeVGs = jsonGoods.GetField("goodUpgrades");
			
			foreach(JSONObject jsonEquippableVG in jsonEquippableVGs.list)
			{
				ZFGood good = new ZFGood();
				good.fromJSONObject(jsonEquippableVG);
				good.goodType = ZFGood.GoodType.EquippableVG;
				goods.Add(good);
			}
			
			foreach(JSONObject jsonLifetimeVG in jsonLifetimeVGs.list)
			{
				ZFGood good = new ZFGood();
				good.fromJSONObject(jsonLifetimeVG);
				good.goodType = ZFGood.GoodType.LifetimeVG;
				goods.Add(good);
			}
			
			foreach(JSONObject jsonSingleUsePackVG in jsonSingleUsePackVGs.list)
			{
				ZFGood good = new ZFGood();
				good.goodType = ZFGood.GoodType.SingleUsePackVG;
				good.fromJSONObject(jsonSingleUsePackVG);
				goods.Add(good);
			}
			
			foreach(JSONObject jsonSingleUseVG in jsonSingleUseVGs.list)
			{
				ZFGood good = new ZFGood();
				good.fromJSONObject(jsonSingleUseVG);
				good.goodType = ZFGood.GoodType.SingleUseVG;
				goods.Add(good);
			}
			
			foreach(JSONObject jsonUpgradeVG in jsonUpgradeVGs.list)
			{
				ZFGood good = new ZFGood();
				good.fromJSONObject(jsonUpgradeVG);
				good.goodType = ZFGood.GoodType.UpgradeVG;
				goods.Add(good);
			}
		}
		
		if (jsonCurrencyPacks.IsNull == false)
		{
			foreach(JSONObject jsonCurrencyPack in jsonCurrencyPacks.list)
			{
				ZFCurrencyPack currencyPack = new ZFCurrencyPack();
				currencyPack.fromJSONObject(jsonCurrencyPack);
				currencyPacks.Add(currencyPack);
			}
		}
	}
	
	public void WriteToJSONFile(JSONObject obj)
	{
		string stringJSON = obj.ToString ();
		using (StreamWriter sw = File.CreateText(jsonPath))
		{
			sw.Write(stringJSON);
		}
	}

	public JSONObject toJSONObject()
	{
		JSONObject jsonCurrencies = new JSONObject(JSONObject.Type.ARRAY);
		for (int i = 0; i < currencies.Count; i++)
		{
			jsonCurrencies.Add(currencies[i].toJSONObject());
		}
		
		JSONObject jsonGoods = new JSONObject(JSONObject.Type.OBJECT);
		JSONObject jsonEquippableVG = new JSONObject (JSONObject.Type.ARRAY);
		JSONObject jsonLifetimeVG = new JSONObject (JSONObject.Type.ARRAY);
		JSONObject jsonSingleUsePackVG = new JSONObject (JSONObject.Type.ARRAY);
		JSONObject jsonSingleUseVG = new JSONObject (JSONObject.Type.ARRAY);
		JSONObject jsonUpgradeVG = new JSONObject (JSONObject.Type.ARRAY);
		for (int i = 0; i < goods.Count; i++)
		{
			switch(goods[i].goodType)
			{
			case ZFGood.GoodType.EquippableVG:
			{
				jsonEquippableVG.Add(goods[i].toJSONObject());
			}
				break;
			case ZFGood.GoodType.LifetimeVG:
			{
				jsonLifetimeVG.Add(goods[i].toJSONObject());
			}
				break;
			case ZFGood.GoodType.SingleUsePackVG:
			{
				jsonSingleUsePackVG.Add(goods[i].toJSONObject());
			}
				break;
			case ZFGood.GoodType.SingleUseVG:
			{
				jsonSingleUseVG.Add(goods[i].toJSONObject());
			}
				break;
			case ZFGood.GoodType.UpgradeVG:
			{
				jsonUpgradeVG.Add(goods[i].toJSONObject());
			}
				break;
			}
		}
		
		jsonGoods.AddField ("lifetime", jsonLifetimeVG);
		jsonGoods.AddField ("equippable", jsonEquippableVG);
		jsonGoods.AddField ("singleUse", jsonSingleUseVG);
		jsonGoods.AddField ("goodPacks", jsonSingleUsePackVG);
		jsonGoods.AddField ("goodUpgrades", jsonUpgradeVG);
		
		JSONObject jsonCurrencyPacks = new JSONObject(JSONObject.Type.ARRAY);
		for (int i = 0; i < currencyPacks.Count; i++)
		{
			jsonCurrencyPacks.Add(currencyPacks[i].toJSONObject());
		}
		
		JSONObject json = new JSONObject (JSONObject.Type.OBJECT);
		json.AddField ("currencies", jsonCurrencies);
		json.AddField ("goods", jsonGoods);
		json.AddField ("currencyPacks", jsonCurrencyPacks);
		return json;
	}

	public void updateSingleUseItems()
	{
		singleUseGoodsIDs.Clear ();
		for (int i = 0; i < goods.Count; i++) {
			if(goods[i].goodType == ZFGood.GoodType.SingleUseVG)
			{
				singleUseGoodsIDs.Add(goods[i].ID);
			}
		}
	}

    public void generateSoomlaAssets()
    {
        string goodsVariables = "";
        
        SoomlaScriptBuilder builder = new SoomlaScriptBuilder();
		builder.AppendLine("using UnityEngine;");
		builder.AppendLine("using System.Collections;");
		builder.AppendLine("using System.Collections.Generic;");
		builder.AppendLine("using Soomla.Store;");
		builder.AppendLine ();

		builder.AppendLine ("/// <summary>");
		builder.AppendLine ("/// This class defines our game's economy, which includes virtual goods, virtual currencies");
		builder.AppendLine ("/// and currency packs, virtual categories");
		builder.AppendLine ("/// </summary>");
		builder.AppendLine("public class SoomlaAssets : IStoreAssets {");
		builder.IndentLevel++;
		builder.AppendLine();

		builder.AppendLine ("/** Static Final Members **/");
		builder.AppendLine ();

        for (int i = 0; i < currencies.Count; i++) {
			builder.AppendLine(string.Format("public const string {0}_ITEM_ID = \"{1}\";", currencies[i].ID.ToUpper(), currencies[i].ID));
			builder.AppendLine();
		}
        
		builder.AppendLine();
        for (int i = 0; i < currencyPacks.Count; i++) {
			builder.AppendLine(string.Format("public const string {0}_ITEM_ID = \"{1}\";", currencyPacks[i].ID.ToUpper(), currencyPacks[i].ID));
			declareProductId(builder, currencyPacks[i].ID, currencyPacks[i].marketInfo);

			builder.AppendLine();
		}
        
        builder.AppendLine();
        for (int i = 0; i < goods.Count; i++) {
			builder.AppendLine(string.Format("public const string {0}_ITEM_ID = \"{1}\";", goods[i].ID.ToUpper(), goods[i].ID));
			if (goods[i].typePurchase == ZFGood.PurchaseInfo.Market) {
				declareProductId(builder, goods[i].ID, goods[i].marketInfo);
            }
			goodsVariables += goods[i].ID.ToUpper() + "_ITEM_ID, ";
			builder.AppendLine();
		}
        
        builder.AppendLine ();
		builder.AppendLine ();
		//create constructors for each soomla object
		//	Virtual Currencies
		builder.AppendLine ("/** Virtual Currencies **/");
		builder.AppendLine ();

		for (int i = 0; i < currencies.Count; i++) {
			builder.AppendLine("public static VirtualCurrency " + currencies[i].ID.ToUpper() + " = new VirtualCurrency(");
			builder.IndentLevel ++;
			builder.AppendLine("\"" + currencies[i].name + "\",\t\t\t\t\t//name");
			builder.AppendLine("\"\",\t\t\t\t//description");
			builder.AppendLine(currencies[i].ID.ToUpper() + "_ITEM_ID\t\t\t\t//item id");
			builder.IndentLevel --;
			builder.AppendLine(");");
			builder.AppendLine();
        }
        
		builder.AppendLine();
		builder.AppendLine ("/** Virtual Currency Packs **/");
		builder.AppendLine ();

		//	Virtual Currency Packs
		for (int i = 0; i < currencyPacks.Count; i++) {
			builder.AppendLine("public static VirtualCurrencyPack " + currencyPacks[i].ID.ToUpper() + " = new VirtualCurrencyPack(");
			builder.IndentLevel ++;
			builder.AppendLine("\"" + currencyPacks[i].name + "\",\t\t\t\t\t//name");
			builder.AppendLine("\"" + currencyPacks[i].description + "\",\t\t\t\t//description");
			builder.AppendLine(currencyPacks[i].ID.ToUpper() + "_ITEM_ID,\t\t\t\t//item id");
			builder.AppendLine(currencyPacks[i].currency_amount + ",\t\t\t\t//number of currencies in the pack");
			builder.AppendLine(currencyPacks[i].currency_itemId.ToUpper() + "_ITEM_ID,\t\t\t\t//the currency associated with this pack");
			builder.AppendLine("new PurchaseWithMarket(" + currencyPacks[i].ID.ToUpper() + "_PRODUCT_ID, " + currencyPacks[i].marketInfo.price + ")");
			builder.IndentLevel --;
			builder.AppendLine(");");
            builder.AppendLine();
        }
        
		builder.AppendLine ();
		builder.AppendLine ("/** Virtual Goods **/");
		builder.AppendLine ();

		//	Virtual Goods
		for (int i = 0; i < goods.Count; i++) { 
			builder.AppendLine(string.Format("public static VirtualGood {0} = new {1}(", goods[i].ID.ToUpper(), goods[i].goodType));
           	builder.IndentLevel ++;


			if (goods[i].goodType == ZFGood.GoodType.SingleUsePackVG) {
				builder.AppendLine("\"" + goods[i].good_itemId + "\",\t\t\t\t//item id");
				builder.AppendLine(goods[i].good_amount + ",\t\t\t\t//number of goods in the pack");
			} else if (goods[i].goodType == ZFGood.GoodType.EquippableVG) {
				builder.AppendLine("EquippableVG.EquippingModel.LOCAL,");
			}
                
			builder.AppendLine("\"" + goods[i].name + "\",\t\t\t\t\t//name");
			builder.AppendLine("\"" + goods[i].description + "\",\t\t\t\t//description");
			builder.AppendLine(goods[i].ID.ToUpper() + "_ITEM_ID,\t\t\t\t//item id");

			if(goods[i].typePurchase == ZFGood.PurchaseInfo.Market) {
				builder.AppendLine("new PurchaseWithMarket(" + goods[i].ID.ToUpper() + "_PRODUCT_ID, " + goods[i].marketInfo.price + ")\t\t\t\t//the way this virtual good is purchased");
			} else {
				builder.AppendLine("new PurchaseWithVirtualItem(" + goods[i].virtualInfo.pvi_itemId.ToUpper() + "_ITEM_ID, " + goods[i].virtualInfo.pvi_amount + ")\t\t\t\t//the way this virtual good is purchased");
            }
            builder.IndentLevel --;
            builder.AppendLine(");");
			builder.AppendLine();
		}
       
		builder.AppendLine();
		builder.AppendLine ("/** Virtual Categories **/");
		builder.AppendLine ("// The muffin rush theme doesn't support categories, so we just put everything under a general category.");
        // add GENERAL_CATEGORY
		// remove last ", "
		goodsVariables = goodsVariables.Remove (goodsVariables.Length - 2, 2);
		builder.AppendLine("public static VirtualCategory GENERAL_CATEGORY = new VirtualCategory(");
		builder.IndentLevel ++;
		builder.AppendLine("\"General\", new List<string>(new string[] {" + goodsVariables + "})");
        builder.IndentLevel --;
		builder.AppendLine(");");
		builder.AppendLine();


		//get() methods for Soomla objects
		// implement GetVersion
		builder.AppendLine ("/// <summary>");
		builder.AppendLine ("/// see parent.");
		builder.AppendLine ("/// </summary>");
		builder.AppendLine("public int GetVersion() {");
		builder.IndentLevel ++;
		builder.AppendLine("return 0;");
        builder.IndentLevel --;
		builder.AppendLine("}");
        builder.AppendLine();

		// implement GetCurrencies
		string currenciesSequence = "";
		for (int i = 0; i < currencies.Count; i++) {
			currenciesSequence += currencies[i].ID.ToUpper();
			if (i != currencies.Count - 1) {
				currenciesSequence += ", ";
            }
		}

		builder.AppendLine ("/// <summary>");
		builder.AppendLine ("/// see parent.");
		builder.AppendLine ("/// </summary>");
		builder.AppendLine("public VirtualCurrency[] GetCurrencies() {");
		builder.IndentLevel ++;
		builder.AppendLine("return new VirtualCurrency[]{" + currenciesSequence + "};");
		builder.IndentLevel --;
		builder.AppendLine("}");
		builder.AppendLine();

		// implement GetCurrencyPacks
		string currencyPacksSequence = "";
		for (int i = 0; i < currencyPacks.Count; i++) {
			currencyPacksSequence += currencyPacks[i].ID.ToUpper();
			if (i != currencyPacks.Count - 1) {
				currencyPacksSequence += ", ";
			}
		}

		builder.AppendLine ("/// <summary>");
		builder.AppendLine ("/// see parent.");
		builder.AppendLine ("/// </summary>");
		builder.AppendLine("public VirtualCurrencyPack[] GetCurrencyPacks() {");
		builder.IndentLevel ++;
		builder.AppendLine("return new VirtualCurrencyPack[]{" + currencyPacksSequence + "};");
		builder.IndentLevel --;
        builder.AppendLine("}");
        builder.AppendLine();
        
		// implement GetGoods
		string goodsSequence = "";
		for (int i = 0; i < goods.Count; i++) {
			goodsSequence += goods[i].ID.ToUpper();
			if (i != goods.Count - 1) {
				goodsSequence += ", ";
			}
		}

		builder.AppendLine ("/// <summary>");
		builder.AppendLine ("/// see parent.");
		builder.AppendLine ("/// </summary>");
		builder.AppendLine("public VirtualGood[] GetGoods() {");
		builder.IndentLevel ++;
		builder.AppendLine("return new VirtualGood[]{" + goodsSequence + "};");
		builder.IndentLevel --;
        builder.AppendLine("}");
        builder.AppendLine();

		// implement GetCategories
		builder.AppendLine ("/// <summary>");
		builder.AppendLine ("/// see parent.");
		builder.AppendLine ("/// </summary>");
		builder.AppendLine("public VirtualCategory[] GetCategories() {");
		builder.IndentLevel ++;
		builder.AppendLine("return new VirtualCategory[]{GENERAL_CATEGORY};");
		builder.IndentLevel --;
        builder.AppendLine("}");
        builder.AppendLine();
        

        // end class
		builder.IndentLevel--;
		builder.AppendLine("}");

		string path = @"Assets/SoomlaAssets.cs";
		using (StreamWriter sw = File.CreateText(path))
		{
			sw.Write(builder.ToString());
		}
	}

	private void declareProductId(SoomlaScriptBuilder builder, string id, MarketInfo marketInfo) {
		bool hasOverrides = false;
		// for iOS
		if (marketInfo.useIos) {
			builder.AppendLine("#if UNITY_IOS");
			builder.AppendLine(string.Format("public const string {0}_PRODUCT_ID = \"{1}\";", id.ToUpper(), marketInfo.iosId));
			hasOverrides = true;
		}
		// for Android
		if (marketInfo.useAndroid) {
			if (hasOverrides) {
				builder.AppendLine("#elif UNITY_ANDROID");
			} else {
				builder.AppendLine("#if UNITY_ANDROID");
			}
			builder.AppendLine(string.Format("public const string {0}_PRODUCT_ID = \"{1}\";", id.ToUpper(), marketInfo.androidId));
			hasOverrides = true;
		}
		// default value
		if (hasOverrides) {
			builder.AppendLine("#else");
		}
		builder.AppendLine(string.Format("public const string {0}_PRODUCT_ID = \"{1}\";", id.ToUpper(), marketInfo.productId));
        if (hasOverrides) {
            builder.AppendLine("#endif");
        }
    }
    
    public void expandAll(int screen)	{
		switch (screen) {
		case 0:
		{
			for(int i = 0; i < this.goods.Count; i++)
			{
				goods[i].render = true;
			}
		}
			break;
		case 1:
		{
			for(int i = 0; i < this.currencies.Count; i++)
			{
				currencies[i].render = true;
			}
		}
			break;
		case 2:
		{
			for(int i = 0; i < this.currencyPacks.Count; i++)
			{
				currencyPacks[i].render = true;
			}
		}
			break;
		default:
			break;
				}

	}

	public void collapseAll(int screen)	{
		switch (screen) {
		case 0:
		{
			for(int i = 0; i < this.goods.Count; i++)
			{
				goods[i].render = false;
			}
		}
			break;
		case 1:
		{
			for(int i = 0; i < this.currencies.Count; i++)
			{
				currencies[i].render = false;
			}
		}
			break;
		case 2:
		{
			for(int i = 0; i < this.currencyPacks.Count; i++)
			{
				currencyPacks[i].render = false;
			}
		}
			break;
		default:
			break;
		}
	}
}
