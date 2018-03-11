<html>
<head>
</head>
<body>
<?php
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "kittichai.garden@gmail.com"; // GMAIL username
	$mail->Password = "@kittichai"; // GMAIL password
	$mail->From = "kittichai.garden@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = 'Hand Some Boy.'  ;// set from Name
	$mail->Subject = "Hand Some Boy."; 
	$mail->Body = "My Body<b>My Description</b>";

	$mail->AddAddress("vasupol.ch@ku.th", "Mr.tanya"); // to Address

	

	//$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	if($mail->Send()){
		echo 'ส่งเรียบร้อย'	;	
	}
?>
</body>
</html>