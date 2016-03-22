package Jawa.src.archersysos.jawa.io;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.PrintWriter;

public final class JawaIO {
  public static final InputStream jawa_is = System.in;
  public static final InputStreamReader jawa_isr = new InputStreamReader(jawa_is);
  public static final BufferedReader jawain = new BufferedReader(jawa_isr);
  public static final OutputStream jawa_os = System.out;
  public static final PrintWriter jawaout = new PrintWriter(jawa_os);
  public static final void Print(String Message){
	  jawaout.println(Message);
  }
  public static final String getInput(String prompt) throws IOException{
	  JawaIO.Print(prompt);
	return jawain.readLine();
	  
  }
  public static final int getInteger(String prompt) throws NumberFormatException, IOException{
	  return Integer.parseInt(JawaIO.getInput(prompt));
  }
  public static final Boolean getBoolean(String prompt) throws IOException{
	  return Boolean.parseBoolean(JawaIO.getInput(prompt));
  }
  public static final Double getDouble(String prompt) throws IOException{
	  return Double.parseDouble(JawaIO.getInput(prompt));
	  
  }

}
