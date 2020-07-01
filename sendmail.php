<?php
require_once "contact.html";
if(!empty($_POST["send"])) {
    echo('here');
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "mack_ogbamosa@yahoo.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	mail($toEmail, $subject, $content, $mailHeaders);
}
?>