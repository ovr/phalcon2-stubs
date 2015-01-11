<?php

namespace Phalcon;

class Debug
{

    protected $_uri = "http://static.phalconphp.com/debug/1.2.0/";

    protected $_theme = "default";

    protected $_hideDocumentRoot = false;

    protected $_showBackTrace = true;

    protected $_showFiles = true;

    protected $_showFileFragment = false;

    protected $_data;

    static protected $_isActive;

    /**
     * Change the base URI for static resources
     *
     * @param string $uri 
     * @return \Phalcon\Debug 
     */
	public function setUri($uri) {}

    /**
     * Sets if files the exception"s backtrace must be showed
     *
     * @param boolean $showBackTrace 
     * @return \Phalcon\Debug 
     */
	public function setShowBackTrace($showBackTrace) {}

    /**
     * Set if files part of the backtrace must be shown in the output
     *
     * @param boolean $showFiles 
     * @return \Phalcon\Debug 
     */
	public function setShowFiles($showFiles) {}

    /**
     * Sets if files must be completely opened and showed in the output
     * or just the fragment related to the exception
     *
     * @param boolean $showFileFragment 
     * @return \Phalcon\Debug 
     */
	public function setShowFileFragment($showFileFragment) {}

    /**
     * Listen for uncaught exceptions and unsilent notices or warnings
     *
     * @param boolean $exceptions 
     * @param boolean $lowSeverity 
     * @return \Phalcon\Debug 
     */
	public function listen($exceptions = true, $lowSeverity = false) {}

    /**
     * Listen for uncaught exceptions
     *
     * @return \Phalcon\Debug 
     */
	public function listenExceptions() {}

    /**
     * Listen for unsilent notices or warnings
     *
     * @return \Phalcon\Debug 
     */
	public function listenLowSeverity() {}

    /**
     * Halts the request showing a backtrace
     */
	public function halt() {}

    /**
     * Adds a variable to the debug output
     *
     * @param mixed $varz 
     * @param string $key 
     * @return \Phalcon\Debug 
     */
	public function debugVar($varz, $key = null) {}

    /**
     * Clears are variables added previously
     *
     * @return \Phalcon\Debug 
     */
	public function clearVars() {}

    /**
     * Escapes a string with htmlentities
     *
     * @param string $value 
     * @return string 
     */
	protected function _escapeString($value) {}

    /**
     * Produces a recursive representation of an array
     *
     * @param array $argument 
     * @param mixed $n 
     * @return string 
     */
	protected function _getArrayDump($argument, $n = 0) {}

    /**
     * Produces an string representation of a variable
     *
     * @param mixed $variable 
     * @return string 
     */
	protected function _getVarDump($variable) {}

    /**
     * Returns the major framework's version
     *
     * @return string 
     */
	public function getMajorVersion() {}

    /**
     * Generates a link to the current version documentation
     *
     * @return string 
     */
	public function getVersion() {}

    /**
     * Returns the css sources
     *
     * @return string 
     */
	public function getCssSources() {}

    /**
     * Returns the javascript sources
     *
     * @return string 
     */
	public function getJsSources() {}

    /**
     * Shows a backtrace item
     *
     * @param int $n 
     * @param array $trace 
     */
	protected final function showTraceItem($n, $trace) {}

    /**
     * Handles uncaught exceptions
     *
     * @param \Exception $exception 
     * @return boolean 
     */
	public function onUncaughtException($exception) {}

}
