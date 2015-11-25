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

use \OCP\IDb;
use \OCP\AppFramework\Db\Mapper;

class ContentMapper extends Mapper {
	private $table = 'secure_cont_entry';
	private $uid;
	
	public function __construct(IDb $db, $uid) {
		parent::__construct($db, $this->table, 'OCA\secure_container\Db\Content');
		$this->uid = $uid;
	}
	
	/**
	 * Check if the given content exists or not
	 * 
	 * @param int ID of the content to check for
	 * 
	 * @return boolean
	 */
	public function exists($id) {
		try {
			$this->find($id);
			return true;
		} catch (\Exception $ex) {}
		return false;
	}
	
	/**
	 * Get the content entity identified by the given id
	 * 
	 * @param int id ID of the content to get
	 * 
	 * @return \OCA\secure_container\Db\Content
	 * 
	 * @throws \OCP\AppFramework\Db\DoesNotExistException if not found
	 * @throws \OCP\AppFramework\Db\MultipleObjectsReturnedException if more than one result
	 */
	public function find($id) {
		$sql = 'SELECT * FROM `*PREFIX*' . $this->table . '` WHERE `id` = ? AND `uid` = ?;';
		return $this->findEntity($sql, array(intval($id), $this->uid));
	}
	
	/**
	 * Get all content entity in a given path
	 * 
	 * @param int path ID of the path to get the entries from
	 * @param int limit (Optional) Maximum number of entries
	 * @param int offset (Optional) Num of entries to leave out
	 * 
	 * @return array[\OCA\secure_container\Db\Content]
	 * 
	 * @throws \OCP\AppFramework\Db\DoesNotExistException if not found
	 */
	public function findAll($path, $limit = null, $offset = null) {
		$sql = 'SELECT * FROM `*PREFIX*' . $this->table . '` WHERE `path` = ? AND `uid` = ?;';
		return $this->findEntities($sql, array(intval($path), $this->uid), $limit, $offset);
	}
	
	/**
	 * Get all content entities with a given string as part of the name
	 * 
	 * @param string name String to search for in the name of the content
	 * @param int limit (Optional) Maximum number of entries
	 * @param int offset (Optional) Num of entries to leave out
	 * 
	 * @return array[\OCA\secure_container\Db\Content]
	 * 
	 * @throws \OCP\AppFramework\Db\DoesNotExistException if not found
	 * @throws \OCP\AppFramework\Db\MultipleObjectsReturnedException if more than one result
	 */
	public function findByName($name, $limit = null, $offset = null) {
		$name = '%' . $name . '%';
		$sql = 'SELECT * FROM `*PREFIX*' . $this->table . '` WHERE `name` LIKE ? AND `uid` = ?;';
		return $this->findEntities($sql, array($name, $this->uid), $limit, $offset);
	}
	
	/**
	 * @throws \OCP\AppFramework\Db\DoesNotExistException if not found
	 * @throws \OCP\AppFramework\Db\MultipleObjectsReturnedException if more than one result
	 */
	/*public function findByName($name) {
		$sql = 'SELECT COUNT(*) AS `count` FROM `*PREFIX*' . $this->table . '` WHERE `name` = ?';
		$query = $this->db->prepareQuery($sql);
		$query->bindParam(1, $name, \PDO::PARAM_STR);
		$result = $query->execute();
		
		while($row = $result->fetchRow()) {
			return $row['count'];
		}
	}*/
	
}

