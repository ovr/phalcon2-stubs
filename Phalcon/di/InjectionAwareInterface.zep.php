<?php

namespace Phalcon\Di;

interface InjectionAwareInterface
{

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\DiInterface $dependencyInjector 
     */
	public function setDI(\Phalcon\DiInterface $dependencyInjector);

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\DiInterface 
     */
	public function getDI();

}
