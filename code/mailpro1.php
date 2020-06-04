<?php include 'signup.php';

    
	$name=$_POST['username'];
	
	
	include("class.phpmailer.php");
	include("class.smtp.php");
	$mail = new PHPMailer();
	$mail->IsSMTP(); // set mailer to use SMTP
	$mail->Host = "smtp.gmail.com"; // specify main and backup server
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587; // set the port to use
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "caraevangeline10@gmail.com"; // your SMTP username or your gmail username
	$mail->Password = "jesuschrist25"; // your SMTP password or your gmail password
	$from ="caraevangeline10@gmail.com" ; // Reply to this email
	$to=$_POST['email']; // Recipients email ID
	 // Recipient's name
	
	
	$mail->From = $from;
	$mail->FromName = "Email verification"; // Name to indicate where the email came from when the recepient received
	$mail->AddAddress($to,$name);
	$mail->AddReplyTo($from,"Email verification");
	$mail->WordWrap = 50; // set word wrap
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = "EMAIL_VERIFICATION";
	$mail->Body =  " Confirm your mail
	Click on the link below to Confirm:
	location.href = 'http://localhost/se%20project/confirm.php' ";
	if(!$mail->Send())
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
		echo "Message has been sent";
	}
?>
