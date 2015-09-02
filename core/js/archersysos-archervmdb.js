ArcherSysOS.ArcherVMDB =  {
     get: function ArcherVMDB(){
         return this.Databases;
     },
       createDatabase: function(name,version){
         return window.indexedDB.open(name,version);
     },
    Databases:{
        
    }
   
    
};
window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB;
ArcherSysOS.ArcherVMDB.Databases.ASOSDB = ArcherSysOS.ArcherVMDB.createDatabase("ArcherSysOS",1);