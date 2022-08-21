<?php
/*
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;	
	*/
?>
<?php

	if(isset($_POST['email'])){
		
		$name= ($_POST['name']);
		$email= ($_POST['email']);
		$message=($_POST['message']);

		//echo $status;
		$connection = mysqli_connect("localhost","root","","inco_panel");
		
		//you need to add this
		//mysqli_query($db, "SET NAMES 'utf8'");
		//mysqli_query($connection, "SET CHARACTER_SET utf8");

		
		$command =mysqli_query($connection,"Insert into contact (contact_id, name,email,message)values(NULL,'$name','$email','$message')");
		if($command==1){
		echo "<div align='center'>Successfully Inserted...</div>";
		}
	}
	?>