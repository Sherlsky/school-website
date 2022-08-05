<?php
$name = _POST['name'];
$visitor_email = _POST['email'];
$subject = _POST['subject'];
$message = _POST['message'];

$email-from = 'marsherlskydecaffrey047@gmail.com';

$email-subject = 'New Form Submission';

$email-body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";


$to = 'lilsherlsky@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email-subject,$email-body,$headers);

header("location: contant.html");


?>