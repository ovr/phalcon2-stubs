<?php

namespace Phalcon\Translate\Adapter;

class Csv extends \Phalcon\Translate\Adapter implements \Phalcon\Translate\AdapterInterface, \ArrayAccess
{

    protected $_translate = array();

    /**
     * Phalcon\Translate\Adapter\Csv constructor
     *
     * @param array $options 
     */
	public function __construct($options) {}

    /**
     * Returns the translation related to the given key
     *
     * @param string $index 
     * @param array $placeholders 
     * @return string 
     */
	public function query($index, $placeholders = null) {}

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index 
     * @return bool 
     */
	public function exists($index) {}

}
