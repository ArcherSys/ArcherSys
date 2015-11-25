<?php
/**
 * ownCloud - Secure Container
 *
 * @author Lukas Zurschmiede
 * @copyright 2014 Lukas Zurschmiede <l.zurschmiede@ranta.ch>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 */

// This script we have to wrap in a class to pretend it to override t()
// and possibly other functions or variables. See below.
//\OCP\Util::addScript('secure_container', '3rdparty/sjcl/sjcl');

\OCP\Util::addScript('secure_container', 'container');
\OCP\Util::addScript('secure_container', 'navigation');
\OCP\Util::addScript('secure_container', 'app');

\OCP\Util::addStyle('secure_container', 'style');
$l = \OC_L10N::get('secure_container');
?>

<script type="text/javascript" src="<?php p(\OCP\Util::linkToAbsolute('secure_container', 'js/3rdparty/jswrapper.php', array('app'=> 'sjcl'))); ?>"></script>
<div id="app-navigation">
	<ul class="level-0 path-childs" id="path-childs-0">
		<?php foreach ($_['navigation'] as $k => $path): ?>
		<?php print_unescaped($this->inc('pathentry', array('path' => $path, 'level'=> 1))); ?>
		<?php endforeach; ?>
	</ul>
</div>

<main id="app-content">
	<div id="controls">
		<nav class="breadcrumb">
			<div class="crumb home svg last" data-dir="0">
				<a><img class="svg" src="<?php print(\OCP\Util::imagePath('core', 'places/home.svg')); ?>"></a>
			</div>
		</nav>
		
		<section class="actions creatable">
			<div id="new" class="button">
				<a>Neu</a>
				<ul>
					<li class="icon-filetype-folder svg" data-new-value="<?php p($l->t('New Folder')); ?>" data-type="folder">
						<p><?php p($l->t('New Folder')); ?></p>
					</li>
					<li class="icon-filetype-text svg" data-new-value="<?php p($l->t('New Crypto-Entry')); ?>" data-type="container">
						<p><?php p($l->t('New Crypto-Entry')); ?></p>
					</li>
				</ul>
			</div>
		</section>
		<div class="icon-toggle svg"><?php p($l->t('Passphrase set')); ?></div>
	</div>
	<main id="contents">
	</main>
</main>
