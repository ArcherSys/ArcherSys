ArcherSysOS.Loaders = {
  onUnload: function(){
      var approve = confirm("Allow " + localStorage["appName"] + " to collect garbage?");
      if(approve){
          localStorage.clear();
      }else{
          return;
      }
  },
  mozillaStyle: function(){
      if (window.navigator.appCodeName == "Mozilla"){
          jQuery("#cssadapter").attr("src","mozstyle.css");
      }
  }
};