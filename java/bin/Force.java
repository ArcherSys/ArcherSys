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
}