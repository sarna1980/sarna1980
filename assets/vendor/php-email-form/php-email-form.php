<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$to = "r.sarna1980@gmail.com";
$headers = "From: $email";
if(mail($to,$subject,$message,$headers)){
echo "Email Sent";
}else{
echo "Email sending failed";
}
}
?>
