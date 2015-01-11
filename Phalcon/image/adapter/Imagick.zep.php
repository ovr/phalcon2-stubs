<?php

namespace Phalcon\Image\Adapter;

class Imagick extends \Phalcon\Image\Adapter implements \Phalcon\Image\AdapterInterface
{

    protected $_version = 0;

    /**
     * Checks if Imagick is enabled
     *
     * @return boolean 
     */
	public static function check() {}

    /**
     * \Phalcon\Image\Imagick constructor
     *
     * @param string $file 
     * @param int $width 
     * @param int $height 
     * @param string $$file 
     */
	public function __construct($file, $width = null, $height = null) {}

    /**
     * Execute a resize.
     *
     * @param int $width 
     * @param int $height 
     * @param int $$width 
     * @param int $$height 
     */
	protected function _resize($width, $height) {}

    /**
     * This method scales the images using liquid rescaling method. Only support Imagick
     *
     * @param int $width 
     * @param int $height 
     * @param int $delta_x 
     * @param int $rigidity 
     * @param int $$width new width
     * @param int $$height new height
     * @param int $$delta_x How much the seam can traverse on x-axis. Passing 0 causes the seams to be straight.
     * @param int $$rigidity Introduces a bias for non-straight seams. This parameter is typically 0.
     */
	protected function _liquidRescale($width, $height, $delta_x, $rigidity) {}

    /**
     * Execute a crop.
     *
     * @param int $width 
     * @param int $height 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $$width 
     * @param int $$height 
     * @param int $$offset_x 
     * @param int $$offset_y 
     */
	protected function _crop($width, $height, $offset_x, $offset_y) {}

    /**
     * Execute a rotation.
     *
     * @param int $degrees 
     * @param int $$degrees 
     */
	protected function _rotate($degrees) {}

    /**
     * Execute a flip.
     *
     * @param int $direction 
     * @param int $$direction 
     */
	protected function _flip($direction) {}

    /**
     * Execute a sharpen.
     *
     * @param int $amount 
     * @param int $$amount 
     */
	protected function _sharpen($amount) {}

    /**
     * Execute a reflection.
     *
     * @param int $height 
     * @param int $opacity 
     * @param bool $fade_in 
     * @param int $$height 
     * @param int $$opacity 
     * @param boolean $$fade_in 
     */
	protected function _reflection($height, $opacity, $fade_in) {}

    /**
     * Execute a watermarking.
     *
     * @param mixed $image 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $opacity 
     * @param \Phalcon\Image\Adapter $$watermark 
     * @param int $$offset_x 
     * @param int $$offset_y 
     * @param int $$opacity 
     */
	protected function _watermark(\Phalcon\Image\Adapter $image, $offset_x, $offset_y, $opacity) {}

    /**
     * Execute a text
     *
     * @param string $text 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $opacity 
     * @param int $r 
     * @param int $g 
     * @param int $b 
     * @param int $size 
     * @param string $fontfile 
     * @param int $$offset_x 
     * @param int $$offset_y 
     * @param int $$opacity 
     * @param int $$r 
     * @param int $$g 
     * @param int $$b 
     * @param int $$size 
     * @param string $$fontfile 
     */
	protected function _text($text, $offset_x, $offset_y, $opacity, $r, $g, $b, $size, $fontfile) {}

    /**
     * Composite one image onto another
     *
     * @param mixed $image 
     * @param \Phalcon\Image\Adapter $$mask mask Image instance
     */
	protected function _mask(\Phalcon\Image\Adapter $image) {}

    /**
     * Execute a background.
     *
     * @param int $r 
     * @param int $g 
     * @param int $b 
     * @param int $opacity 
     * @param int $$r 
     * @param int $$g 
     * @param int $$b 
     * @param int $$opacity 
     */
	protected function _background($r, $g, $b, $opacity) {}

    /**
     * Blur image
     *
     * @param int $radius 
     * @param int $$radius Blur radius
     */
	protected function _blur($radius) {}

    /**
     * Pixelate image
     *
     * @param int $amount 
     * @param int $$amount amount to pixelate
     */
	protected function _pixelate($amount) {}

    /**
     * Execute a save.
     *
     * @param string $file 
     * @param int $quality 
     * @param string $$file 
     * @param int $$quality 
     * @return boolean 
     */
	protected function _save($file, $quality) {}

    /**
     * Execute a render.
     *
     * @param string $extension 
     * @param int $quality 
     * @param string $$type 
     * @param int $$quality 
     * @return string 
     */
	protected function _render($extension, $quality) {}

    /**
     * Destroys the loaded image to free up resources.
     */
	public function __destruct() {}

    /**
     * Get instance
     *
     * @return \Imagick 
     */
	public function getInternalImInstance() {}

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @param int $type Refer to the list of resourcetype constants (@see http://php.net/manual/ru/imagick.constants.php#imagick.constants.resourcetypes.)
     * @param int $limit The resource limit. The unit depends on the type of the resource being limited.
     */
	public static function setResourceLimit($type, $limit) {}

}
