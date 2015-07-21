using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;
using ArcherSysOS;

namespace HelloWorld
{
 
    
        public class Program : ArcherSysOSSharpConsoleApplication
        {

            public static void Run(String[] args)
            {
            Log8.Log("Hello World with Log");
            Log8.Wait();
                Log8.LogDEBUG("Hello World with LogDEBUG standard",1);
            Log8.Wait();
        Log8.LogDEBUG("Hello World with LogDEBUG DEBUG",2);
            Log8.Wait();
    }
        public static void Main(String[] args)
        {
            Run(args);
        }

    }

}
