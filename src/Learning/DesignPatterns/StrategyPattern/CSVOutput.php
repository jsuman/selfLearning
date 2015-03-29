<?php
/**
 * Created by PhpStorm.
 * User: suman
 * Date: 3/29/2015
 * Time: 3:09 PM
 */

namespace DesignPatterns\StrategyPattern;
class CSVOutput implements Output{

    public function display() {
        echo "display in csv format";
    }
} 