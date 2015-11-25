<<<<<<< HEAD
<<<<<<< HEAD
/**
	@class
	@inherits Bar#zop as #my_zop
*/
function Foo() {
	/** this is a zip. */
	this.zip = function() {}
	
	/** from Bar */
	this.my_zop = new Bar().zop;
}

/**
	@class
	@borrows Foo#zip as this.my_zip
*/
function Bar() {
	/** this is a zop. */
	this.zop = function() {}
	
	/** from Foo */
	this.my_zip = new Foo().zip;
}

/** @namespace */
var myObject = {
	/**
		@type function
	*/
	myFunc: getFunction()
=======
/**
	@class
	@inherits Bar#zop as #my_zop
*/
function Foo() {
	/** this is a zip. */
	this.zip = function() {}
	
	/** from Bar */
	this.my_zop = new Bar().zop;
}

/**
	@class
	@borrows Foo#zip as this.my_zip
*/
function Bar() {
	/** this is a zop. */
	this.zop = function() {}
	
	/** from Foo */
	this.my_zip = new Foo().zip;
}

/** @namespace */
var myObject = {
	/**
		@type function
	*/
	myFunc: getFunction()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
/**
	@class
	@inherits Bar#zop as #my_zop
*/
function Foo() {
	/** this is a zip. */
	this.zip = function() {}
	
	/** from Bar */
	this.my_zop = new Bar().zop;
}

/**
	@class
	@borrows Foo#zip as this.my_zip
*/
function Bar() {
	/** this is a zop. */
	this.zop = function() {}
	
	/** from Foo */
	this.my_zip = new Foo().zip;
}

/** @namespace */
var myObject = {
	/**
		@type function
	*/
	myFunc: getFunction()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}