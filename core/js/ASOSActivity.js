define("archersys","notidar","jquery",function(ArcherSys,Notidar,$){
  ArcherSys.ArcherSysOSActivity = function(name,url,iframe,redirect){
this.name = name;
this.url = url;
this.iframe = iframe;
this.start = function(){
  try{
if(this.iframe && this.redirect){
  window.location.this.assign("http://localhost:80/apps/activity/" + this.url);
}else if(!this.iframe && this.redirect){
   window.location.this.assign(this.url);
}else if(this.iframe && !this.redirect){
  window.open("http://localhost:80/apps/activity/" + this.url);
}else if (!this.iframe && !this.redirect){
  window.open(this.url);
}else{
  throw new Error("An ArcherSysJSActivityException was thrown");
  
}
  
} catch(error)  {
  Notidar.pushNotification("Error!","ArcherSysJS has crashed");
}       
};
};

});