<?php

function dec_to_bin($number)
{
    if($number === 0)
    {
        return "0";
    }
    $binary = " ";
    while($number >0)
    {
        $remainder = $number % 2;
        $binary = $remainder.$binary;
        $number = (int)($number / 2);

    }
    return $binary;

}

$binary_number = dec_to_bin("10");
print($binary_number);

