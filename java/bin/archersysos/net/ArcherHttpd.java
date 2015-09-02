<<<<<<< HEAD
<<<<<<< HEAD
package archersysos;
import java.net.*;
import java.io.*;
import java.util.regex.*;
public class ArcherHttpd{
   public static void main ( String argv[] ) throws IOException {
      ServerSocket ss = new ServerSocket(Integer.parseInt(argv[0]));
 while ( true )
    new Thread(new ArcherHttpdConnection(ss.accept())).start();
   }

}
class ArcherHttpdConnection implements Runnable{
    Socket client;
    ArcherHttpdConnection ( Socket client ) throws SocketException {
       this.client = client;
     }
 public void run() {
   // This is the Thread Actions part of the {@code ArcherHttpd} Web Server. 
     try{
        BufferedReader webin = new BufferedReader(new InputStreamReader(client.getInputStream(), "8859_1"));
        OutputStream webout = client.getOutputStream();
        PrintWriter webpout = new PrintWriter(new OutputStreamWriter(webout, "8859_1"), true);
         String request = webin.readLine();
         System.out.println("ArcherVMCashew Request:" + request);
         Matcher get = Pattern.compile("GET /?(\\S*).*").matcher(request);
         if(get.matches()){
             request = get.group(1);
          if( request.endsWith("/") || request.equals(""))
                request = request + "index.html";
               try{
                  FileInputStream fis = new FileInputStream(request);
                  byte [] data = new byte [64*1024];
                 for(int read; (read = fis.read(data)) > -1;)
                     webout.write(data, 0, read);
                 webout.flush();
                } catch( FileNotFoundException fnfex) {
                    webpout.println(" ASOS-0001: Object Not Found");
                }
               } else 
                   webpout.println("ASOS-0007: Bad Request");
               client.close();
              } catch (IOException e){
                 System.out.println("ASOS-0008: " + e);}
} 
}
=======
package archersysos;
import java.net.*;
import java.io.*;
import java.util.regex.*;
public class ArcherHttpd{
   public static void main ( String argv[] ) throws IOException {
      ServerSocket ss = new ServerSocket(Integer.parseInt(argv[0]));
 while ( true )
    new Thread(new ArcherHttpdConnection(ss.accept())).start();
   }

}
class ArcherHttpdConnection implements Runnable{
    Socket client;
    ArcherHttpdConnection ( Socket client ) throws SocketException {
       this.client = client;
     }
 public void run() {
   // This is the Thread Actions part of the {@code ArcherHttpd} Web Server. 
     try{
        BufferedReader webin = new BufferedReader(new InputStreamReader(client.getInputStream(), "8859_1"));
        OutputStream webout = client.getOutputStream();
        PrintWriter webpout = new PrintWriter(new OutputStreamWriter(webout, "8859_1"), true);
         String request = webin.readLine();
         System.out.println("ArcherVMCashew Request:" + request);
         Matcher get = Pattern.compile("GET /?(\\S*).*").matcher(request);
         if(get.matches()){
             request = get.group(1);
          if( request.endsWith("/") || request.equals(""))
                request = request + "index.html";
               try{
                  FileInputStream fis = new FileInputStream(request);
                  byte [] data = new byte [64*1024];
                 for(int read; (read = fis.read(data)) > -1;)
                     webout.write(data, 0, read);
                 webout.flush();
                } catch( FileNotFoundException fnfex) {
                    webpout.println(" ASOS-0001: Object Not Found");
                }
               } else 
                   webpout.println("ASOS-0007: Bad Request");
               client.close();
              } catch (IOException e){
                 System.out.println("ASOS-0008: " + e);}
} 
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
package archersysos;
import java.net.*;
import java.io.*;
import java.util.regex.*;
public class ArcherHttpd{
   public static void main ( String argv[] ) throws IOException {
      ServerSocket ss = new ServerSocket(Integer.parseInt(argv[0]));
 while ( true )
    new Thread(new ArcherHttpdConnection(ss.accept())).start();
   }

}
class ArcherHttpdConnection implements Runnable{
    Socket client;
    ArcherHttpdConnection ( Socket client ) throws SocketException {
       this.client = client;
     }
 public void run() {
   // This is the Thread Actions part of the {@code ArcherHttpd} Web Server. 
     try{
        BufferedReader webin = new BufferedReader(new InputStreamReader(client.getInputStream(), "8859_1"));
        OutputStream webout = client.getOutputStream();
        PrintWriter webpout = new PrintWriter(new OutputStreamWriter(webout, "8859_1"), true);
         String request = webin.readLine();
         System.out.println("ArcherVMCashew Request:" + request);
         Matcher get = Pattern.compile("GET /?(\\S*).*").matcher(request);
         if(get.matches()){
             request = get.group(1);
          if( request.endsWith("/") || request.equals(""))
                request = request + "index.html";
               try{
                  FileInputStream fis = new FileInputStream(request);
                  byte [] data = new byte [64*1024];
                 for(int read; (read = fis.read(data)) > -1;)
                     webout.write(data, 0, read);
                 webout.flush();
                } catch( FileNotFoundException fnfex) {
                    webpout.println(" ASOS-0001: Object Not Found");
                }
               } else 
                   webpout.println("ASOS-0007: Bad Request");
               client.close();
              } catch (IOException e){
                 System.out.println("ASOS-0008: " + e);}
} 
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
                  