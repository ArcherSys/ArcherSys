<<<<<<< HEAD
/**
   This is the main container for the FOODOC handler.
   @namespace
*/
FOODOC = {
};

/** The current version string of this application. */
FOODOC.VERSION = "1.0";

FOODOC.handle = function(srcFile, src) {
	LOG.inform("Handling file '" + srcFile + "'");
	
	return [
		new JSDOC.Symbol(
			"foo",
			[],
			"VIRTUAL",
			new JSDOC.DocComment("/** This is a foo. */")
		)
	];
};

FOODOC.publish = function(symbolgroup) {
	LOG.inform("Publishing symbolgroup.");
};
=======
/**
   This is the main container for the FOODOC handler.
   @namespace
*/
FOODOC = {
};

/** The current version string of this application. */
FOODOC.VERSION = "1.0";

FOODOC.handle = function(srcFile, src) {
	LOG.inform("Handling file '" + srcFile + "'");
	
	return [
		new JSDOC.Symbol(
			"foo",
			[],
			"VIRTUAL",
			new JSDOC.DocComment("/** This is a foo. */")
		)
	];
};

FOODOC.publish = function(symbolgroup) {
	LOG.inform("Publishing symbolgroup.");
};
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
