module ArcherSysOS
require 'drb/drb'

URI="druby://localhost:8787"

class Logger

    # Make dRuby send Logger instances as dRuby references,
    # not copies.
    include DRb::DRbUndumped

    def initialize(n, fname)
        @name = n
        @filename = fname
    end

    def log(message)
        File.open(@filename, "a") do |f|
            f.puts("#{Time.now}: #{@name}: #{message}")
        end
    end

end

# We have a central object for creating and retrieving loggers.
# This retains a local reference to all loggers created.  This
# is so an existing logger can be looked up by name, but also
# to prevent loggers from being garbage collected.  A dRuby
# reference to an object is not sufficient to prevent it being
# garbage collected!
class LoggerFactory

    def initialize(bdir)
        @basedir = bdir
        @loggers = {}
    end

    def get_logger(name)
        if !@loggers.has_key? name
            # make the filename safe, then declare it to be so
            fname = name.gsub(/[.\/\\:]/, "_").untaint
            @loggers[name] = Logger.new(name, @basedir + "/" + fname)
        end
        return @loggers[name]
    end

end

FRONT_OBJECT=LoggerFactory.new("/tmp/dlog")

$SAFE = 1   # disable eval() and friends

DRb.start_service(URI, FRONT_OBJECT)
DRb.thread.join
end
