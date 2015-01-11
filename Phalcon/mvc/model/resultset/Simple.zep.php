<?php

namespace Phalcon\Mvc\Model\Resultset;

class Simple extends \Phalcon\Mvc\Model\Resultset implements \Iterator, \SeekableIterator, \Countable, \ArrayAccess, \Serializable
{

    protected $_model;

    protected $_columnMap;

    protected $_keepSnapshots = false;

    /**
     * Phalcon\Mvc\Model\Resultset\Simple constructor
     *
     * @param array $columnMap 
     * @param \Phalcon\Mvc\ModelInterface|\Phalcon\Mvc\Model\Row $model 
     * @param \Phalcon\Db\Result\Pdo|null $result 
     * @param \Phalcon\Cache\BackendInterface $cache 
     * @param boolean $keepSnapshots 
     */
	public function __construct($columnMap, $model, $result, \Phalcon\Cache\BackendInterface $cache = null, $keepSnapshots = null) {}

    /**
     * Check whether internal resource has rows to fetch
     *
     * @return boolean 
     */
	public function valid() {}

    /**
     * Returns a complete resultset as an array, if the resultset has a big number of rows
     * it could consume more memory than currently it does. Export the resultset to an array
     * couldn't be faster with a large number of records
     *
     * @param boolean $renameColumns 
     * @return array 
     */
	public function toArray($renameColumns = true) {}

    /**
     * Serializing a resultset will dump all related rows into a big array
     *
     * @return string 
     */
	public function serialize() {}

    /**
     * Unserializing a resultset will allow to only works on the rows present in the saved state
     *
     * @param string $data 
     */
	public function unserialize($data) {}

}
