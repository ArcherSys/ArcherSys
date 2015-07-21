$.fn.gotoLink = function(){
  return this.each(function(){
    return $(this).attr("goto");
    });
};