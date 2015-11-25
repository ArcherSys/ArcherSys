module ArcherSysOS
require "net/telnet"
require "ruby_mud"
require "readline"
 class F16MUDClient
      def initialize(host,port,time)
         @localhost = Net::Telnet::new("Host" => host,
                               "Port" => port,
                               "Timeout" => 10,
                               "Telnetmode" => true,

                               "Prompt" => /[$%#>] \z/)
     
      end
      def run_cmd(command)
       begin
         @localhost.cmd(command) { 
|c| if( command == "add_entry")
else
print c 
end
}
rescue Net::ReadTimeout=>e
          puts "F16MUDVM Timed out"
end
      end
      def destroy
         @localhost.close
       end
      def run
        loop do
         while(client_input = Readline.readline("F16> ", true))
             run_cmd(client_input)
            end
	  end
        end
end
end
