<?php 
	
	$email_from = $_POST['email'];
    $email_subject = $_POST['subject'];
    $email_body = $_POST['msg'];
	
	$to = "mark@marksoerensen.dk";
	
	$headers = "From: $email_from";
	
	mail($to,$email_subject,$email_body,$headers);
	
?>