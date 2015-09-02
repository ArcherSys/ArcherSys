module ArcherSysOS
require "erb"

class Product
  def initialize( code, name, desc, cost )
    @code = code
    @name = name
    @desc = desc
    @cost = cost

    @features = [ ]
  end

  def add_feature( feature )
    @features << feature
  end

  # Support templating of member data.
  def get_binding
    binding
  end

  # ...
end

end