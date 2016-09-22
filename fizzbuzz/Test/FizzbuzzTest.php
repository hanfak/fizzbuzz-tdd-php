<?php

namespace fizzbuzz\Test;

use fizzbuzz\src\Fizzbuzz;

class URLTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
      parent::setUp();
      $this->fizzBuzz = new Fizzbuzz();
    }

    public function test1ReturnFizz()
    {
      $this->assertEquals('Fizz', $this->fizzBuzz->change(3));
      $this->assertEquals('Fizz', $this->fizzBuzz->change(6));
    }

    public function test2ReturnBuzz()
    {
      $this->assertEquals('Buzz', $this->fizzBuzz->change(5));
    }
}
