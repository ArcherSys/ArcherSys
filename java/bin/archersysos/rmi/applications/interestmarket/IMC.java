<<<<<<< HEAD
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.io.*;

public class IMC extends Thread{
  public void runMain() throws IOException {
    RemoteInterestMarketServer server = (RemoteInterestMarketServer) Naming.lookup("rmi://"+InterestMarketClient.getStringInput("Enter Host:")+"/archerjava_InterestServer");
      
     while (true){
        try{
         int p = InterestMarketClient.getInput("Enter the principal:");
         float r = InterestMarketClient.getFloatInput("Enter an rate:");
         int n = InterestMarketClient.getInput("Enter an compounding rate:");
         int t = InterestMarketClient.getInput("Enter elapsed time :");
          InterestMarketClient.interestmarketout.println(server.getInterest(p,r,n,t));
         }catch(RemoteException e){
           InterestMarketClient.interestmarketout.println("Server Error");
           break;
        }
        catch(IOException e){
           InterestMarketClient.interestmarketout.println("Server Error");
           break;
        }
 
      }

}
 public void run(){
   runMain();
}
=======
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.io.*;

public class IMC extends Thread{
  public void runMain() throws IOException {
    RemoteInterestMarketServer server = (RemoteInterestMarketServer) Naming.lookup("rmi://"+InterestMarketClient.getStringInput("Enter Host:")+"/archerjava_InterestServer");
      
     while (true){
        try{
         int p = InterestMarketClient.getInput("Enter the principal:");
         float r = InterestMarketClient.getFloatInput("Enter an rate:");
         int n = InterestMarketClient.getInput("Enter an compounding rate:");
         int t = InterestMarketClient.getInput("Enter elapsed time :");
          InterestMarketClient.interestmarketout.println(server.getInterest(p,r,n,t));
         }catch(RemoteException e){
           InterestMarketClient.interestmarketout.println("Server Error");
           break;
        }
        catch(IOException e){
           InterestMarketClient.interestmarketout.println("Server Error");
           break;
        }
 
      }

}
 public void run(){
   runMain();
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}