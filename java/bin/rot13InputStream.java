<<<<<<< HEAD
<<<<<<< HEAD
package archersysos;
import java.io.*;

public class rot13InputStream extends FilterInputStream{
    public rot13InputStream( InputStream i){
      super(i);
    }
     public int read() throws IOException {
       return rot13(in.read());
     }
    private int rot13(int c){
      if( (c >= 'A') && (c <= 'Z') )
          c=(((c-'A')+13)%26)+'A';
      if ( (c >= 'a') && (c <= 'z'))
          c=(((c-'a')+13)%26)+'a';
      return c;
     }
   }
=======
package archersysos;
import java.io.*;

public class rot13InputStream extends FilterInputStream{
    public rot13InputStream( InputStream i){
      super(i);
    }
     public int read() throws IOException {
       return rot13(in.read());
     }
    private int rot13(int c){
      if( (c >= 'A') && (c <= 'Z') )
          c=(((c-'A')+13)%26)+'A';
      if ( (c >= 'a') && (c <= 'z'))
          c=(((c-'a')+13)%26)+'a';
      return c;
     }
   }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
package archersysos;
import java.io.*;

public class rot13InputStream extends FilterInputStream{
    public rot13InputStream( InputStream i){
      super(i);
    }
     public int read() throws IOException {
       return rot13(in.read());
     }
    private int rot13(int c){
      if( (c >= 'A') && (c <= 'Z') )
          c=(((c-'A')+13)%26)+'A';
      if ( (c >= 'a') && (c <= 'z'))
          c=(((c-'a')+13)%26)+'a';
      return c;
     }
   }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
