<<<<<<< HEAD
<<<<<<< HEAD
<div class="wrap">
	<h2><?php esc_html_e( 'Akismet Stats' , 'akismet');?><?php if ( !isset( $hide_settings_link ) ): ?> <a href="<?php echo esc_url( Akismet_Admin::get_page_url() );?>" class="add-new-h2"><?php esc_html_e( 'Settings' , 'akismet');?></a><?php endif;?></h2> 
	<iframe src="<?php echo esc_url( sprintf( '//akismet.com/web/1.0/user-stats.php?blog=%s&api_key=%s&locale=%s', urlencode( get_bloginfo('url') ), Akismet::get_api_key(), get_locale() ) ); ?>" width="100%" height="2500px" frameborder="0" id="akismet-stats-frame"></iframe>
=======
<div class="wrap">
	<h2><?php esc_html_e( 'Akismet Stats' , 'akismet');?><?php if ( !isset( $hide_settings_link ) ): ?> <a href="<?php echo esc_url( Akismet_Admin::get_page_url() );?>" class="add-new-h2"><?php esc_html_e( 'Settings' , 'akismet');?></a><?php endif;?></h2> 
	<iframe src="<?php echo esc_url( sprintf( '//akismet.com/web/1.0/user-stats.php?blog=%s&api_key=%s&locale=%s', urlencode( get_bloginfo('url') ), Akismet::get_api_key(), get_locale() ) ); ?>" width="100%" height="2500px" frameborder="0" id="akismet-stats-frame"></iframe>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<div class="wrap">
	<h2><?php esc_html_e( 'Akismet Stats' , 'akismet');?><?php if ( !isset( $hide_settings_link ) ): ?> <a href="<?php echo esc_url( Akismet_Admin::get_page_url() );?>" class="add-new-h2"><?php esc_html_e( 'Settings' , 'akismet');?></a><?php endif;?></h2> 
	<iframe src="<?php echo esc_url( sprintf( '//akismet.com/web/1.0/user-stats.php?blog=%s&api_key=%s&locale=%s', urlencode( get_bloginfo('url') ), Akismet::get_api_key(), get_locale() ) ); ?>" width="100%" height="2500px" frameborder="0" id="akismet-stats-frame"></iframe>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
</div>