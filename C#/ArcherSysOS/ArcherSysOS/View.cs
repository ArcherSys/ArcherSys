using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Web;
using System.Threading.Tasks;

namespace ArcherSysOS.WUI
{

    class View : Browsable
    {   public string title;
        private StringBuilder code = new StringBuilder();



       public const string DOCTYPE = "<!DOCTYPE HTML>";

        public StringBuilder Code
        {
            get
            {
                return code;
            }

            set
            {
                code = value;
            }
        }

        public void echo(string html)
        {
           Code.AppendLine(html);
        }
        public View(string title,Action onDefine,Action onCreate)
        {
            
            this.title = title;
            echo(DOCTYPE);
            head(onDefine);
            body(onCreate);
        }
        public void body(Action onCreate)
        {
            echo("<body>");
            onCreate();
            echo("</body>");

        }

        public void head(Action onDefine)
        {
            echo("<head>");
            echo("<title>" + title + "</title>");
            onDefine();
            echo("</head>");
        }
    }
}
