module ArcherSysOS
class Queue
  extend Forwardable

  def initialize
    @q = [ ]    # prepare delegate object
  end

  # setup preferred interface, enq() and deq()...
  def_delegator :@q, :push, :enq
  def_delegator :@q, :shift, :deq

  # support some general Array methods that fit Queues well
  def_delegators :@q, :clear, :first, :push, :shift, :size
end
end
