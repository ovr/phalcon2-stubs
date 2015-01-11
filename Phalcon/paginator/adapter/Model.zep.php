<?php

namespace Phalcon\Paginator\Adapter;

class Model implements \Phalcon\Paginator\AdapterInterface
{
    /**
     * Number of rows to show in the paginator. By default is null
     */
    protected $_limitRows;
    /**
     * Configuration of paginator by model
     */
    protected $_config;
    /**
     * Current page in paginate
     */
    protected $_page;

    /**
     * Phalcon\Paginator\Adapter\Model constructor
     *
     * @param array $config 
     */
	public function __construct($config) {}

    /**
     * Set the current page number
     *
     * @param int $page 
     */
	public function setCurrentPage($page) {}

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return stdClass 
     */
	public function getPaginate() {}

}
