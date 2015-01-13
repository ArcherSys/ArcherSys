<?php
  
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('pdflintview');
\OCP\App::setActiveNavigationEntry( 'pdflintview' );
\OCP\Util::addScript('pdflintview', 'ajaxaggregator');
?>