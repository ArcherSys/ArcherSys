<<<<<<< HEAD
<<<<<<< HEAD
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.util.*;
import java.io.*;
import java.net.*;

public class InterestMarketClient{
 public static BufferedReader interestmarketin = new BufferedReader(
new InputStreamReader(System.in));
 public static PrintWriter interestmarketout = new PrintWriter(System.out, true);
 public static void main(String args[]) throws RemoteException, NotBoundException, MalformedURLException, IOException, java.rmi.UnknownHostException {  
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
        
 
      }

}




  public static final int getInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return (int) Integer.parseInt(response);
  }
public static final float getFloatInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return (float) Float.parseFloat(response);
  }
  public static final String getStringInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return response;
  }
 public static void flush(){
  
     interestmarketout.flush();

 }


}


=======
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.util.*;
import java.io.*;
import java.net.*;

public class InterestMarketClient{
 public static BufferedReader interestmarketin = new BufferedReader(
new InputStreamReader(System.in));
 public static PrintWriter interestmarketout = new PrintWriter(System.out, true);
 public static void main(String args[]) throws RemoteException, NotBoundException, MalformedURLException, IOException, java.rmi.UnknownHostException {  
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
        
 
      }

}




  public static final int getInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return (int) Integer.parseInt(response);
  }
public static final float getFloatInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return (float) Float.parseFloat(response);
  }
  public static final String getStringInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return response;
  }
 public static void flush(){
  
     interestmarketout.flush();

 }


}


>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.util.*;
import java.io.*;
import java.net.*;

public class InterestMarketClient{
 public static BufferedReader interestmarketin = new BufferedReader(
new InputStreamReader(System.in));
 public static PrintWriter interestmarketout = new PrintWriter(System.out, true);
 public static void main(String args[]) throws RemoteException, NotBoundException, MalformedURLException, IOException, java.rmi.UnknownHostException {  
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
        
 
      }

}




  public static final int getInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return (int) Integer.parseInt(response);
  }
public static final float getFloatInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return (float) Float.parseFloat(response);
  }
  public static final String getStringInput(String prompt)throws IOException{ 
    interestmarketout.println(prompt);
 String response = interestmarketin.readLine();
    return response;
  }
 public static void flush(){
  
     interestmarketout.flush();

 }


}


>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
