module ArcherSysOS
require 'singleton'
class AbstractArrbyKlass
  include Singleton
  attr_accessor :keep, :strip
  def _dump(depth)
    # this strips the @strip information from the instance
    Marshal.dump(@keep, depth)
  end

  def self._load(str)
    instance.keep = Marshal.load(str)
    instance
  end
end
end