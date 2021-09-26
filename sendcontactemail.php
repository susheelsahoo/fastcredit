
<?php

if(!empty($_POST["email"])) {
	$name 		= $_POST["name"];
	$email 		= $_POST["email"];
	$phone 		= $_POST["phone"];
	$subject 	= $_POST["msg_subject"];
	$msg 		= $_POST["message"];

	$msg  = "Name : ". $name  . "  phone : " .$phone  . "  subject : " .$subject  . "  message : " .$msg;
	
	$toEmail = "susheelcs24@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, 'Fast Credit Deal Loan Query', $msg, $mailHeaders)) {
	    $message = "Your information is received successfully.";
	    $type = "success";
	}else{
        $message = "Something went wrong. Try again";
	    $type = "danger";
    }
   // echo $message;
    header('Location: contact.php?msg='.$message.'&type='.$type);
}

?>