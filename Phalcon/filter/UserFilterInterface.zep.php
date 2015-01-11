<?php

namespace Phalcon\Filter;

interface UserFilterInterface
{

    /**
     * Filters a value
     *
     * @param mixed $value 
     * @return mixed 
     */
	public function filter($value);

}
