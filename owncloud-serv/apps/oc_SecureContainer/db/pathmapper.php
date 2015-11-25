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
use \OCA\secure_container\Db\Path;
use \OCA\secure_container\Db\PathTree;

class PathMapper extends Mapper {
	private $table = 'secure_cont_path';
	private $uid;
	
	public function __construct(IDb $db, $uid) {
		parent::__construct($db, $this->table, 'OCA\secure_container\Db\Path');
		$this->uid = $uid;
	}
	
	/**
	 * Check if the given path exists or not
	 * 
	 * @param int ID of the path to check for
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
	 * Get the path entity identified by the given id
	 * 
	 * @param int id ID of the path to get
	 * 
	 * @return \OCA\secure_container\Db\Path
	 * 
	 * @throws \OCP\AppFramework\Db\DoesNotExistException if not found
	 * @throws \OCP\AppFramework\Db\MultipleObjectsReturnedException if more than one result
	 */
	public function find($id) {
		$sql = 'SELECT * FROM `*PREFIX*' . $this->table . '` WHERE `id` = ? AND `uid` = ?;';
		return $this->findEntity($sql, array($id, $this->uid));
	}
	
	/**
	 * Get a list of all path entries
	 * 
	 * @param int limit (Optional) Maximum number of entries
	 * @param int offset (Optional) Num of entries to leave out
	 * 
	 * @return array[\OCA\secure_container\Db\Path]
	 */
	public function findAll($limit = null, $offset = null) {
		$sql = 'SELECT * FROM `*PREFIX*' . $this->table . '` WHERE `uid` = ?;';
		return $this->findEntities($sql, array($this->uid), $limit, $offset);
	}
	
	/**
	 * Get a list of all child path entries
	 * 
	 * @param int parent The path id fromw hich the children should be returned
	 * @param int limit (Optional) Maximum number of entries
	 * @param int offset (Optional) Num of entries to leave out
	 * 
	 * @return array[\OCA\secure_container\Db\Path]
	 */
	public function findChildren($parent) {
		$sql = 'SELECT * FROM `*PREFIX*' . $this->table . '` WHERE `uid` = ? AND `parent` = ?;';
		return $this->findEntities($sql, array($this->uid, intval($parent)));
	}
	
	/**
	 * Get a recursivelist of all entries, starting with a given parent and depth
	 * 
	 * @param int pathId (Optional) The path entry to get all children from
	 * 
	 * @return array[\OCA\secure_container\Db\PathTree]
	 */
	public function findPathTree($pathId = 0) {
		$tree = array();
		
		$sql = 'SELECT `id` FROM `*PREFIX*' . $this->table . '` WHERE `uid` = ? AND `parent` = ?;';
		$result = $this->execute($sql, array($this->uid, intval($pathId)));
		
		while ($row = $result->fetch(\PDO::FETCH_NUM)) {
			$tree[] = new PathTree($row[0], $this);
		}
		return $tree;
	}
	
}

