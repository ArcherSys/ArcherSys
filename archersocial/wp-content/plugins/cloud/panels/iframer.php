<?php

    function wpcloud_iframe_callback() { ?>
    
    <div class="head">
		<?php
                    $url = WP_PLUGIN_URL . '/cloud/includes/'; 
			if (is_user_logged_in()) {
				echo 'Used space: ';
				$user_id = get_current_user_id();
				echo '<strong>' . wpcloud_calc_used_space($user_id) . '</strong>';
				echo '/' . wpcloud_calc_user_space($user_id) . ' MB (' . wpcloud_calc_used_percentage($user_id) . '%)';
			}
		?>
	</div>
	<div class="wrap">
		<center>
			<?php
				if (get_option('wpcloud_custom_logo_url')) {
					echo '<img src="' . get_option('wpcloud_custom_logo_url') . '" />';
				} else {
					echo '<img width="50%" src="' .  $url . 'cloud.png" />';
				}
				echo '<div class="clear"></div>';
			if ( is_user_logged_in() ) {

			} else {
				echo '<h2>Welcome, guest!</h2>';
				wp_login_form();
			}
		?>
		<?php
			echo do_shortcode('[cloud]');
			echo '<hr>';
			echo do_shortcode('[cloud_upload]');
		?>
		</center>
	</div>
        
<?php echo '
            <script>
                var elem = document.getElementById("adminmenuback");
                elem.parentNode.removeChild(elem);
                var elem = document.getElementById("adminmenuwrap");
                elem.parentNode.removeChild(elem);
                var elem = document.getElementById("wpfooter");
                elem.parentNode.removeChild(elem);
            </script> ';?>
            
<style>
            #wpcontent {
                margin-left:0px;
            }
           
            
body { font-family: "Open Sans", sans-serif; padding: 0; margin: 0; background: #f5f5f5; }
.head { width: 515px; margin: 3em auto 0em auto; text-align:right; }
.wrap { width: 515px; margin: 0.2em auto 4em auto; background: white; padding: 25px; border: solid 1px #ECE9E9; -moz-border-radius: 10px; -webkit-border-radius: 10px; }
h1 { margin: 0 0 5px 0; font-size:120%; font-weight:normal; color: #666; }
a { color: #399ae5; text-decoration: none; } a:hover { color: #206ba4; text-decoration: underline; }
		
<?php $icon_folder = $url . 'icons/'; ?>
.wpcloud-file{list-style:none;margin:0;}
.wpcloud-file{background:url(<?php echo $icon_folder; ?>document.png) 0 4px no-repeat;padding-left:24px;padding-bottom:2px;}
.wpcloud-file.mime-imagejpeg,.wpcloud-file.mime-imagepng,.wpcloud-file.mime-imagejpeg,.wpcloud-file.mime-imagegif{background-image:url(<?php echo $icon_folder; ?>document-image.png);}
.wpcloud-file.mime-applicationzip{background-image:url(<?php echo $icon_folder; ?>document-zipper.png);}
.wpcloud-file.mime-applicationpdf{background-image:url(<?php echo $icon_folder; ?>document-pdf.png);}
.wpcloud-file.mime-applicationvnd-ms-excel{background-image:url(<?php echo $icon_folder; ?>document-excel.png);}
.wpcloud-file.mime-applicationvnd-openxmlformats-officedocument-spreadsheetml-sheet{background-image:url(<?php echo $icon_folder; ?>document-excel.png);}
.wpcloud-file.mime-applicationmsword{background-image:url(<?php echo $icon_folder; ?>document-word.png);}
.wpcloud-file.mime-applicationvnd-openxmlformats-officedocument-wordprocessingml-document{background-image:url(<?php echo $icon_folder; ?>document-word.png);}
.wpcloud-file.mime-applicationvnd-oasis-opendocument-spreadsheet{background-image:url(<?php echo $icon_folder; ?>document-ods.png);}
.wpcloud-file.mime-applicationvnd-oasis-opendocument-text{background-image:url(<?php echo $icon_folder; ?>document-odt.png);}
.wpcloud-file.mime-audiompeg{background-image:url(<?php echo $icon_folder; ?>document-music.png);}

#wpfooter { display:none;}
            </style>
    
    <?php
    }

?>