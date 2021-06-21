<?php 
if(isset($_POST['submit'])){
    $to = "lavasapune5@gmail.com"; // this is your Email address
    $from = "lavasapune5@gmail.com"; // this is the sender's Email address
    $first_name = "Location";
    $last_name = "place";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "form submission";
//    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>