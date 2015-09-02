module ArcherSysOS
 class ArcherSysOSDate
  attr_reader :mon, :day, :year

  def initialize(mon, day, year)
    @mon, @day, @year = mon, day, year
  end
end

end