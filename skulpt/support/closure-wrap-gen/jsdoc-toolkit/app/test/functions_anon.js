<<<<<<< HEAD
<<<<<<< HEAD
/** an anonymous constructor executed inline */
a = new function() {
	/** a.b*/
    this.b = 1;
    /** a.f */
    this.f = function() {
    	/** a.c */
    	this.c = 2;
    }
}


/**
	named function executed inline
*/
bar1 = function Zoola1() {
	/** property of global */
	this.g = 1;
}();

/**
	named constructor executed inline
*/
bar2 = new function Zoola2() {
	/** property of bar */
	this.p = 1;
};

/** module pattern */
module = (function () {
	/** won't appear in documentation */
	var priv = 1;
	
	/** @scope module */
	return {
		/** will appear as a property of module */
		pub: 1
	}
})();
=======
/** an anonymous constructor executed inline */
a = new function() {
	/** a.b*/
    this.b = 1;
    /** a.f */
    this.f = function() {
    	/** a.c */
    	this.c = 2;
    }
}


/**
	named function executed inline
*/
bar1 = function Zoola1() {
	/** property of global */
	this.g = 1;
}();

/**
	named constructor executed inline
*/
bar2 = new function Zoola2() {
	/** property of bar */
	this.p = 1;
};

/** module pattern */
module = (function () {
	/** won't appear in documentation */
	var priv = 1;
	
	/** @scope module */
	return {
		/** will appear as a property of module */
		pub: 1
	}
})();
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
/** an anonymous constructor executed inline */
a = new function() {
	/** a.b*/
    this.b = 1;
    /** a.f */
    this.f = function() {
    	/** a.c */
    	this.c = 2;
    }
}


/**
	named function executed inline
*/
bar1 = function Zoola1() {
	/** property of global */
	this.g = 1;
}();

/**
	named constructor executed inline
*/
bar2 = new function Zoola2() {
	/** property of bar */
	this.p = 1;
};

/** module pattern */
module = (function () {
	/** won't appear in documentation */
	var priv = 1;
	
	/** @scope module */
	return {
		/** will appear as a property of module */
		pub: 1
	}
})();
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
