package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.math.*;
import java.util.*;

public interface RemoteInterestMarketServer extends Remote{
   public float getInterest(double principal,double rate,double timeElaspedInYears,double numberOfCompunds) throws RemoteException;
   


}