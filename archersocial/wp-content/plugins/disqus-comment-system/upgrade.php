<<<<<<< HEAD
<<<<<<< HEAD
<?php
require(ABSPATH . 'wp-includes/version.php');

if ( !current_user_can('manage_options') ) {
    die();
}

$step = (isset($_GET['step']) ? $_GET['step'] : null);

?>
<div class="wrap">
    <h2><?php echo dsq_i('Upgrade Disqus Comments'); ?></h2>
    <form method="POST" action="?page=disqus&amp;step=<?php echo esc_attr($step); ?>">
        <?php wp_nonce_field('dsq-wpnonce_upgrade', 'dsq-form_nonce_upgrade'); ?>
        <p><?php echo dsq_i('You need to upgrade your database to continue.'); ?></p>

        <p class="submit" style="text-align: left">
            <input type="submit" name="upgrade" class="button-primary button" value="Upgrade &raquo;" />
        </p>
    </form>
=======
<?php
require(ABSPATH . 'wp-includes/version.php');

if ( !current_user_can('manage_options') ) {
    die();
}

$step = (isset($_GET['step']) ? $_GET['step'] : null);

?>
<div class="wrap">
    <h2><?php echo dsq_i('Upgrade Disqus Comments'); ?></h2>
    <form method="POST" action="?page=disqus&amp;step=<?php echo esc_attr($step); ?>">
        <?php wp_nonce_field('dsq-wpnonce_upgrade', 'dsq-form_nonce_upgrade'); ?>
        <p><?php echo dsq_i('You need to upgrade your database to continue.'); ?></p>

        <p class="submit" style="text-align: left">
            <input type="submit" name="upgrade" class="button-primary button" value="Upgrade &raquo;" />
        </p>
    </form>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
require(ABSPATH . 'wp-includes/version.php');

if ( !current_user_can('manage_options') ) {
    die();
}

$step = (isset($_GET['step']) ? $_GET['step'] : null);

?>
<div class="wrap">
    <h2><?php echo dsq_i('Upgrade Disqus Comments'); ?></h2>
    <form method="POST" action="?page=disqus&amp;step=<?php echo esc_attr($step); ?>">
        <?php wp_nonce_field('dsq-wpnonce_upgrade', 'dsq-form_nonce_upgrade'); ?>
        <p><?php echo dsq_i('You need to upgrade your database to continue.'); ?></p>

        <p class="submit" style="text-align: left">
            <input type="submit" name="upgrade" class="button-primary button" value="Upgrade &raquo;" />
        </p>
    </form>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
</div>