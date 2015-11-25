function ajaxService (widget,method,value,callback) {
	data  = "value="+value+"&";
	data += "id="+widget+"&";
	data += "method="+method+"&";
	$.post(OC.filePath('ocDashboard', 'ajax', 'ajaxService.php'),data,function(result){
		if(result.success){
            //alert(result.debug);
			if(callback){
				callback(result.response);
			}
		}
	},'json');
}