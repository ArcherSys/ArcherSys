
/** @namespace ArcherSysOS
		 *  @author Weldon Henson
		 *  @version 3.4.0
		 *  @license MIT
		 *  The Namespace for client side ArcherSys OS Operations
		 */
var ArcherSysOS =  {
		/** @constructor Class
		 * The Class Creator for ArcherSys OS.
		 * @param constructor (Function) - The Constructor
		 */
		defineClass: function(constructor,methods,statics){
			
			if(methods){
				for(var m in methods)
					constructor.prototype[m] = methods[m];
				
				
			}
			if (statics){
				for(var s in statics)
					constructor[s] = statics[s];
				
			}
			return constructor;
		},
		/**
		 * Creates another version of an object with the given function bound to it

		 * @param f (Function) - The function to bind
		 * @param o (Object) - The Object to bind to
		 */
		bind: function(f,o){
			if (f.bind) return f.bind(o);
			else return function(){
				return f.apply(o, arguments);
			};
		
		},
         
	
		defineEnumeration: function(statics){
		 var   constructor  = function(){};
		 for (var s in statics){
		     constructor[s] = Object.defineProperty(constructor,s,{
		         value: statics[s],
		         writable: false,
		         
		     });
		 }
		 return constructor;
		},
		$: $.noConflict(),
		doBinarySearch: function(array, targetValue) {
	var min = 0;
	var max = array.length - 1;
    var guess;
     var nGuesses=0;
    while (max >= min ){
            nGuesses++;
        guess = Math.floor(((min + max)/2));
        println(array.indexOf(guess));
        if(array[guess] === targetValue){
             println("tries to find "+nGuesses+ " guesses");
          
            return guess;
           
            
        }else if (array[guess] < targetValue){
            min =  guess + 1;
        }
        else{
            max = guess - 1;
                
        }
           
    }
    
	return -1;
}
	
};