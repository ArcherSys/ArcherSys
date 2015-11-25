module ArcherSysOS
 require 'gdbm'
 class ArcherDBM #The Enclosed Implemementation of The GDBM Class
    def initialize(title,file) #creates GDBM Kernel
       
       @file = file
       @title = title
       @gdbm = " " 
       end   
    def setup_database() #creates DBM Object using Filename
       puts "Now loading Database File"
       @gdbm = GDBM.new(@file)
end
    def set_value(key, value) #Creates Entries
         @gdbm[key] = value
       end
    def set_file(file)
       @file = file
    end
    def get_value(key) #Returns the value from those Entries
         return @gdbm[key]
  end
      def print_all_keys() #Prints all the Keys To The Console.
          @gdbm.each_pair do |key, value|
  print "#{key}: #{value}\n"
end
end
end
end
    