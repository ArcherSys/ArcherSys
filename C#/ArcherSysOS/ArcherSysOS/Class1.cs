using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ArcherSysOS
{
    public class Log8
    {
        public static void Log(String text)
        {
            Console.WriteLine(text);
        }
        public static void LogDEBUG(String message,int uselogger,object params)
        {
            switch (uselogger)
            {
                case 1:
                    Console.WriteLine(message);
                    break;
                case 2:
                    Console.WriteLine(message,params["object"]);
                    break;

            }
        }
    }
}
