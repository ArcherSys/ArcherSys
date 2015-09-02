<?php
namespace OCA\PDFLintViewer\AppInfo;
\OCP\App::addNavigationEntry(array(
// the string under which your app will be referenced in owncloud
'id' => 'pdflintview',
// sorting weight for the navigation. The higher the number, the higher
// will it be listed in the navigation
'order' => 10,
// the route that will be shown on startup
'href' => \OCP\Util::linkToRoute('pdflintview_index'),
// the icon that will be shown in the navigation
// this file needs to exist in img/example.png
'icon' => \OCP\Util::imagePath('pdflintview', 'app.png'),
// the title of your application. This will be used in the
// navigation or on the settings page of your app
'name' => \OC_L10N::get('pdflintview')->t('PDFLint Viewer')
));
// execute OCA\MyApp\BackgroundJob\Task::run when cron is called


?>