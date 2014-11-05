<?php
	$errors = '';
	$myemail = 'listproc@lists.Colorado.EDU'; //Subscription E-mail
	
	//Check if empty
	if(empty($_POST['first_name'])  || 
	   empty($_POST['last_name']) ||
	   empty($_POST['email'])
	{
		$errors .= "\n Error: all fields are required";
	}
 
 	//Assign post responses as variables
	$first_name = $_POST['first_name']; 
	$last_name = $_POST['last_name'];
	$email_address = $_POST['email']; 
 
 	//Error-check if an actual e-mail address
	if (!preg_match(
	"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
	$email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}

	//If no errors, send e-mail
	if( empty($errors))
	{
		$to = $myemail;
 
		$email_subject = "Add to CU WIC Mailing List";
 
		$email_body = "subscribe cuwic $first_name $last_name";
 
		$headers = "From: $myemail\n";
 
		$headers .= "Reply-To: $email_address";
 
		mail($to,$email_subject,$email_body,$headers);
 
 		//Once the email has been sent, reload the home page.
		header('Location: /index.php');
 
	}

?>