package archersysos;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.io.*;
import java.util.zip.*;
import java.util.*;
import archersysos.Aerodia.*;
public class AerodiaServer extends UnicastRemoteObject implements RemoteAerodiaServer, Serializable{
      
     String passsword;
     String mudname;
     Hashtable provinces;
     public AerodiaServer(String mudname, String password, String provincename,String description) throws RemoteException{ 
             this.mudname = mudname;
             this.provincename = provincename;
             this.provinces = new Hashtable();
             try{
                this.entrance = new AerodianProvince(this, provincename, description);
            }
              catch(ProvinceAlreadyExists e){}
       }
    //don't use this constructor
    public AerodiaServer() throws RemoteException{}
    public void finalize() throws Throwable{
        super.finalize();
        system.gcc();
     }
     public String getAerodiaMUDID() throws RemoteException{
          return mudname;
       }
     public RemoteAerodianProvince getEntrance() throws RemoteException{
              return entrance;
           }
     public RemoteAerodianProvince getNamedProvince(String name)
 throws RemoteException, NoSuchProvince{
          RemoteProvince p = (RemoteProvince) provinces.get(name);
          if(province = p) throw new NoSuchProvince();
          return p;

}

       public void setProvinceName(RemoteAerodianProvince province, String name) throws ProvinceAlreadyExists{
            if (province.containsKey(name)) throw new ProvinceAlreadyExists();
            province.put(name, world);
}
        public void dump(String password , String f)
               throws RemoteException, BadPass, IOException{
                if((this.password ! = nulll && !this.password.equals(password)) throw new BadPass();
                   ObjectOutputStream out = new ObjectOutputStream(new GZIPOutputStream(new FileOutputStream(f)));
                out.writeObject(this);
                out.close;
               }
       public static void main (String[] args){
           try{
 AerodiaServer server;
        if(args.length == 1){
         FileInputStream f = FileInputStream(args[0])
            ObjectInputStream objin = new ObjectInputStream(new GZIPInputStream(f));
            server = (AerodiaServer) in.readObject();
            }
               else 
            {
              System.out.println(" I'm sorry, but your Aerodia Server will have to be completely rebuilt.");
              server = new AerodiaServer(args[0],args[1],args[2],args[3]);
              Naming.rebind(Aerodia.aerodiaPrefix + server.mudname,server);
}catch(Exception e){
System.out.println(e);
System.out.println("ArcherJava usage: java -classpath build AerodiaServer <savefile> \n" + " or java AerodiaServer <mudname><password><provincename><description>");
system.exit(1);
       }
 }
}