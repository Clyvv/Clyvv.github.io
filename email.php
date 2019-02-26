<?php 
header('Content-Type: application/json');
if(isset($_POST['submit'])){
    $to = "cmawoko@gmail.com"; 
    $from = $_POST['email']; 
    $fullName = $_POST['fullName'];
    $subject = "RSVP for ". $fullName;
    $message =  $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>