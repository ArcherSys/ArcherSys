/**
 * 
 */
package archersysos;

import java.io.*;

/**
 * @author Demo
 *
 */
public final class ArcherSysOS {

	public static final InputStream streamedinput = System.in;
	public static final PrintWriter archersysosout = new PrintWriter(System.out);
	public static final InputStreamReader  inputreader = new InputStreamReader(streamedinput);
	public static final BufferedReader archersysosin = new BufferedReader(inputreader);
	public static final String getInput(String prompt) throws IOException{
		archersysosout.println(prompt);
		return archersysosin.readLine();
	}
	public static final void Print(String msg){
		archersysosout.println(msg);
	}
	public static final int getIntegerInput(String prompt) throws IOException{
		return Integer.parseInt(getInput(prompt));
	}
	public static final double getDoubleInputNumeric(String prompt) throws IOException{
		return Double.parseDouble(getInput(prompt));
	}
	public static final double getRandomNumber(double min, double max){
		return Math.floor(Math.random() * max + min);
	}
	 
}
