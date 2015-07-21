<?php namespace apps2_games;
/**
* @brief ownCloud Games Integration
*
* @author	Pierre Fauconnier
* @copyright	2014 Pierre Fauconnier
* @license	CeCILL v2.1 - http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
* @site		http://oc-apps2.sourceforge.net/
*/
// Fired by main.php
\OCP\Util::addStyle(K_APP_NAME, 'styles');
\OCP\Util::addScript(K_APP_NAME, 'go');
?>
<div id="apps2_games">
	<div id="controls">
		<div id="apps2_games_versions">
<?php
echo 'Apps2 - Games'.'<br>v'.\OC_Appconfig::getValue(K_APP_NAME,'installed_version').' / '.\OC_Util::getVersionString();
?>
		</div>
		<div id="apps2_games_back" class="button"><span>List of games</span></div>
	</div>
	<div id="apps2_games_list" class="hascontrols">
		<ul class="apps2_games_grid">
<?php
$myPath = \OC_App::getAppWebPath(K_APP_NAME);
foreach ( $_['mainList'] as $myItem ) {
	echo<<<EOG
<li class="apps2_games_item">
	<a href="$myPath/{$myItem->js}" class="apps2_games_href">
		<div class="apps2_games_item_icon">
			<img src="$myPath/{$myItem->ico}">
		</div>
		<div class="apps2_games_item_caption">{$myItem->caption}</div>
	</a>
	{$myItem->title}
</li>
EOG;
}
?>
		</ul>
	</div>
	<iframe id="apps2_games_iframe" name="apps2_games_iframe" class="hascontrols" style="display:none; position:absolute; width:100%; height:100%"></iframe>
</div>