using System;
using System.Collections.Generic;
using System.Linq;
using System.Web.Helpers;
using System.Web;
namespace ArcherSysOS.Web.ServerINF.Models {
    /// <summary>
    /// ArcherSysOS# Config Data
    /// </summary>

    public class ServerInfoCode
    {
        public static HtmlString ServerInfo
        {

           get { return System.Web.Helpers.ServerInfo.GetHtml(); }
        }

    }
        
    }
