<?php

namespace Phalcon\Image\Adapter;

class Gd extends \Phalcon\Image\Adapter implements \Phalcon\Image\AdapterInterface
{


	public static function check() {}

    /**
     * @param string $file 
     * @param int $width 
     * @param int $height 
     */
	public function __construct($file, $width = null, $height = null) {}

    /**
     * @param int $width 
     * @param int $height 
     */
	protected function _resize($width, $height) {}

    /**
     * @param int $width 
     * @param int $height 
     * @param int $offset_x 
     * @param int $offset_y 
     */
	protected function _crop($width, $height, $offset_x, $offset_y) {}

    /**
     * @param int $degrees 
     */
	protected function _rotate($degrees) {}

    /**
     * @param int $direction 
     */
	protected function _flip($direction) {}

    /**
     * @param int $amount 
     */
	protected function _sharpen($amount) {}

    /**
     * @param int $height 
     * @param int $opacity 
     * @param bool $fade_in 
     */
	protected function _reflection($height, $opacity, $fade_in) {}

    /**
     * @param mixed $watermark 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $opacity 
     */
	protected function _watermark(\Phalcon\Image\Adapter $watermark, $offset_x, $offset_y, $opacity) {}

    /**
     * @param string $text 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $opacity 
     * @param int $r 
     * @param int $g 
     * @param int $b 
     * @param int $size 
     * @param string $fontfile 
     */
	protected function _text($text, $offset_x, $offset_y, $opacity, $r, $g, $b, $size, $fontfile) {}

    /**
     * @param mixed $mask 
     */
	protected function _mask(\Phalcon\Image\Adapter $mask) {}

    /**
     * @param int $r 
     * @param int $g 
     * @param int $b 
     * @param int $opacity 
     */
	protected function _background($r, $g, $b, $opacity) {}

    /**
     * @param int $radius 
     */
	protected function _blur($radius) {}

    /**
     * @param int $amount 
     */
	protected function _pixelate($amount) {}

    /**
     * @param string $file 
     * @param int $quality 
     */
	protected function _save($file, $quality) {}

    /**
     * @param string $ext 
     * @param int $quality 
     */
	protected function _render($ext, $quality) {}

    /**
     * @param int $width 
     * @param int $height 
     */
	protected function _create($width, $height) {}


	public function __destruct() {}

}
