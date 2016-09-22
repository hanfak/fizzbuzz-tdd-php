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
      elseif($this->divisibleBy($number, 5)) {
        return 'Buzz';
      }
      return $number;
    }

    private function divisibleBy($number, $divisor)
    {
      return $number % $divisor === 0;
    }
}
