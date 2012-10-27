<?php
require_once("Dollar.php");

class MoneyTest extends PHPUnit_Framework_TestCase
{

    /**
     * testMultiplication
     *
     * @access public
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }



}


