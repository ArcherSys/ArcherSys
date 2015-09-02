<<<<<<< HEAD
JSDOC.PluginManager.registerPlugin(
	"JSDOC.functionCall",
	{
		onFunctionCall: function(functionCall) {
			if (functionCall.name == "dojo.define" && functionCall.arg1) {
				functionCall.doc = "/** @lends "+eval(functionCall.arg1)+".prototype */";
			}
		}
	}
=======
JSDOC.PluginManager.registerPlugin(
	"JSDOC.functionCall",
	{
		onFunctionCall: function(functionCall) {
			if (functionCall.name == "dojo.define" && functionCall.arg1) {
				functionCall.doc = "/** @lends "+eval(functionCall.arg1)+".prototype */";
			}
		}
	}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
);