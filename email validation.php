<?php

 function withRegex($email)
   {
	$regex = '/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/';

         if (preg_match($regex, $email)) {
            http_response_code(200);
            return json_encode(array('status' => true, 'message' => 'Valid email'));
         } else {
            http_response_code(400);
            return json_encode(array('status' => false, 'message' => 'Invalid email'));
         }
   }

$validation = withRegex('ali98@gmail.com');
print($validation);



