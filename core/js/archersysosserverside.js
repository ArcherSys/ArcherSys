require("http");
require("fs");
require("core/js/archersysos");
ArcherSys.ServerSide = new Object();
ArcherSys.createArcherSysOSNodeApplication = function(port,onCreate){
     http.createServer(function(req,res){
       onCreate(req,res);
   }).listen(port);
};