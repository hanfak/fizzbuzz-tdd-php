<?php

namespace fizzbuzz\src;

class Fizzbuzz
{
    public function change($number)
    {
      if($number == 3) {
        return 'Fizz';
      }
      return 'Buzz';
    }
}
