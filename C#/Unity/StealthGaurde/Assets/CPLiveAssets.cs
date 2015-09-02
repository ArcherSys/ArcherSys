using UnityEngine;
using System.Collections;
using Soomla.Store;
using System;

using System.Collections.Generic;
using SoomlaWpStore.domain.virtualGoods;
namespace ArcherSysOS.DDG.CapitalPursuit.Live
{
    public class CPLiveAssets : IStoreAssets
    {
        public enum Billing
        {
            CHEAP = 2,
            REGULAR = 6,
            PREMIUM = 10
        }
        public enum Items
        {
            STROLLER = 0,
            DESIGNER_SHOES = 1,
           MIXTAPE_DEVICE = 2
        }
        
        public double GetPrice(Billing billing)
        {
            return (double)billing;
        }
        

        public static VirtualCurrency CPLIVE_CURRENCY = new VirtualCurrency(
         "CP Smartrip Cards",
         "WMATA SmarTrip cards used as the official game currency of games made by DDG and its members",
         CPLIVE_CURRENCY_ID);
        public static string KEYCARD_ID
        {
            get
            {
                return "StealthGuarde.KeyCard";
            }
        }
        public static string CPLIVE_CURRENCY_ID
        {
            get
            {
                return "currency_smartrip";
            }
        }

       
        
        public static bool UseRealMoney
        {
            get
            {
                return useRealMoney;
            }

            set
            {
                useRealMoney = value;
            }
        }

      
    private static bool useRealMoney = false;
    public static string MIXTAPE_ID = "mixtape_device_8b";
    /// <summary>
    /// The ID of the cheapest thing you can buy in the Capital Pursuit Live Bazaar.
    /// 
    /// </summary>
    public static string STROLLER_ID = "strollerGood";
        

        void initializeMoneyMode(bool truth)
        {
            UseRealMoney = true;
        }

        public VirtualCategory[] GetCategories()
        {
            return new VirtualCategory[] { new VirtualCategory("All Goods", new List<string> { STROLLER_ID, DESIGNER_SHOES_CLASS_C_ID, MIXTAPE_ID }) };
        }

        public VirtualCurrency[] GetCurrencies()
        {
            return new VirtualCurrency[] { CPLIVE_CURRENCY };
        }

        public VirtualCurrencyPack[] GetCurrencyPacks()
        {
            return new VirtualCurrencyPack[] { CURRENCY_PACK_FIFTY_SMARTRIPS };


        }
        /// <summary>
        /// The ID of the cheapest shoes you can buy.
        /// </summary>
        public static string DESIGNER_SHOES_CLASS_C_ID = "designer_shoes_class_c";
        public Soomla.Store.VirtualGood[] GetGoods()
        {
            return new Soomla.Store.VirtualGood[] { STROLLER,DESIGNER_SHOES_CLASS_C,MIXTAPE_DEVICE };
        }
      
        public int GetVersion()
        {
            return 1;
        }
        public static int STORE_AMOUNT_STROLLER = 500;
        public static VirtualCurrencyPack CURRENCY_PACK_FIFTY_SMARTRIPS = new VirtualCurrencyPack("500 Dollars", "Five hundred dollars all in one package", "50pack", 50, "currency_smartrip", new PurchaseWithMarket(new MarketItem("smartTrip50Pack", 5.00)));
        public static Soomla.Store.VirtualGood STROLLER = (Soomla.Store.VirtualGood)new Soomla.Store.SingleUseVG("Stroller", "A way to move up half a Round in CPLive", STROLLER_ID, new PurchaseWithMarket(new MarketItem("strollerPurchase", 6.99)));
        public static Soomla.Store.VirtualGood DESIGNER_SHOES_CLASS_C = new Soomla.Store.EquippableVG(Soomla.Store.EquippableVG.EquippingModel.LOCAL, "Class C Designer Shoes", "Shoes that make you crash through the ceiling of the train", DESIGNER_SHOES_CLASS_C_ID, (UseRealMoney) ? (PurchaseType)new PurchaseWithVirtualItem(CPLIVE_CURRENCY_ID, 20000) : (PurchaseType)new PurchaseWithMarket(new MarketItem(DESIGNER_SHOES_CLASS_C_ID, 3.00)));
    /// <summary>
    /// Reference to the Mixtape VG:
    /// With this item,you can listen to 8-bit songs that are actual songs.Period.Note: without this LifetimeVG, you'l always listen to Anaconda (Theme Song for CP DCE) all day.
    /// </summary>
    public static Soomla.Store.LifetimeVG MIXTAPE_DEVICE = new Soomla.Store.LifetimeVG("Mixtape Device", "With this item,you can listen to 8-bit songs that are actual songs.Period.Note: without this LifetimeVG, you'l always listen to Anaconda (Theme Song for CP DCE) all day.", MIXTAPE_ID, ((UseRealMoney) ? (PurchaseType) new PurchaseWithMarket(new MarketItem(MIXTAPE_ID, (double)Billing.CHEAP)) : new PurchaseWithVirtualItem(CPLIVE_CURRENCY_ID, 200)));
        public static Soomla.Store.SingleUseVG STEALTHGAURDE_KEYCARD = new Soomla.Store.SingleUseVG("StealthGaurde KeyCard", "In Stealthgaurde, you can gain access to a gate in StealthGaurde", KEYCARD_ID, new PurchaseWithVirtualItem("currency_smatrip", 10));
      public static bool hasKeyCard()
        {
            return StoreInventory.GetItemBalance(KEYCARD_ID) > 0;
        }
    }
}