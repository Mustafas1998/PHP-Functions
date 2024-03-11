<?php

function ipv4_validator($IP)
{
    if (filter_var($IP, FILTER_VALIDATE_IP)) 
    {
        return "Valid IP";
    }else 
    {
        return "Invalid IP";
    }
}

$validation = ipv4_validator("127.1.1.1");
print($validation);

