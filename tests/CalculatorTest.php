<?php
namespace CalculatorTests;

use \PHPUnit\Framework\TestCase;
use Calculator\Calculator;

class CalculatorTests extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
    protected function tearDown()
    {
        $this->calculator = null;
    }
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
