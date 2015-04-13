module ArcherSysOS

class AbstractImplementation
  def self.service
    puts "serviced!"
  end
end
 extend SingleForwardable
  def_delegator :Implementation, :service
end
