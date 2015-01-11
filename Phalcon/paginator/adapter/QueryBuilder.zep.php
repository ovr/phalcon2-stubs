<?php

namespace Phalcon\Paginator\Adapter;

class QueryBuilder implements \Phalcon\Paginator\AdapterInterface
{
    /**
     * Configuration of paginator by model
     */
    protected $_config;
    /**
     * Paginator's data
     */
    protected $_builder;
    /**
     * Number of rows to be shown in the paginator. By default is null
     */
    protected $_limitRows;
    /**
     * Current page in paginate
     */
    protected $_page = 1;

    /**
     * Phalcon\Paginator\Adapter\QueryBuilder
     *
     * @param array $config 
     */
	public function __construct($config) {}

    /**
     * Set the current page number
     *
     * @param int $currentPage 
     * @param int $page 
     * @return QueryBuilder 
     */
	public function setCurrentPage($currentPage) {}

    /**
     * Get the current page number
     *
     * @return int 
     */
	public function getCurrentPage() {}

    /**
     * Set current rows limit
     *
     * @param int $limitRows 
     * @param int $$limit 
     * @return \Phalcon\Paginator\Adapter\QueryBuilder Fluent interface
     */
	public function setLimit($limitRows) {}

    /**
     * Get current rows limit
     *
     * @return int 
     */
	public function getLimit() {}

    /**
     * Set query builder object
     *
     * @param mixed $builder 
     * @param \Phalcon\Mvc\Model\Query\BuilderInterface $$builder 
     * @return \Phalcon\Paginator\Adapter\QueryBuilder Fluent interface
     */
	public function setQueryBuilder(\Phalcon\Mvc\Model\Query\Builder $builder) {}

    /**
     * Get query builder object
     *
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface 
     */
	public function getQueryBuilder() {}

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return stdClass 
     */
	public function getPaginate() {}

}
