var ArcherSysOS = function(){
	 this.addModule = function(src){
		 $("head").append("<script src=\"" + src + ".js\"></script>");
	 };
	 this.addModule("/core/js/localforage.min");
  this.applications = [];
  this.Application = function(name,description,onStart,onInstall){
	  this.name = name 
          this.description = description;
	  this.onStart = onStart;
	  this.onInstall = onInstall;
	  this.onInstall();
	  new ArcherSysOS().addApplicationResource("app_name",this.name);
  };

};
