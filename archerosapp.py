import configparser, http.server
class ArcherSysApplication(object):
   def __init__(self, file):
     self.config= configparser.ConfigParser()
     self.file = file
     self.server = None
   
   def run(self,app,server_class=http.server.HTTPServer, handler_class=http.server.BaseHTTPRequestHandler):
       self.config.read(self.file)
       self.config.sections()
       server_address =  (self.config[app]["IP"],int(self.config[app]["Port"]))
       httpd = server_class(server_address, handler_class)
       httpd.serve_forever()