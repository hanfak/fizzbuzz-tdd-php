<?php

namespace fizzbuzz\src;

class Fizzbuzz
{
    public function change($number)
    {
      if($number < 1){
        throw new \InvalidArgumentException("Input is less than 1");
      }
      if($this->divisibleBy($number, 15)) {
        return 'FizzBuzz';
      }
      if($this->divisibleBy($number, 3)) {
        return 'Fizz';
      }
      if($this->divisibleBy($number, 5)) {
        return 'Buzz';
      }
      return $number;
    }

    private function divisibleBy($number, $divisor)
    {
      return $number % $divisor === 0;
    }
}
