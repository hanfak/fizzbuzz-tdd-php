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

    public function test3ReturnFizzBuzz()
    {
      $this->assertEquals('FizzBuzz', $this->fizzBuzz->change(15));
    }

    public function test4ReturnNumber()
    {
      $this->assertEquals(1, $this->fizzBuzz->change(1));
    }

    public function test5RaiseException()
    {
      $this->setExpectedException(\InvalidArgumentException::class);
      $this->fizzBuzz->change(-1);

    }



}
