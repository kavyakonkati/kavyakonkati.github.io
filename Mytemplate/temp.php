<?php 
if(isset($_POST['submit'])){
    $to = "kavyak07514@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
    $subject = "Form submission";
    $message = $_POST['name']." ". "is writing you the following message" ." ". $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	if(filter_var($from, FILTER_VALIDATE_EMAIL)){
		if(mail($to,$subject,$message,$headers)){
			echo "Mail Sent";
		}else{
			echo "Mail Not Sent";
		}
	}
}
?>