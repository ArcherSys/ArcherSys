package archersysos;
import java.rmi.*;
iport java.rmi.server.*;
import java.io.*;
import archersysos.Aerodia.*;
public class Aerodian extends UnicastRemoteObject implements RemoteAerodian{
string name;
string description;
PrintWriter tellStream;
public Aerodian(String n, String d, PrintWriter out) throws RemoteException{
   name = n;
   description = d;
   tellStream = out;
 }
 public String getName(){ return name;}
 public void SetName(String n){ name = n;}
 public void setDescription(String d){
    description = d;
 }
 public void setTellStream(PrintWriter out){ tellStream = out;}
 public String getDescription() throws RemoteException{
  return description;
}
public void tell(String message) throws RemoteException{
   tellStream.println(message);
   tellStream.flush();
  }
}
  
   