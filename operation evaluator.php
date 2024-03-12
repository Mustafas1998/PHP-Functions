<?php

function evaluator($operation)
{
    $operands = explode(' ', $operation);

    $num1 = (int) $operands[0];
    $num2 = (int) $operands[2];
    $sign = $operands[1];

    if ($sign == '+')
    {
        return $num1 + $num2;
    }
    else if ($sign == '-')
    {
        return $num1 - $num2;
    } 
    else if ($sign == '*')
    {
        return $num1 * $num2;
    }
    else if ($sign == '/')
    {
        if ($num2 != 0)
        {
            return $num1 / $num2;
        }
        else{
            return "Error";
        }
    }

}

$expression = evaluator("10 * 5");
print $expression;