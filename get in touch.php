<?php
  $name=$_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];



  $email_from = 'bimalboby29@gmail.com';

  $email_subject = "new form sunmission";

  $email_body = "User Name: $name. \n".
                   "user Email:$visitor_email.\n".
                   "user Message: $message.\n";


$to = "bimalboby007@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Replt-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:index.html");

?>
