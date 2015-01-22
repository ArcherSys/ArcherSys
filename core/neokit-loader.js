var ArcherSysPM = requirejs.config({
  baseUrl: "/core/js",
  paths:{
    "jquery":"libs/jquery.min",
    "events":"mozilla/events"
  },
  shim:{
   "jquery":{
     exports:"$"
   },
   "archersysjs":{
     exports:"ArcherSys"
  },
  "notidar":{
    exports:"Notidar"
  }
  }
  
});