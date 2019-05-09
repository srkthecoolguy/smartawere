<?php
	if(isset($_POST["email"])){
		$email=$_POST['email'];
		$email =filter_var($email, FILTER_SANITIZE_EMAIL);
		$email= filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$email){
			$data = '{"result": "failed"}';
		}
		else{
			$subject = 'New Request - '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$name = $_POST['name'];
			$company = $_POST['company'];
			$phone = $_POST['phone'];
			$query = $_POST['query'];
			
			$headers = 'From:'. $email . "\r\n";
			$headers .= 'Cc:'. "raj@smartawe.com, selvin@smartawe.com, wavierbro@yahoo.com, pratheep@smartawe.com" . "\r\n";
			
			$message = "Name - ".$name."\r\nCompany - ".$company."\r\nPhone - ".$phone."\r\nEmail - ".$email."\r\nQuery - ".$query;
			// Message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap($message, 70);

			mail("contact@smartawe.com", $subject, $message, $headers);
			$data = '{"result": "success"}';
		}
		echo $data;
	}