<?php

namespace Phalcon\Image;

interface AdapterInterface
{

    /**
     * @param int $width 
     * @param int $height 
     * @param int $master 
     */
	public function resize($width = null, $height = null, $master = Image::AUTO);

    /**
     * @param int $width 
     * @param int $height 
     * @param int $offset_x 
     * @param int $offset_y 
     */
	public function crop($width, $height, $offset_x = null, $offset_y = null);

    /**
     * @param int $degrees 
     */
	public function rotate($degrees);

    /**
     * @param int $direction 
     */
	public function flip($direction);

    /**
     * @param int $amount 
     */
	public function sharpen($amount);

    /**
     * @param int $height 
     * @param int $opacity 
     * @param bool $fade_in 
     */
	public function reflection($height, $opacity = 100, $fade_in = false);

    /**
     * @param mixed $watermark 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $opacity 
     */
	public function watermark(\Phalcon\Image\Adapter $watermark, $offset_x = 0, $offset_y = 0, $opacity = 100);

    /**
     * @param string $text 
     * @param int $offset_x 
     * @param int $offset_y 
     * @param int $opacity 
     * @param string $color 
     * @param int $size 
     * @param string $fontfile 
     */
	public function text($text, $offset_x = 0, $offset_y = 0, $opacity = 100, $color = "000000", $size = 12, $fontfile = null);

    /**
     * @param mixed $watermark 
     */
	public function mask(\Phalcon\Image\Adapter $watermark);

    /**
     * @param string $color 
     * @param int $opacity 
     */
	public function background($color, $opacity = 100);

    /**
     * @param int $radius 
     */
	public function blur($radius);

    /**
     * @param int $amount 
     */
	public function pixelate($amount);

    /**
     * @param string $file 
     * @param int $quality 
     */
	public function save($file = null, $quality = 100);

    /**
     * @param string $ext 
     * @param int $quality 
     */
	public function render($ext = null, $quality = 100);

}
