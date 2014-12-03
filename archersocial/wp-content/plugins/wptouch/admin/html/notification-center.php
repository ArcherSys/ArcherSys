<?php $settings = wptouch_get_settings(); ?>

	<div class="dropdown notifications">
		<?php if ( defined( 'WPTOUCH_IS_FREE' ) && $_GET['page'] != 'wptouch-admin-upgrade' ) { ?>
			<button id="upgrade-to-pro" class="button button-primary" type="button" data-target="<?php echo admin_url( 'admin.php?page=wptouch-admin-upgrade' ); ?>">
				<?php _e( 'What\'s in WPtouch Pro?', 'wptouch-pro' ); ?>
			</button>
		<?php } ?>
		<button id="notification-drop" class="notifications-btn button button-secondary dropdown-toggle" type="button" data-toggle="dropdown">
			<?php _e( 'Notifications', 'wptouch-pro' ); ?>
		</button>
		<span class="number" style="display: none;"></span>

		<div class="dropdown-menu notifications-div" role="menu" aria-labelledby="notification-drop">
			<span id="ajax-notifications"></span>
		</div><!-- drop-down menu -->
	</div>