<<<<<<< HEAD
 /** @class  */
var Person = Class.create(
    /**
      @lends Person.prototype
    */
    {
      initialize: function(name) {
            this.name = name;
        },
        say: function(message) {
            return this.name + ': ' + message;
        }
    }
 );

/** @lends Person.prototype */
{
	/** like say but more musical */
	sing: function(song) {
	}
}

/** @lends Person */
{
	getCount: function() {
	}
}

/** @lends Unknown.prototype */
{
	notok: function() {
	}
=======
 /** @class  */
var Person = Class.create(
    /**
      @lends Person.prototype
    */
    {
      initialize: function(name) {
            this.name = name;
        },
        say: function(message) {
            return this.name + ': ' + message;
        }
    }
 );

/** @lends Person.prototype */
{
	/** like say but more musical */
	sing: function(song) {
	}
}

/** @lends Person */
{
	getCount: function() {
	}
}

/** @lends Unknown.prototype */
{
	notok: function() {
	}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}