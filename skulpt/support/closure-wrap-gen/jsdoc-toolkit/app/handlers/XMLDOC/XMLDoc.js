<<<<<<< HEAD
<<<<<<< HEAD
LOG.inform("XMLDOC.symbolize loaded");

/**
 * Convert the source file to a set of symbols
 */
XMLDOC.symbolize = function(srcFile, src) {

   LOG.inform("Symbolizing file '" + srcFile + "'");

   // XML files already have a defined structure, so we don't need to
   // do anything but parse them.  The DOM reader can create a symbol
   // table from the parsed XML.
   var dr = new XMLDOC.DomReader(XMLDOC.Parser.parse(src));
   return dr.getSymbols(srcFile);

};
=======
LOG.inform("XMLDOC.symbolize loaded");

/**
 * Convert the source file to a set of symbols
 */
XMLDOC.symbolize = function(srcFile, src) {

   LOG.inform("Symbolizing file '" + srcFile + "'");

   // XML files already have a defined structure, so we don't need to
   // do anything but parse them.  The DOM reader can create a symbol
   // table from the parsed XML.
   var dr = new XMLDOC.DomReader(XMLDOC.Parser.parse(src));
   return dr.getSymbols(srcFile);

};
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
LOG.inform("XMLDOC.symbolize loaded");

/**
 * Convert the source file to a set of symbols
 */
XMLDOC.symbolize = function(srcFile, src) {

   LOG.inform("Symbolizing file '" + srcFile + "'");

   // XML files already have a defined structure, so we don't need to
   // do anything but parse them.  The DOM reader can create a symbol
   // table from the parsed XML.
   var dr = new XMLDOC.DomReader(XMLDOC.Parser.parse(src));
   return dr.getSymbols(srcFile);

};
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
