<?php

namespace fizzbuzz\src;

class Fizzbuzz
{
    public function change($number)
    {
      if($this->divisibleBy($number, 15)) {
        return 'FizzBuzz';
      }
      elseif($this->divisibleBy($number, 3)) {
        return 'Fizz';
      }
      return 'Buzz';
    }

    private function divisibleBy($number, $divisor)
    {
      return $number % $divisor === 0;
    }
}
