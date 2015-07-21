ArcherSysOS.Geolocation = {
    hasGeolocation: function(){
    return ("geolocation" in window.navigator);

  },
  usePosition: function(usageCallback){
   window.navigator.geolocation.getCurrentPosition(usageCallback);
  
},
watchPosition: function(usageCallback){
   window.navigator.geolocation.watchPosition(usageCallback);
  
}

};