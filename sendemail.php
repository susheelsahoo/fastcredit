
<?php
echo "<pre>";

if(!empty($_POST["email"])) {
	$phone	 		= $_POST["number"];
	$ammount 		= $_POST["ammount"];
	$Company 		= $_POST["Company"];
	$monthly_income = $_POST["monthly_income"];
	$employment_type= $_POST["employment_type_id"];
	$residence 		= $_POST["residence"];
	$salary_mode	= $_POST["salary_mode"];
	$emi 			= $_POST["emi"];
	$full_name 		= $_POST["full_name"];
	$pan_card 		= $_POST["pan_card"];
	$dob	 		= $_POST["dob"];
	$email	 		= $_POST["email"];
	$experience		= $_POST["experience"];
	$Residence_type	= $_POST["Residence_type"];
	$purpose_of_loan= $_POST["purpose_of_loan"];
	$bank_name		= $_POST["bank_name"];
	$current_comp	= $_POST["current_company_tenure"];

	$msg  = "Full Name : ". $full_name  . "\r\n  phone : " .$phone  . "\r\n  Loan Ammount : " .$ammount  . "\r\n  Company : " .$Company  
		. "\r\n  monthly income : " .$monthly_income  . "\r\n  employment type : " .$employment_type  . "\r\n  residence : " .$residence  
		. "\r\n  salary_mode : " .$salary_mode  . "\r\n  emi : " .$emi  . "\r\n  pan_card : " .$pan_card  . "\r\n  dob : " .$dob  
		. "\r\n  email : " .$email  . "\r\n  experience : " .$experience  . "\r\n  Residence_type : " .$Residence_type  
		. "\r\n  purpose_of_loan : " .$purpose_of_loan  . "\r\n  bank_name : " .$bank_name  . "\r\n  current_company_tenure : " .$current_comp  . " in Month ";
	
	$toEmail = "susheelcs24@gmail.com";
	//mail:info@fastcreditdeal.com
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, 'Fast Credit Deal Query', $msg, $mailHeaders)) {
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