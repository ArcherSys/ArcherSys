package archersysos;
import java.io.*;
import java.util.*;
import java.net.*; 
import java.nio.*;
import java.nio.channels.*;
import java.nio.charset.*;
import java.util.regex.*;

public class ArcherSysOSPMHTTPServer{
 Selector clientSelector;
 ClientQueue readyClients = new ClientQueue();
 public void run(int port, int threads) throws IOException {
// The main Thread
     clientSelector = Selector.open();
     ServerSocketCahnnel ssc = ServerSocketChannel.open();
     ssc.configureBlocking(false);
     InetSocketAddress ssa = new InetSocketAddress(InetAddress.getLocalHost(), port);
     ssc.socket().bind(sa);
     ssc.register( clientSelector, SelectionKe.OP_ACCEPT);
     for(int i=0,i<threads; i++){
        new Thread(public void run(){
            while (true) try { handleClient()} catch(IOException e){}
            } }.start();
     while(true) try{ 
          while(clientSelector.select(50) == 0);
          Set readySet = clientSelector.selectedKeys();
          for( Iterator it = readySet.iterator(); it.hasNext();
          it.remove();
          if( key.isAcceptible() )
               acceptClient(ssc);
          else{
             key.interestOps(0);
             readyClients.add(key);
            }catch(IOException e){ System.out.println(e);
}

          } 
void acceptClient(ServerSocketChannel ssc) throws IOException{
    SocketChannel clientSocket = sc.accept);
clientSocket.conigureBlocking(false);
 SelectionKey. key = clientSocket.register(clientSelector, SelectionKey.OP_READ );
 ArcherSysOSPMHTTPDConnection client = new ArcherSysOSPMHTTPDConnection(clientSocket);
key.attach( client );
}