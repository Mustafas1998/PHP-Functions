<?php
function filter($text)
{
    $myarray = array();
    foreach (str_split($text) as $char)
    {
     if (ctype_digit($char))  
        {
            array_push($myarray,$char);
            
        }
    }asort($myarray);

    print_r($myarray);
}

filter("123jdfsdjf899984532718341293!@&!$*!@");


