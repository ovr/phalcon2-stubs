<?php

namespace Phalcon\Assets;

class Manager
{
    /**
     * Options configure
     *
     * @var array
     */
    protected $_options;

    protected $_collections;

    protected $_implicitOutput = true;

    /**
     * Phalcon\Assets\Manager
     *
     * @param array $options 
     */
	public function __construct($options = null) {}

    /**
     * Sets the manager options
     *
     * @param array $options 
     * @return \Phalcon\Assets\Manager 
     */
	public function setOptions($options) {}

    /**
     * Returns the manager options
     *
     * @return array 
     */
	public function getOptions() {}

    /**
     * Sets if the HTML generated must be directly printed or returned
     *
     * @param boolean $implicitOutput 
     * @return \Phalcon\Assets\Manager 
     */
	public function useImplicitOutput($implicitOutput) {}

    /**
     * Adds a Css resource to the 'css' collection
     * <code>
     * $assets->addCss('css/bootstrap.css');
     * $assets->addCss('http://bootstrap.my-cdn.com/style.css', false);
     * </code>
     *
     * @param string $path 
     * @param boolean $local 
     * @param boolean $filter 
     * @param array $attributes 
     * @return \Phalcon\Assets\Manager 
     */
	public function addCss($path, $local = true, $filter = true, $attributes = null) {}

    /**
     * Adds a inline Css to the 'css' collection
     *
     * @param string $content 
     * @param boolean $filter 
     * @param array $attributes 
     * @return \Phalcon\Assets\Manager 
     */
	public function addInlineCss($content, $filter = true, $attributes = null) {}

    /**
     * Adds a javascript resource to the 'js' collection
     * <code>
     * $assets->addJs('scripts/jquery.js');
     * $assets->addJs('http://jquery.my-cdn.com/jquery.js', false);
     * </code>
     *
     * @param string $path 
     * @param boolean $local 
     * @param boolean $filter 
     * @param array $attributes 
     * @return \Phalcon\Assets\Manager 
     */
	public function addJs($path, $local = true, $filter = true, $attributes = null) {}

    /**
     * Adds a inline javascript to the 'js' collection
     *
     * @param string $content 
     * @param boolean $filter 
     * @param array $attributes 
     * @return \Phalcon\Assets\Manager 
     */
	public function addInlineJs($content, $filter = true, $attributes = null) {}

    /**
     * Adds a resource by its type
     * <code>
     * $assets->addResourceByType('css', new \Phalcon\Assets\Resource\Css('css/style.css'));
     * </code>
     *
     * @param string $type 
     * @param \Phalcon\Assets\Resource $resource 
     * @return \Phalcon\Assets\Manager 
     */
	public function addResourceByType($type, \Phalcon\Assets\Resource $resource) {}

    /**
     * Adds a inline code by its type
     *
     * @param string $type 
     * @param \Phalcon\Assets\Inline $code 
     * @return \Phalcon\Assets\Manager 
     */
	public function addInlineCodeByType($type, \Phalcon\Assets\Inline $code) {}

    /**
     * Adds a raw resource to the manager
     * <code>
     * $assets->addResource(new Phalcon\Assets\Resource('css', 'css/style.css'));
     * </code>
     *
     * @param mixed $resource 
     * @param \Phalcon\Assets\Resource $$resource 
     * @return \Phalcon\Assets\Manager 
     */
	public function addResource(\Phalcon\Assets\Resource $resource) {}

    /**
     * Adds a raw inline code to the manager
     *
     * @param \Phalcon\Assets\Inline $code 
     * @return \Phalcon\Assets\Manager 
     */
	public function addInlineCode(\Phalcon\Assets\Resource $code) {}

    /**
     * Sets a collection in the Assets Manager
     * <code>
     * $assets->set('js', $collection);
     * </code>
     *
     * @param string $id 
     * @param \Phalcon\Assets\Collection $collection 
     * @return \Phalcon\Assets\Manager 
     */
	public function set($id, \Phalcon\Assets\Collection $collection) {}

    /**
     * Returns a collection by its id
     * <code>
     * $scripts = $assets->get('js');
     * </code>
     *
     * @param string $id 
     * @return \Phalcon\Assets\Collection 
     */
	public function get($id) {}

    /**
     * Returns the CSS collection of assets
     *
     * @return \Phalcon\Assets\Collection 
     */
	public function getCss() {}

    /**
     * Returns the CSS collection of assets
     *
     * @return \Phalcon\Assets\Collection 
     */
	public function getJs() {}

    /**
     * Creates/Returns a collection of resources
     *
     * @param string $name 
     * @return \Phalcon\Assets\Collection 
     */
	public function collection($name) {}

    /**
     * Traverses a collection calling the callback to generate its HTML
     *
     * @param \Phalcon\Assets\Collection $collection 
     * @param callback $callback 
     * @param string $type 
     */
	public function output(\Phalcon\Assets\Collection $collection, $callback, $type) {}

    /**
     * Traverses a collection and generate its HTML
     *
     * @param \Phalcon\Assets\Collection $collection 
     * @param string $type 
     */
	public function outputInline(\Phalcon\Assets\Collection $collection, $type) {}

    /**
     * Prints the HTML for CSS resources
     *
     * @param string $collectionName 
     */
	public function outputCss($collectionName = null) {}

    /**
     * Prints the HTML for inline CSS
     *
     * @param string $collectionName 
     */
	public function outputInlineCss($collectionName = null) {}

    /**
     * Prints the HTML for JS resources
     *
     * @param string $collectionName 
     */
	public function outputJs($collectionName = null) {}

    /**
     * Prints the HTML for inline JS
     *
     * @param string $collectionName 
     */
	public function outputInlineJs($collectionName = null) {}

}
