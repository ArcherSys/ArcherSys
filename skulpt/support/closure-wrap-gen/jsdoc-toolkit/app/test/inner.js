<<<<<<< HEAD
/**
 * @constructor
 */
function Outer() {
  /**
   * @constructor
   */
  function Inner(name) {
    /** The name of this. */
    this.name = name;
  }

  this.open = function(name) {
    return (new Inner(name));
  }
=======
/**
 * @constructor
 */
function Outer() {
  /**
   * @constructor
   */
  function Inner(name) {
    /** The name of this. */
    this.name = name;
  }

  this.open = function(name) {
    return (new Inner(name));
  }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}