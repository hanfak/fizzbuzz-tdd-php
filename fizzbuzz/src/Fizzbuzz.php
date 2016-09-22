<?php

namespace fizzbuzz\src;

class Fizzbuzz
{
    public function change($number)
    {
      if($number % 3 === 0) {
        return 'Fizz';
      }
      return 'Buzz';
    }
}
