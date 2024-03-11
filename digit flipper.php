
<?php 

function reverseDigits($number) 
{ 
    $reversed_number = 0; 
    while($number > 1) 
    { 
        $remainder = $number % 10;
        $reversed_number = ($reversed_number*10) +$remainder;
        $number = $number / 10;
    }   
    return $reversed_number; 
} 
  


echo reverseDigits(123456789);

?>