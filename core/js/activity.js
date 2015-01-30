NKdefine(["jquery"],function($){
 var Activity = function(title,url){
    this.title = title;
    this.url = url;
    this.start = function(){
       location.assign(url);
     };
   };
  return Activity;
 Activity.GrooveActivity = function(){




});