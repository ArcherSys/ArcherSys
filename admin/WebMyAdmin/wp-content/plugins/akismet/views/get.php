<<<<<<< HEAD
<form name="akismet_activate" action="https://akismet.com/get/" method="POST" target="_blank">
	<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
	<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : 'plugin-signup'; ?>"/>
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'button button-primary';?>" value="<?php echo esc_attr( $text ); ?>"/>
=======
<form name="akismet_activate" action="https://akismet.com/get/" method="POST" target="_blank">
	<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
	<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : 'plugin-signup'; ?>"/>
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'button button-primary';?>" value="<?php echo esc_attr( $text ); ?>"/>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
</form>