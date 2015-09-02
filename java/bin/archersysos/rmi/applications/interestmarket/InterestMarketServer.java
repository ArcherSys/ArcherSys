<<<<<<< HEAD
<<<<<<< HEAD
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.io.*;

public class InterestMarketServer extends UnicastRemoteObject implements RemoteInterestMarketServer{
      public InterestMarketServer() throws RemoteException{}
   public float getInterest(double principal,double rate,double timeElapsedInYears,double numberOfCompounds) throws RemoteException{
             Double factorone = rate / numberOfCompounds;
             Double factortwo = 1 + factorone;
             Double factorthree = principal * factorone;
             return (float) Math.pow(factortwo,(numberOfCompounds * timeElapsedInYears));

}  public static void main(String args[]){
  try{ 
    RemoteInterestMarketServer server = new InterestMarketServer();
    Naming.rebind("archerjava_InterestServer",server);
    } catch(java.io.IOException e){
     System.out.println("Error");
  
}
}
}
=======
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.io.*;

public class InterestMarketServer extends UnicastRemoteObject implements RemoteInterestMarketServer{
      public InterestMarketServer() throws RemoteException{}
   public float getInterest(double principal,double rate,double timeElapsedInYears,double numberOfCompounds) throws RemoteException{
             Double factorone = rate / numberOfCompounds;
             Double factortwo = 1 + factorone;
             Double factorthree = principal * factorone;
             return (float) Math.pow(factortwo,(numberOfCompounds * timeElapsedInYears));

}  public static void main(String args[]){
  try{ 
    RemoteInterestMarketServer server = new InterestMarketServer();
    Naming.rebind("archerjava_InterestServer",server);
    } catch(java.io.IOException e){
     System.out.println("Error");
  
}
}
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.io.*;

public class InterestMarketServer extends UnicastRemoteObject implements RemoteInterestMarketServer{
      public InterestMarketServer() throws RemoteException{}
   public float getInterest(double principal,double rate,double timeElapsedInYears,double numberOfCompounds) throws RemoteException{
             Double factorone = rate / numberOfCompounds;
             Double factortwo = 1 + factorone;
             Double factorthree = principal * factorone;
             return (float) Math.pow(factortwo,(numberOfCompounds * timeElapsedInYears));

}  public static void main(String args[]){
  try{ 
    RemoteInterestMarketServer server = new InterestMarketServer();
    Naming.rebind("archerjava_InterestServer",server);
    } catch(java.io.IOException e){
     System.out.println("Error");
  
}
}
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
