<?php
namespace Tiga\Framework\Facade;

use Tiga\Framework\Facade\Facade as Facade;

/**
 * Template Facade
 */
class TemplateFacade extends Facade{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    
     public static function getFacadeAccessor() { 
     	
     	return 'template';

     }
}