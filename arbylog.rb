require 'drb/drb'

SERVER_URI="druby://localhost:8787"

DRb.start_service

log_service=DRbObject.new_with_uri(SERVER_URI)

["loga", "logb", "logc"].each do |logname|

    logger=log_service.get_logger(logname)
    puts "Log Something of your choice" 
    logmsg = gets.chomp
    logger.log(logmsg)
  end
     