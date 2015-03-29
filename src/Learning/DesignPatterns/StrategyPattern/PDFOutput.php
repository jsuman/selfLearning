<?php
/**
 * Created by PhpStorm.
 * User: suman
 * Date: 3/29/2015
 * Time: 3:14 PM
 */

namespace DesignPatterns\StrategyPattern;


class PDFOutput implements Output {

    public function display() {
        echo "display PDF";
    }
} 