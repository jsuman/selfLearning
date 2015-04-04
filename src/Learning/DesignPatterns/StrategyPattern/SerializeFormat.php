<?php
/**
 * Created by PhpStorm.
 * User: suman
 * Date: 4/4/2015
 * Time: 11:09 AM
 */

namespace DesignPatterns\StrategyPattern;


class SerializeFormat implements Output
{
    private $_data = [];
    public function display()
    {
        return serialize($this->_data);
    }

} 