<<<<<<< HEAD
<<<<<<< HEAD
/** @constructor */
function Article() {
}

Article.prototype.init = function(title) {
	/** the instance title */
	this.title = title;
	
	/** the static counter */
	Article.counter = 1;
}

a = new Article();
a.Init("my title");

print(a.title);
=======
/** @constructor */
function Article() {
}

Article.prototype.init = function(title) {
	/** the instance title */
	this.title = title;
	
	/** the static counter */
	Article.counter = 1;
}

a = new Article();
a.Init("my title");

print(a.title);
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
/** @constructor */
function Article() {
}

Article.prototype.init = function(title) {
	/** the instance title */
	this.title = title;
	
	/** the static counter */
	Article.counter = 1;
}

a = new Article();
a.Init("my title");

print(a.title);
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
print(Article.counter);