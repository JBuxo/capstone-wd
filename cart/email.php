<?php 

$to = "josebuxojr@gmail.com";
$subject = "Cookies Queen Feedback"

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$headers .= "Content-type : txt/html;\r\n";
$headers .= "From: $email";

mail($to, $subject, $comment, $headers)

?>
