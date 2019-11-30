<?php
      $your_email = 'brightelewendu@yahoo.com'; // Your email address
	$subject = 'Email from MockExamNG'; // Email subject
	
	$name = isset($_POST['name']) && $_POST['name'] ? $_POST['name'] : ''; // Visitor Name 
	$email = isset($_POST['email']) && $_POST['email'] ? $_POST['email'] : ''; // Visitor Email
	$message = isset($_POST['message']) && $_POST['message'] ? $_POST['message'] : ''; // Visitor Message

    $name = sanitizeString($name);
    $email = sanitizeString($email);
    $message = sanitizeString($message);
	

	if($name && $email && $message)
	{
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" .
		'Reply-To: '.$email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
			
		//------------------------------------------------
		// Send out email to site admin
		//------------------------------------------------
		if(@mail($your_email, $subject, $message, $headers))
			echo "<script type=\"text/javascript\">alert('Your data have been sent.Thanks for contacting us.')</script> ";
		else
			echo "<script type=\"text/javascript\">alert('Your data have not been sent.Sorry try it later.')</script> ";
	}
	else
	{
		echo "<script type=\"text/javascript\">alert('Your data have not been sent.Please fill all feilds correctly.')</script> ";
	}

    function sanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $var;
}
?>
