<<<<<<< HEAD
package archersysos.rmi.applications.interestmarket;
import java.io.IOException;

public class IMArgumentativeStarter{
    public static void main(String[] args){  
      // With the Console Allows the User To Specify a server task or client task
 
         if(args[0] == "serve"){
               InterestMarketServer.main();
          }else if(args[0] == "recieve"){
               InterestMarketClient.main();
          }else if(args[0] == "help"){
                System.out.println("usage: java -jar InterestMarket.jar <task> \n task = The program you want to run <serve || recieve> ");
          } else {
           throw new IOException("Bad Input!");
          }
   }
    
             
=======
package archersysos.rmi.applications.interestmarket;
import java.io.IOException;

public class IMArgumentativeStarter{
    public static void main(String[] args){  
      // With the Console Allows the User To Specify a server task or client task
 
         if(args[0] == "serve"){
               InterestMarketServer.main();
          }else if(args[0] == "recieve"){
               InterestMarketClient.main();
          }else if(args[0] == "help"){
                System.out.println("usage: java -jar InterestMarket.jar <task> \n task = The program you want to run <serve || recieve> ");
          } else {
           throw new IOException("Bad Input!");
          }
   }
    
             
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}