<?php

/**
 * ownCloud - EasyBackup
 *
 * @author Sebastian Kanzow
 * @copyright 2014 System k2 GmbH  info@systemk2.de
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
 *
 */
\OCP\Util::addScript('easybackup', 'easybackup'); // add js/easybackup.js
\OCP\Util::addScript('easybackup', 'logfiletailer'); // add js/logfiletailer.js
\OCP\Util::addStyle('easybackup', 'easybackup'); // add css/easybackup.css

\OCP\App::addNavigationEntry(
		array (

				// the string under which your app will be referenced in owncloud
				'id' => 'easybackup',

				// sorting weight for the navigation. The higher the number, the higher
				// will it be listed in the navigation
				'order' => 10,

				// the route that will be shown on startup
				'href' => \OCP\Util::linkToRoute('easybackup.page.index'),

				// the icon that will be shown in the navigation
				// this file needs to exist in img/...
				'icon' => \OCP\Util::imagePath('easybackup', 'easybackup_logo.png'),

				// the title of your application. This will be used in the
				// navigation or on the settings page of your app
				'name' => 'EasyBackup'
		));

