<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "stephanieolaiya@gmail.com";
$subject = $_POST['subject'];

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = " 
    . $email . "\r\n Message =" . $message;

$headers = "From: stephanieolaiya.github.io" . "\r\n" .;
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:contact.html");
?>