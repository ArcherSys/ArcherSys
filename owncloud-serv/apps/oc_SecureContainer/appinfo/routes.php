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

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
$application = new Application();
$application->registerRoutes($this, array('routes' => array(
	array('name' => 'page#index', 'url' => '/', 'verb' => 'GET'),
	
	// Routes for the Encrypted containers and entries
	array('name' => 'page#entries', 'url' => '/list/{path}', 'verb' => 'GET'),
	array('name' => 'page#show', 'url' => '/get/{guid}', 'verb' => 'GET'),
	array('name' => 'page#save', 'url' => '/save/{guid}', 'verb' => 'POST'),
	array('name' => 'page#delete', 'url' => '/delete/{guid}', 'verb' => 'GET'),

	// Routes for the Sections/Pathes
	array('name' => 'page#sections', 'url' => '/sections', 'verb' => 'GET'),
	array('name' => 'page#section', 'url' => '/create/{guid}', 'verb' => 'POST'),
)));

