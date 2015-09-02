<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Menu items
 *
 * @package PhpMyAdmin-Setup
 */

if (!defined('PHPMYADMIN')) {
    exit;
}

$formset_id = filter_input(INPUT_GET, 'formset');

$separator = PMA_URL_getArgSeparator('html');
echo '<ul>';
echo '<li><a href="index.php"'
    . ($formset_id === null ? ' class="active' : '')
    . '">' . __('Overview') . '</a></li>';

$formsets = array(
    'Features'    => __('Features'),
    'Sql_queries' => __('SQL queries'),
    'Navi_panel'  => __('Navigation panel'),
    'Main_panel'  => __('Main panel'),
    'Import'      => __('Import'),
    'Export'      => __('Export')
);

foreach ($formsets as $formset => $label) {
    echo '<li><a href="?page=form' . $separator . 'formset=' . $formset . '" '
        . ($formset_id === $formset ? ' class="active' : '')
        . '">' . $label . '</a></li>';
}

echo '</ul>';
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Menu items
 *
 * @package PhpMyAdmin-Setup
 */

if (!defined('PHPMYADMIN')) {
    exit;
}

$formset_id = filter_input(INPUT_GET, 'formset');

$separator = PMA_URL_getArgSeparator('html');
echo '<ul>';
echo '<li><a href="index.php"'
    . ($formset_id === null ? ' class="active' : '')
    . '">' . __('Overview') . '</a></li>';

$formsets = array(
    'Features'    => __('Features'),
    'Sql_queries' => __('SQL queries'),
    'Navi_panel'  => __('Navigation panel'),
    'Main_panel'  => __('Main panel'),
    'Import'      => __('Import'),
    'Export'      => __('Export')
);

foreach ($formsets as $formset => $label) {
    echo '<li><a href="?page=form' . $separator . 'formset=' . $formset . '" '
        . ($formset_id === $formset ? ' class="active' : '')
        . '">' . $label . '</a></li>';
}

echo '</ul>';
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Menu items
 *
 * @package PhpMyAdmin-Setup
 */

if (!defined('PHPMYADMIN')) {
    exit;
}

$formset_id = filter_input(INPUT_GET, 'formset');

$separator = PMA_URL_getArgSeparator('html');
echo '<ul>';
echo '<li><a href="index.php"'
    . ($formset_id === null ? ' class="active' : '')
    . '">' . __('Overview') . '</a></li>';

$formsets = array(
    'Features'    => __('Features'),
    'Sql_queries' => __('SQL queries'),
    'Navi_panel'  => __('Navigation panel'),
    'Main_panel'  => __('Main panel'),
    'Import'      => __('Import'),
    'Export'      => __('Export')
);

foreach ($formsets as $formset => $label) {
    echo '<li><a href="?page=form' . $separator . 'formset=' . $formset . '" '
        . ($formset_id === $formset ? ' class="active' : '')
        . '">' . $label . '</a></li>';
}

echo '</ul>';
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
