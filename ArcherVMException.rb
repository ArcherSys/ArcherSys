module ArcherSysOS
  module ArcherVMException
      extend Exception2MessageMapper
  def_e2message ArcherVMError, "ASOS-0005: ArrbyException"
  def_exception :ArrbyException, "ASOS-0005: ArrbyException"[ superclass]


end
class ArcherVMError
      include ArcherVMException

end
end
