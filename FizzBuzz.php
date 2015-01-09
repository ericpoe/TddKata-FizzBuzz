<?php

namespace TddKata;

class FizzBuzz
{
    public function analyze($num)
    {
        $result = '';
        if (0 === $num % 3) {
            $result = 'Fizz';
        }
        if (0 === $num % 5) {
            $result .= 'Buzz';
        }

        if (!$result) {
            $result = $num;
        }

        return $result;
    }
}
