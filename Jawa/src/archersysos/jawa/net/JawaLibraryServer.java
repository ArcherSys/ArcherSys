package archersysos.jawa.net;

import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.net.SocketTimeoutException;

public class JawaLibraryServer extends Thread {
       private ServerSocket receptionist;

	public ServerSocket getReceptionist() {
		return receptionist;
	}

	public void setReceptionist(ServerSocket receptionist) {
		this.receptionist = receptionist;
	}
	public JawaLibraryServer(int port) throws IOException{
		receptionist = new ServerSocket(port);
		receptionist.setSoTimeout(10000);
	}
		
	public void run(){
		while(true){
			try{
				System.out.println("Waiting to recieve clients on port "+receptionist.getLocalPort() + "...");
				Socket server = receptionist.accept();
				System.out.println(server.getRemoteSocketAddress() + "just entered the Jawa Library");
				DataInputStream in = new DataInputStream(server.getInputStream());
				System.out.println(in.readUTF());
				DataOutputStream out = new DataOutputStream(server.getOutputStream());
				out.writeUTF("Welcome to the Jawa Archives!");
				server.close();
			}catch(SocketTimeoutException s){
				System.out.println("Lockout!");
				break;
			}catch(IOException e){
				e.printStackTrace();
				break;
			}
			
		}
	}
	}

