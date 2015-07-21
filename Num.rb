module ArcherSysOS
require "xmlrpc/server"
	
class Num
  INTERFACE = XMLRPC::interface("num") {
    meth 'int add(int, int)', 'Add two numbers', 'add'
    meth 'int div(int, int)', 'Divide two numbers'
  }

  def add(a, b) a + b end
  def div(a, b) a / b end
end

s = XMLRPC::CGIServer.new
s.add_handler(Num::INTERFACE, Num.new)
s.serve
end
