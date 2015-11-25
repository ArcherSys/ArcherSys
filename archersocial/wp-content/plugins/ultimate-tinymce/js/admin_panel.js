//<![CDATA[ 

function get_radio_value() {
	var inputs = document.getElementsByName("defaults_load");
	for (var i = 0; i < inputs.length; i++) {
	  if (inputs[i].checked) {
		return inputs[i].value;
	  }
	  else {
		return 'none';
	  }
	}
};

function jwlDefaults()
{
   var setting = get_radio_value();
   var credit = document.getElementById('credit');
	   if (credit.checked){
		   var credit2 = 'true';
	   } else {
		   var credit2 = 'false';
	   }
   var beautify = document.getElementById('beautify');
       if (beautify.checked){
		   var beautify2 = 'true';
	   } else {
		   var beautify2 = 'false';
	   }
   location.href='admin.php?page=ultimate-tinymce&dontshowpopup=1&defaults='+setting+'&credit='+credit2+'&beautify='+beautify2;
};


// Used to animate through the main tabs section     NOTE:  Need to switch this to the jquery tabs.
jQuery(document).ready( 
	function($){  
		$(".menu > li").click(function(e){ 
			switch(e.target.id){  
				case "news": 
					$("#news").addClass("active");
					$("#tutorials,#spread,#defaults,#links,#whypro").removeClass("active"); 
					$("div.news").fadeIn(); 
					$("div.tutorials,div.spread,div.defaults,div.links,div.whypro").css("display", "none");
				break;  
				case "tutorials":  
					$("#news,#spread,#defaults,#links,#whypro").removeClass("active");
					$("#tutorials").addClass("active");
					$("div.news,div.spread,div.defaults,div.links,div.whypro").css("display", "none"); 
					$("div.tutorials").fadeIn();  
				break; 
				case "spread":  
					$("#news,#tutorials,#defaults,#links,#whypro").removeClass("active"); 
					$("#spread").addClass("active");
					$("div.news,div.tutorials,div.links,div.defaults,div.whypro").css("display", "none");
					$("div.spread").fadeIn();  
				break; 
				case "defaults": 
					$("#news,#tutorials,#spread,#links,#whypro").removeClass("active"); 
					$("#defaults").addClass("active"); 
					$("div.spread,div.news,div.tutorials,div.links,div.whypro").css("display", "none");
					$("div.defaults").fadeIn(); 
				break; 
				case "links":  
					$("#news,#tutorials,#spread,#defaults,#whypro").removeClass("active"); 
					$("#links").addClass("active"); 
					$("div.news,div.tutorials,div.spread,div.defaults,div.whypro").css("display", "none");
					$("div.links").fadeIn(); 
				break;  
				case "whypro": 
					$("#news,#tutorials,#spread,#defaults,#links").removeClass("active");   
					$("#whypro").addClass("active");
					$("div.news,div.tutorials,div.spread,div.defaults,div.links").css("display", "none"); 
					$("div.whypro").fadeIn(); 
				break;  
			} return false; 
		});  
	}
);

// Used to animate through the settings sections     NOTE:  Need to switch this to the jquery tabs.
jQuery(document).ready( 
	function($){  
		$(".menu2 > li").click(function(e){ 
			switch(e.target.id){  
				case "buttons1_tab": 
					$("#misc_tab,#admin_tab,#editor_tab").removeClass("active");
					$("div.misc_tab,div.admin_tab,div.editor_tab").css("display", "none"); 
					$("#buttons1_tab").addClass("active");   
					$("div.buttons1_tab").fadeIn(); 
				break; 
				case "misc_tab": 
					$("#buttons1_tab,#admin_tab,#editor_tab").removeClass("active"); 
					$("div.editor_tab,div.buttons1_tab,div.admin_tab").css("display", "none");
					$("#misc_tab").addClass("active"); 
					$("div.misc_tab").fadeIn();  
				break; 
				case "admin_tab": 
					$("#buttons1_tab,#misc_tab,#editor_tab").removeClass("active"); 
					$("div.misc_tab,div.editor_tab,div.buttons1_tab").css("display", "none"); 
					$("#admin_tab").addClass("active"); 
					$("div.admin_tab").fadeIn(); 
				break; 
				case "editor_tab": 
					$("#buttons1_tab,#misc_tab,#admin_tab").removeClass("active"); 
					$("div.misc_tab,div.admin_tab,div.buttons1_tab").css("display", "none"); 
					$("#editor_tab").addClass("active"); 
					$("div.editor_tab").fadeIn(); 
				break; 
			} return false; 
		});  
	}
);

// Used to show/hide the additional qr code options
jQuery(document).ready( 
	function($) {
    	//Hide div w/id jwl_hide
		if ($("#jwl_qr_code").is(":checked") || $("#jwl_qr_code_pages").is(":checked")) { 
			$('.jwl_hide').fadeIn('slow', function() { 
				$(".jwl_hide").css("display","block"); 
			}); 
		} else { 
			$('.jwl_hide').fadeOut('fast', function() { 
				$(".jwl_hide").css("display","none"); 
			}); 
		} 
		
		$("#jwl_qr_code").click(function(){ 
			$('.jwl_hide').fadeIn('slow', function() { 
				if ($("#jwl_qr_code").is(":checked") || $("#jwl_qr_code_pages").is(":checked")) { 
					$(".jwl_hide").css("display","block"); 
				} else { 
					$('.jwl_hide').fadeOut('slow', function() { 
						$(".jwl_hide").css("display","none"); 
					}); 
				} 
			}); 
		}); 
		
		$("#jwl_qr_code_pages").click(function(){ 
			$('.jwl_hide').fadeIn('slow', function() { 
				if ($("#jwl_qr_code_pages").is(":checked") || $("#jwl_qr_code").is(":checked")) { 
					$(".jwl_hide").css("display","block"); 
				} else { 
					$('.jwl_hide').fadeOut('slow', function() {  
						$(".jwl_hide").css("display","none"); 
					}); 
				} 
			}); 
		});
	}
);

//]]>