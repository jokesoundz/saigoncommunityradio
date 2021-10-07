<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['interest']))
$interest = $_POST['interest'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];


$content="From: $name";
$recipient = "saigoncommunityradio@hotmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>