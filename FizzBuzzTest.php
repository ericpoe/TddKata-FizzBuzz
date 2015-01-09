<?php

include 'vendor/autoload.php';

use TddKata\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fb;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
    }
    public function testFizzIsThrees()
    {
        $this->assertEquals('Fizz', $this->fb->analyze(3));
    }

    public function testBuzzIsFives()
    {
        $this->assertEquals('Buzz', $this->fb->analyze(5));
    }

    public function testFizzBuzzIsThreesAndFives()
    {
        $this->assertEquals('FizzBuzz', $this->fb->analyze(3*5));
    }

    public function testOtherNumsAreThemselves()
    {
        $this->assertEquals('4', $this->fb->analyze(4));
    }
}
