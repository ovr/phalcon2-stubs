<?php

namespace Phalcon\Mvc\Micro;

class Collection implements \Phalcon\Mvc\Micro\CollectionInterface
{

    protected $_prefix;

    protected $_lazy;

    protected $_handler;

    protected $_handlers;

    /**
     * Internal function to add a handler to the group
     *
     * @param string|array $method 
     * @param string $routePattern 
     * @param mixed $handler 
     * @param string $name 
     */
	private function _addMap($method, $routePattern, $handler, $name) {}

    /**
     * Sets a prefix for all routes added to the collection
     *
     * @param string $prefix 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function setPrefix($prefix) {}

    /**
     * Returns the collection prefix if any
     *
     * @return string 
     */
	public function getPrefix() {}

    /**
     * Returns the registered handlers
     *
     * @return array 
     */
	public function getHandlers() {}

    /**
     * Sets the main handler
     *
     * @param mixed $handler 
     * @param boolean $lazy 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function setHandler($handler, $lazy = false) {}

    /**
     * Sets if the main handler must be lazy loaded
     *
     * @param boolean $lazy 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function setLazy($lazy) {}

    /**
     * Returns if the main handler must be lazy loaded
     *
     * @return boolean 
     */
	public function isLazy() {}

    /**
     * Returns the main handler
     *
     * @return mixed 
     */
	public function getHandler() {}

    /**
     * Maps a route to a handler
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function map($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is GET
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function get($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is POST
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function post($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is PUT
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function put($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is PATCH
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function patch($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is HEAD
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function head($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is DELETE
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param string $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function delete($routePattern, $handler, $name = null) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is OPTIONS
     *
     * @param string $routePattern 
     * @param callable $handler 
     * @param mixed $name 
     * @return \Phalcon\Mvc\Micro\Collection 
     */
	public function options($routePattern, $handler, $name = null) {}

}