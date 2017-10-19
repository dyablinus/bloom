<?php
	$errormsg = "";
	
	if (empty($_POST["fname"])) {
		$errormsg .= "Name required. ";
	} else {
		$fname = $_POST["fname"];
	}
	
	if (empty($_POST["email"])) {
		$errormsg .= "Email required. ";
	} else {
		$email = $_POST["email"];
	}
	
	if (empty($_POST["phone"])) {
		$errormsg .= "Phone required. ";
	} else {
		$phone = $_POST["phone"];
	}
	
	if (empty($_POST["message"])) {
		$errormsg .= "Message required. ";
	} else {
		$message = $_POST["message"];
	}
	
	$success = '';
	if (!$errormsg){
		//change receipent email and subject here
		$to = "democontact@mgscoder.com";
		$subject = "New Light Demo Contact Form Submitted";	
		//prepare email body
		$body_message = "";
		$body_message .= "Name: " . $fname ."\n";
		$body_message .= "email: " . $email ."\n";
		$body_message .= "Phone: " . $phone ."\n";
		$body_message .= $message;
		
		$headers = 'From: '. $fname .' <'. $email .'>' . "\r\n" .
					'Reply-To: ' . $email . "\r\n";
		
		$success = mail($to, $subject, $body_message, $headers);
		
	} 
	
	if ($success){
	   echo "success";
	}else{
		echo "Something went wrong: ".$errormsg;
	} 
?>
