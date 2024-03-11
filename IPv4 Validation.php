<?php

function validation($IP)
{
    $div = '';
    $dots = 0;

    for ($i = 0; $i < strlen($IP); $i++) {
        $char = $IP[$i];

        if ($char >= '0' && $char <= '9') 
        {
            $div .= $char;
        }
        elseif ($char === '.' && $div !== '' && $div <= 255) {
            $div = '';
            $dots++; 
        }
        
        else{
            
            echo "Not a valid IP";
            return false;
        } 
    }if( $dots === 3 && $div !== '' && $div <= 255)
    {
        return "Valid IP";
    }
    else
    {
        return "Invalid Ip";
    }
}   

$IP_check = validation('126.1.1.1');
print($IP_check);



