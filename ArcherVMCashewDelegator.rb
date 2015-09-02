module ArcherSysOS
class ArcherVMCashewDelegator < Delegator
  def initialize(obj)
    super                  # pass obj to Delegator constructor, required
    @delegate_sd_obj = obj # store obj for future use
  end

  def __getobj__
    @delegate_sd_obj # return object we are delegating to, required
  end

  def __setobj__(obj)
    @delegate_sd_obj = obj # change delegation object,
                           # a feature we're providing
  end
end
end