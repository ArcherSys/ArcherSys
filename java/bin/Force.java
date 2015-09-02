<<<<<<< HEAD
package archersysos.util.math;
import archersysos.util.math.Formula;
public class Force implements Formula{
      public int mass;
      public int acceleration;
      public Force(int mass,int acceleration){
         this.mass = mass;
         this.acceleration = acceleration;
      }
     public int calculate(){
        return this.mass * this.acceleration;
       }
=======
package archersysos.util.math;
import archersysos.util.math.Formula;
public class Force implements Formula{
      public int mass;
      public int acceleration;
      public Force(int mass,int acceleration){
         this.mass = mass;
         this.acceleration = acceleration;
      }
     public int calculate(){
        return this.mass * this.acceleration;
       }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
}