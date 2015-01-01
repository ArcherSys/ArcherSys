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

use \OCA\secure_container\Db\Path;
use \OCA\secure_container\Db\PathMapper;

class PathTree extends Path implements \Iterator, \Countable {
	/**
	 * List of all children.
	 * 
	 * @var array
	 */
	protected $children = array();

	/**
	 * State if the children where loaded or not
	 * 
	 * @var bool
	 */
	protected $loaded= false;

	/**
	 * The path mapperto load children
	 * 
	 * @var \OCA\secure_container\Db\PathMapper
	 */
	protected $mapper;

	/**
	 * Constructor
	 * 
	 * @param int path The path id to load
	 * @param \OCA\secure_container\Db\PathMapper mapper
	 */
	public function __construct($path, PathMapper $mapper) {
		$this->mapper = $mapper;
		$this->setId(0);
		$this->load(intval($path));
	}

	/**
	 * Loads all children from this path
	 * 
	 * @param int path The path id to load and to get the children from
	 */
	protected function load($path) {
		try {
			$path = $this->mapper->find($path);
			foreach(get_class_vars(get_class($path)) as $property => $v) {
				$this->{$property} = call_user_func(array($path, 'get' . ucfirst($property)));
			}
		} catch (\Exception $e) { }
	}

	/**
	 * Loads all children if they are not loaded yet
	 */
	protected function loadChildren() {
		if (!$this->loaded && ($this->getId() > 0)) {
			$this->children = $this->mapper->findPathTree($this->getId());
			$this->loaded = true;
		}
	}

	/**
	 * Iterator Interface: Rewind the array
	 */
	public function rewind() {
		$this->loadChildren();
		rewind($this->children);
	}

	/**
	 * Iterator Interface: Current entry
	 * 
	 * @return \OCA\secure_container\Db\Path
	 */
	public function current() {
		$this->loadChildren();
		return current($this->children);
	}

	/**
	 * Iterator Interface: Current key
	 * 
	 * @return int
	 */
	public function key() {
		$this->loadChildren();
		return key($this->children);
	}

	/**
	 * Iterator Interface: Increment the position
	 */
	public function next() {
		$this->loadChildren();
		next($this->children);
	}

	/**
	 * Iterator Interface: Check if the curent position exists
	 * 
	 * @return bool
	 */
	public function valid() {
		$this->loadChildren();
		return $this->key() !== null;
	}

	/**
	 * Countable Interface: Returns the number of children
	 * 
	 * @return int
	 */
	public function count($mode = COUNT_NORMAL) {
		$this->loadChildren();
		return count($this->children);
	}
}
