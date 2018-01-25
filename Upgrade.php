<?php namespace ZN\Console;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\ZN;

/**
 * @command upgrade
 * @description upgrade
 */
class Upgrade
{
    /**
     * Magic constructor
     * 
     * @param string $method
     * @param string $parameters
     * 
     * @return void
     */
    public function __construct()
    {   
        new Result(ZN::upgrade());
    }
}