OC.AppUserConfig={
	url:OC.filePath('ocDashboard', 'ajax', 'AppUserConfig.php'),
	postCall:function(action,data,callback){
		data.action=action;
		$.post(OC.AppUserConfig.url,data,function(result){
			if(result.status='success'){
				if(callback){
					callback(result.data);
				}
			}
		},'json');
	},
	setValue:function(app,key,value){
		OC.AppUserConfig.postCall('setValue',{app:app,key:key,value:value});
	}
};

$(document).ready(function() {

	// bind onChange Ajax safe setting for checkboxes
	$('#ocDashboardSettings .checkbox').each( function (i, current) {
		$('#' + current.id).bind('change', function() {
			if (this.checked) {
				OC.AppUserConfig.setValue('ocDashboard', current.id, 'yes');
			} else {
				OC.AppUserConfig.setValue('ocDashboard', current.id, 'no');
			}
		});
	});

	// bind onChange Ajax safe setting for radio selector
	$('#ocDashboardSettings input:radio').each( function (i, current) {
		$(current).bind('change', function() {
				OC.AppUserConfig.setValue('ocDashboard', current.name, current.value);
		});
	});
	
	// bind onChange Ajax safe setting for text-fields
	$('#ocDashboardSettings input:text').each( function (i, current) {
		$('#' + current.id).bind('change', function() {
				OC.AppUserConfig.setValue('ocDashboard', current.id, $('#' + current.id).val());
		});
	});

    // bind onChange Ajax safe setting for password-fields
    $('#ocDashboardSettings input:password').each( function (i, current) {
        console.log(current);
        $('#' + current.id).bind('change', function() {
            OC.AppUserConfig.setValue('ocDashboard', current.id, $('#' + current.id).val());
        });
    });

    // bind onChange Ajax safe setting for selections
    $('#ocDashboardSettings select').each( function (i, current) {
        console.log(current);
        $('#' + current.id).bind('change', function() {
            OC.AppUserConfig.setValue('ocDashboard', current.id, $('#' + current.id).val());
        });
    });

});