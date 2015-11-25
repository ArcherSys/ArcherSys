<<<<<<< HEAD
<<<<<<< HEAD
package archersysos;
import java.io.*;
public class ArcherCESRuntime{
   public static void main (String[] args){
  // Runs a simple console
try{
     String msg = null;
     BufferedReader bin = new BufferedReader(new InputStreamReader(System.in));
     while(true){
       int counter = 0;
       System.out.println("Enter Some Text:");
       
      msg = bin.readLine();
      counter += 1;
      System.out.print(counter + ":" + msg);
      
    }
 }catch(IOException e){
      System.err.print("ArcherJava Runtime Error");
   }
   }
=======
package archersysos;
import java.io.*;
public class ArcherCESRuntime{
   public static void main (String[] args){
  // Runs a simple console
try{
     String msg = null;
     BufferedReader bin = new BufferedReader(new InputStreamReader(System.in));
     while(true){
       int counter = 0;
       System.out.println("Enter Some Text:");
       
      msg = bin.readLine();
      counter += 1;
      System.out.print(counter + ":" + msg);
      
    }
 }catch(IOException e){
      System.err.print("ArcherJava Runtime Error");
   }
   }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
package archersysos;
import java.io.*;
public class ArcherCESRuntime{
   public static void main (String[] args){
  // Runs a simple console
try{
     String msg = null;
     BufferedReader bin = new BufferedReader(new InputStreamReader(System.in));
     while(true){
       int counter = 0;
       System.out.println("Enter Some Text:");
       
      msg = bin.readLine();
      counter += 1;
      System.out.print(counter + ":" + msg);
      
    }
 }catch(IOException e){
      System.err.print("ArcherJava Runtime Error");
   }
   }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}