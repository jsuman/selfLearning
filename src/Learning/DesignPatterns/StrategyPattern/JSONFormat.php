<?php
/**
 * Created by PhpStorm.
 * User: suman
 * Date: 4/4/2015
 * Time: 11:06 AM
 */

namespace DesignPatterns\StrategyPattern;


class JSONFormat implements Output
{
    private $_data = [];
    public function display()
    {
        return json_encode($this->_data);
    }

} 