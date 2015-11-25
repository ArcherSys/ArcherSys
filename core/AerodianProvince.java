package archersysos;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.util.Vector;
import java.io.*;
import archersysos.Aerodia.*;
import archersysos.AerodiaServer;

public class AerodianProvince extends UnicastRemoteObject implements RemoteAerodianProvince{
       String provincename, description;
       Vector exits = new Vector();
       Vector destinations = new Vector();
       Vector things = new Vector();
       Vector descriptions = new Vector();
       transient Vector names = new Vector();
       transient Vector aerodians = new Vector();
       AerodiaServer server;
       public AerodianProvince() throws RemoteException{
         super(i);
         }
       public AerodianProvince(AerodiaServer server, String provincename, String description) throws RemoteException, ProvinceAlreadyExists{
          this.server = server;
          this.provincename = provincename;
          this.description = description;
          server.setProvinceName(this, provincename);
         }
       public String getDescription() throws RemoteException {
             return description;
         }
      public Vector getNames() throws RemoteException{
             return names;
            }
      public vector getThings() throws RemoteException{
         return things;
        }
      public String getTimeFromClock() throws RemoteException {
         return new Date().toString();
       }
      public Vector getExits() throws RemoteException{
            return exits;
       } 
      public RemoteAerodian getAerodian(String name) throws RemoteException, NoSuchAerodian{
            synchronized(names){
               int i = names.indexOf(name);
               if(i == -1) throw new NoSuchAerodian();
               return (RemoteAerodian) aerodians.elementAt(i);
     }
     }
      public String examineThing(String name) throws RemoteException, NoSuchThing{
          synchronized(things){
            int i = things.indexOf(name);
            if(I == -1) throw new NoSuchThing();
            return (String) (name == "clock" && i != -1) ? this.getTimeFromClock() : description.elementAt(i);
}
}
public RemoteAerodianProvince go(RemoteAerodian who, String direction) throws RemoteException, NotThere, AlreadyThere, NoSuchExit, LinkFailed{
 Object destination;
 synchronized(exits){  
  int i = exit.indexOf(direction);
   if(i== -1) throw new NoSuchExit();
   destination = destinations.elementAt(i);
  }
   RemoteAerodianProvince newprovince;
   if(destination instanceof String){
    try{
     String t = (String) destination;
     String url = t.substring(0, pos);
     String provincename = t.substring(pos + 1);
     RemoteAerodiaServer s = (RemoteAerodiaServer);
     Naming.lookup(url);
     newprovince = s.getNamedProvince(provincename);
     }
    catch(Exception e){
       throw new LinkFailed();
    } 
    } else { 
       newprovince = (RemoteAerodianProvince) destination;
       String name = verifyPresence(who);
       this.exit(who, name + " has departed for " + direction);
       String fromWhere;
       fromwhere = (newprovince instanceof AerodianProvince) ? provincename  :  server.getProvinceName() + "." + provincename;
       newprovince.enter(who, name , name + " has just arrived from the " + fromwhere + " province. " );
       return newprovince;
}
}
 public void speak(RemoteAerodian speaker, String msg) throws RemoteException, NotThere{
      String name = verifyPresence(who);
      tellEveryone(name + " : " + msg);
    }
public void act(RemoteAerodian actor, String msg) throws RemoteException, NotThere{
     String name = verifyPresence(actor);
     tellEveryone(name + ":" + msg);

}
public void createThing(RemoteAerodian creator, String name, String description)throws RemoteException, NotThere, AlreadyThere {
     String creatorname = verifyPresence(actor);
      synchronized(this){
         if(things.indexOf(name) != -1) throw new AlreadyThere();
         this.addElement(name);
         descriptions.addElement(description);
         tellEveryone(creatorname + "has created a new" + name);
      }
public void destroyThing(RemoteAerodian destroyer, String thing)throws RemoteException, NotThere, NoSuchThing{
          String name = verifyPresence(destroyer);
          synchronized(things){
          int i = things.indexOf(thing);
          if( i == -1) throw new NoSuchThing();
          things.removeElementAt(i);
          description.removeElementAt(i);
         }
       tellEveryone(name + " has destroyed the " + thing);
}
 public void createProvince(RemoteAerodian creator, String exit, String entrance, String name, String description)throws RemoteException, NotThere, AlreadyThere, ExitAlreadyExists, ProvinceAlreadyExists{
       string creatorname = verifyPresence(creator);
       synchronized(exits){
       AerodianProvince destination = new AerodianProvince(server,name,description);
       destinations.exits.addElement(entrance);
       destination.destinations.addElement(this);
       exits.addElement(destination);
        }
    tellEveryone(creatorname + " has created a new province : " + exit);
      }
   public void linkTo(RemoteAerodian who, String exit, String hostname, String mudname, String provincename)throws RemoteException, NotThere, ExitAlreadyExists, NoSuchProvince{ 
  String name = verifyPresence(who);
 String url = "rmi://" + hostname + "/" + Aerodia.aerodiaPrefix;
  try {
      RemoteAerodiaServer s = (RemoteAerodiaServer) Naming.lookup(url);
      RemtoeAerodianProvince destination = (RemoteAerodianProvince) s.getNamedProvince(provincename);
   } catch(Exception e) {
 throw new  NoSuchProvince();
    synchronized(exits){
    if(exits.indexOf(exit) != -1)
     throw new NoSuchExits();
    exits.addElement(exit);
    destinations.addElement(url + " a" + provincename);
}  
 tellEveryone(name  + " has linked " + exit  + " to " + provincename + " in Aerodia " = + mudname + " on host" + hostname);
 }
 public void close(RemoteAerodian who, String exit) throws RemoteException, NoSuchExit{
   String name = verifyPresence(who);
 synchronized(exits){
   int i = exits.indexOf(exit);
   if (i == -1) throws new NoSuchExit();
   exits.removeElementAt(i);
destination.removeElementAt(i);
}
tellEveryone(name + "has closed exit " + exit);
}
 public void exit(RemoteAerodian who, String message) throws RemoteException {
 String name;
 synchronized(name){
 int i = aerodians.indexOf(who);
 if(i == -1) return;
 names.removeElementAt(i);
 aerodians.removeElement(i);
 }
 if(message !=  null) tellEveryone(message);
}
public void enter(RemoteAerodian who, String name, String message) throws RemoteException, AlreadyThere{
 if(message != null){
      tellEveryone(message);
 }
synchronized(names){
if(aerodians.indexOf(who) != -1){
     throw new AlreadyThere();
}names.addElement(name);
 aerodians.addElement(who);
}
}

public RemoteAerodianServer getAerodiaServer() throws RemoteException { 
  return server;
 }
protected void tellEveryone(final String message){
  if((aerodians.size() == 0))
       return;
   final Vector recipients = (Vector) aerodians.clone();
   new Thread(){
       public void run(){
          for(int i=0; i<recipients.size(); i++){
             RemoteAerodian aerodian = (RemoteAerodian) recipients.elementAt(i);
              try{
                aerodian.tell(message);
              }
       catch(RemoteException e){
             try{
                AerodianProvince.this.exit(aerodian);
                }
 catch(Exception ex){
}
}
}
}
}.start();
}

public String verifyPresence(RemoteAerodian who) throws NotThere{
 int i = aerodians.indexOf(who);
 if(( i == -1)) 
    throw new NotThere();
 else 
   return (String) names.elementAt(i);
 }
private void readObject(ObjectInputStream vdin) throws IOException, ClassNotFoundException {
    vdin.defaultReadObject();
    names = new Vector();
    aerodians = new Vector();
}
}