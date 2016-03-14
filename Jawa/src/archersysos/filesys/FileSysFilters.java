package archersysos.filesys;

import java.io.IOException;
import java.nio.file.DirectoryStream;
import java.nio.file.Files;
import java.nio.file.Path;

public final class FileSysFilters {
	DirectoryStream.Filter<Path> filter =
		    new DirectoryStream.Filter<Path>() {
		    public boolean accept(Path file) throws IOException {
		       try{
		        	if(Files.isDirectory(file)){
		            return true;
		        	} else {
		        		throw new IOException();
		        	}
		    }catch(IOException ex){
		    	return false;
		        }
		    }
		};
}
