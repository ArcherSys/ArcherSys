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

namespace OCA\secure_container\Db;

use \OCP\AppFramework\Db\Entity;

class Content extends Entity implements \JsonSerializable {
	protected $path;
	protected $name;
	protected $description;
	protected $value;
	protected $uid;
	
	/**
	 * Interface JsonSerializable: Returns a data object which can be json encoded
	 * 
	 * @return object
	 */
	public function jsonSerialize() {
		return (object) array(
			'id' => $this->id,
			'path' => $this->path,
			'name' => $this->name,
			'description' => $this->description,
			'value' => $this->value,
			'uid' => $this->uid
		);
	}
}