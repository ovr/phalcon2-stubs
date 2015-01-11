<?php

namespace Phalcon;

class Filter implements \Phalcon\FilterInterface
{

    protected $_filters;

    /**
     * Adds a user-defined filter
     *
     * @param string $name 
     * @param callable $handler 
     * @return \Phalcon\Filter 
     */
	public function add($name, $handler) {}

    /**
     * Sanitizes a value with a specified single or set of filters
     *
     * @param mixed $value 
     * @param mixed $filters 
     * @param bool $noRecursive 
     * @param noRecursive  
     * @return mixed 
     */
	public function sanitize($value, $filters, $noRecursive = false) {}

    /**
     * Internal sanitize wrapper to filter_var
     *
     * @param mixed $value 
     * @param string $filter 
     * @param mixed $$value 
     * @param string $$filter 
     * @return mixed 
     */
	protected function _sanitize($value, $filter) {}

    /**
     * Return the user-defined filters in the instance
     *
     * @return object[] 
     */
	public function getFilters() {}

}
