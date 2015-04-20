module ArcherSysOS
require 'bombshell'
require 'mud_login'

require "bigdecimal/math"
include BigMath
     CONNECTION = ArcherSysOS::F16MUDClient.new('localhost',4321,10)
 module F16MUD
   class Shell < Bombshell::Environment
      include Bombshell::Shell
     
before_launch do
    end

     prompt_with "Think fast!:"

     def time
      CONNECTION.run_cmd("time")
    end
    def study
      CONNECTION.run_cmd("study")
    end
    def to_radians
         ans = BigDecimal.new(gets.chomp) * ( (BigMath.PI(10) * 100) / 180)
          puts ans
end
    def open_library
          
      CONNECTION.run_cmd("admin")
end
   def add_entry
       CONNECTION.run_cmd("add_entry")
end
  def lookup(word)
   
       CONNECTION.run_cmd("lookup "+word)  
end
def calculate(operation,number,number2)
end
end
end
end