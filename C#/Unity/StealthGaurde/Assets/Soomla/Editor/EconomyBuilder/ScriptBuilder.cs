using UnityEngine;
using System.Collections;
using System.Text;

public class SoomlaScriptBuilder {

	public static string INDENT_CHAR = "\t";

	public int IndentLevel = 0;

	private StringBuilder stringBuidler = new StringBuilder();

	public SoomlaScriptBuilder() {
	}

	public SoomlaScriptBuilder AppendLine(string value) {
		stringBuidler.AppendLine(buildIndents() + value);
		return this; 
    }

	public SoomlaScriptBuilder AppendLine() {
		stringBuidler.AppendLine(buildIndents());
		return this; 
    }

	public override string ToString ()
	{
		return stringBuidler.ToString();
	}
    
    private string buildIndents() {
		string prefix = "";
		for (int i = 0; i < IndentLevel; i++) {
			prefix += INDENT_CHAR;
        }
		return prefix;
    }
}
