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

    public function testOneReturnFizz()
    {
      $result = $this->fizzBuzz->change(3);

      $this->assertEquals('Fizz', $result);
    }
}
