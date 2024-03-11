<?php

function decimal_to_binary($number)
{
    $binary = decbin($number);
    return $binary;
}

$binary_number = decimal_to_binary("20");
print($binary_number);




