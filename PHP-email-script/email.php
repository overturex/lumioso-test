<?php

$to = "user@domain.com";
$subject = "Test Email";
$message = "This is a test of the email system.";
$from = "admin@domain.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?> 