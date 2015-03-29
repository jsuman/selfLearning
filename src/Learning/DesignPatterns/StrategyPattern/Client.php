<?php
/**
 * User: suman
 * Date: 3/29/2015
 * Time: 3:15 PM
 */

namespace DesignPatterns\StrategyPattern;

class Client
{
  private $_output;

  public function setOutput(Output $outputFormat)
  {
      $this->_output = $outputFormat;
  }
  public function displayOutput()
  {
      $this->_output->display();
  }
} 