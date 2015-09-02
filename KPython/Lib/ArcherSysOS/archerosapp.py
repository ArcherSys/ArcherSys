import configparser, http.server, os
from pathlib import Path
class ArcherSysApplication(object):
   def __init__(self, file):
     
     self.config= configparser.ConfigParser()
     self.file = file
     self.server = None
   
   def run(self,app,server_class=http.server.HTTPServer, handler_class=http.server.SimpleHTTPRequestHandler):
     self.js = Path('\js')
	 if self.js.exists() == False:
         os.system("git pull origin master")	
	 else:  
	     self.config.read(self.file)
         self.config.sections()
         server_address =  (self.config[app]["IP"],int(self.config[app]["Port"]))
         httpd = server_class(server_address, handler_class)
         httpd.serve_forever()