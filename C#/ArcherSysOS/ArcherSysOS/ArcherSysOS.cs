using System;
using System.Drawing;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;




namespace ArcherSysOS
{
    public class Log8
    {
        public static void Log(String text)
        {
            Console.WriteLine(text);
        }
        public static void LogDEBUG(String message, int uselogger)
        {
            switch (uselogger)
            {
                case 1:
                    Console.WriteLine(message);
                    break;
                case 2:
                    Console.WriteLine("DEBUG: " + message);
                    break;

            }


        }
        public static void Wait()
        {
            Console.ReadKey();
        }
        public static String Wait(String prompt)
        { 
            
            /// <summary>
            /// Asks for input with a prompt.
            /// </summary>
        
            Console.WriteLine(prompt);
            return Console.ReadLine();
        }

    }
    public abstract class ArcherSysOSSharpApplication
    {
        public static void Run(String[] args)
        {

        }
    }
    public class ArcherSysOSSharpConsoleApplication : ArcherSysOSSharpApplication
    {
        public static void Main(String[] args)
        {
            Run(args);
        }
        public static void Run(String[] args)
        {

        }
    }
    public class Networking
    {
        public static Uri getHomingLocale()
        {
            return new System.Uri("http://localhost");
        }
    }
    
        public class BitmapManager
        {
            public static Bitmap loadBitmap(String file)
            {
                return new Bitmap(file);
            }
        }
    
}

