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

namespace OCA\secure_container\AppInfo;

\OCP\App::addNavigationEntry(array(
	// The string under which your app will be referenced in owncloud
	'id' => 'secure_container',

	// Sorting weight for the navigation. The higher the number, the higher
	// will it be listed in the navigation
	'order' => 10,

	// The route that will be shown on startup
	'href' => \OCP\Util::linkToRoute('secure_container.page.index'),

	// The icon that will be shown in the navigation
	// This file needs to exist in img/
	'icon' => \OCP\Util::imagePath('secure_container', 'app.svg'),

	// The title of your application. This will be used in the
	// navigation or on the settings page of your app
	'name' => \OC_L10N::get('secure_container')->t('Secure Container')
));
