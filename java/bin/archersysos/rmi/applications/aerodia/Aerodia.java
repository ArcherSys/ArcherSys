
import java.rmi.*;
import java.util.Vector;
import java.io.IOException;

/**
 * This class defines three nested Remote interfaces for use by the Aerodia MUD game.
 * It also defines a bunch of exception subclasses, and a constant string
 * prefix used to create unique names when registering MUD servers
 **/
public class Aerodia {
  /**
   * This interface defines the exported methods of the MUD server object
   **/
  public interface RemoteAerodiaServer extends Remote {
    /** Return the name of this MUD */
    public String getMudName() throws RemoteException;

    /** Return the main entrance place for this MUD */
    public RemoteAerodianProvince getEntrance() throws RemoteException; 

    /** Look up and return some other named place in this MUD */
    public RemoteAerodianProvince getNamedPlace(String name) 
         throws RemoteException, NoSuchProvince;

    /** 
     * Dump the state of the server to a file so that it can be restored later
     * All places, and their exits and things are dumped, but the "people"
     * in them are not.
     **/
    public void dump(String password, String filename) 
         throws RemoteException, BadPassword, IOException;
  }

  /**
   * This interface defines the methods exported by a "person" object that
   * is in the MUD.
   **/
  public interface RemoteAerodian extends Remote {
    /** Return a full description of the person */
    public String getDescription() throws RemoteException;

    /** Deliver a message to the person */
    public void tell(String message) throws RemoteException;
  }

  /**
   * This is the most important remote interface for the MUD.  It defines the
   * methods exported by the "places" or "rooms" within a MUD.  Each place
   * has a name and a description, and also maintains a list of "people" in
   * the place, things in the place, and exits from the place.  There are 
   * methods to get a list of names for these people, things, and exits.  There
   * are methods to get the RemoteAerodian object for a named person, to get
   * a description of a named thing, and to go through a named exit.
   * There are methods for interacting with other people in the MUD.  
   * There are methods for building the MUD by creating and destroying 
   * things, adding new places (and new exits to those places), for linking
   * a place through a new exit to some other place (possibly on another 
   * MUD server), and for closing down an existing exit.
   **/
  public interface RemoteAerodianProvince extends Remote {
    /** Look up the name of this place */
    public String getPlaceName() throws RemoteException;

    /** Get a description of this place */
    public String getDescription() throws RemoteException;

    /** Find out the names of all people here */
    public Vector getNames() throws RemoteException;

    /** Get the names of all things here */
    public Vector getThings() throws RemoteException;

    /** Get the names of all ways out of here */
    public Vector getExits() throws RemoteException;

    /** Get the RemoteAerodian object for the named person. */
    public RemoteAerodian getPerson(String name) 
         throws RemoteException, NoSuchAerodian;

    /** Get more details about a named thing */
    public String examineThing(String name) throws RemoteException,NoSuchThing;

    /** Use the named exit */
    public RemoteAerodianProvince go(RemoteAerodian who, String direction) 
         throws RemoteException,NotThere,AlreadyThere,NoSuchExit,LinkFailed;

    /** Send a message of the form "David: hi everyone" */
    public void speak(RemoteAerodian speaker, String msg) 
         throws RemoteException, NotThere;

    /** Send a message of the form "David laughs loudly" */
    public void act(RemoteAerodian speaker, String msg) 
         throws RemoteException, NotThere;

    /** Add a new thing in this place */
    public void createThing(RemoteAerodian who, String name, 
                            String description) 
         throws RemoteException, NotThere, AlreadyThere;

    /** Remove a thing from this place */
    public void destroyThing(RemoteAerodian who, String thing) 
         throws RemoteException, NotThere, NoSuchThing;

    /** Create a new place, bi-directionally linked to this one by an exit */
    public void createPlace(RemoteAerodian creator, 
                            String exit, String entrance,
                            String name, String description) 
         throws RemoteException,NotThere,ExitAlreadyExists,ProvinceAlreadyExists;

    /** 
     * Link this place (unidirectionally) to some existing place.  The
     * destination place may even be on another server.
     **/
    public void linkTo(RemoteAerodian who, String exit, 
                       String hostname, String mudname, String placename) 
         throws RemoteException, NotThere, ExitAlreadyExists, NoSuchProvince;

    /** Remove an existing exit */
    public void close(RemoteAerodian who, String exit) 
         throws RemoteException, NotThere, NoSuchExit;

    /** 
     * Remove this person from this place, leaving them nowhere.
     * Send the specified message to everyone left in the place.
     **/
    public void exit(RemoteAerodian who, String message) 
         throws RemoteException, NotThere;

    /**
     * Put a person in a place, assigning their name, and sending the 
     * specified message to everyone else in the place.  The client should
     * not make this method available to the user.  They should use go()
     * instead.
     **/
    public void enter(RemoteAerodian who, String name, String message) 
         throws RemoteException, AlreadyThere;

    /** 
     * Return the server object of the MUD that "contains" this place 
     * This method should not be directly visible to the player
     **/
    public RemoteAerodiaServer getServer() throws RemoteException;
  }

  /**
   * This is a generic exception class that serves as the superclass
   * for a bunch of more specific exception types 
   **/
  public static class AerodiaException extends Exception {}

  /**
   * These specific exception classes are thrown in various contexts.
   * The exception class name contains all the information about the exception;
   * no detail messages are provided by these classes.
   **/
  public static class NotThere extends AerodiaException {}
  public static class AlreadyThere extends AerodiaException {}
  public static class NoSuchThing extends AerodiaException {}
  public static class NoSuchAerodian extends AerodiaException {}
  public static class NoSuchExit extends AerodiaException {}
  public static class NoSuchProvince extends AerodiaException {}
  public static class ExitAlreadyExists extends AerodiaException {}
  public static class ProvinceAlreadyExists extends AerodiaException {}
  public static class LinkFailed extends AerodiaException {}
  public static class BadPassword extends AerodiaException {}

  /**
   * This constant is used as a prefix to the MUD name when the server
   * registers the mud with the RMI Registry, and when the client looks 
   * up the MUD in the registry.  Using this prefix helps prevent the 
   * possibility of name collisions.
   **/
  static final String aerodiaPrefix = "archersysos.rmi.applications.aerodia.";
}
