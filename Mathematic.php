<?php

namespace App;


class Mathematic
{
    public function multiplication(int $a, int $b)
    {
        if (($a == 0) || ($b == 0))
            return 0;
        else
            return ($a + $this->multiplication($a, $b - 1));
    }
}


$math = new Mathematic();
$result = $math->multiplication(7,4);
