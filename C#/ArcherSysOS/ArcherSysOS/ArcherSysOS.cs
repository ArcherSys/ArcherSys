using System;
<<<<<<< HEAD
=======
using System.Drawing;
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
<<<<<<< HEAD
using System.Web;
using System.IO;
=======
using System.Windows.Forms;

>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453



namespace ArcherSysOS
{
<<<<<<< HEAD
    public class Application
    {
       
        public static void RunProgram(String program)
        {
            System.Diagnostics.Process.Start(program);
        }
        public static void startArcherVM(string VMStarterPath)
        {
            if (VMStarterPath.Contains("xampp-control.exe") || VMStarterPath.Contains("xampp-start.exe"))
            {
                RunProgram(VMStarterPath);
            }
        }
        public static void LogInfo(String message)
        {
            Console.WriteLine(message);

        }
        public static string GetInput(string prompt)
        {
            Console.Out.Write(prompt);
            return Console.In.ReadLine();
        }



    }
   
=======
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
    
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}

