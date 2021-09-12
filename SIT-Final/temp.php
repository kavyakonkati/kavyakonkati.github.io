<?php 
if(isset($_POST['submit'])){
    $to = "xyz@gmail.com"; 
    $from = "xyz@gmail.com"; 
    $first_name = "Location";
    $last_name = "place";
    $subject = "Form submission";
    $message = "form submission";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>