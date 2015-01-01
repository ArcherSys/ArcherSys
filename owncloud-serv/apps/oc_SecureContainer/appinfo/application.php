<?php
/*
*
 
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


use \OCP\AppFramework\App;

use \OCA\secure_container\Controller\PageController;

use \OCA\secure_container\Db\PathMapper;

use \OCA\secure_container\Db\ContentMapper;


class Application extends App {
	
public function __construct (array $urlParams = array()) {
		
parent::__construct('secure_container', $urlParams);
		
		
$container = $this->getContainer();
		
$container->registerService('PageController', function($c) {
			
return new PageController(
				
$c->query('AppName'), 
				
$c->query('Request'),
				
$c->query('UserId'),
				
$c->query('Config'),
				
$c->query('PathMapper'),
				
$c->query('ContentMapper')
			
);
		
});
		
		
$container->registerService('UserId', function($c) {
			
return \OCP\User::getUser();
		
});
		
		
$container->registerService('Config', function($c) {
			
return $c->query('ServerContainer')->getConfig();
		
});
		
		
$container->registerService('PathMapper', function($c) {
			
return new PathMapper($c->query('ServerContainer')->getDb(), \OCP\User::getUser());
		
});
		
		$container->registerService('ContentMapper', function($c) {

			return new ContentMapper($c->query('ServerContainer')->getDb(), \OCP\User::getUser());
		
});
	
}
}