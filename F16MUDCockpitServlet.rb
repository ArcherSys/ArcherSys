module ArcherSysOS
require "mud_login"
 class F16MUDServlet < WEBrick::HTTPServlet::AbstractServlet
   def do_GET request, response
    status, content_type, body = ""
    
    response.status = status
    response['Content-Type'] = content_type
    response.body = body
  end

end

end