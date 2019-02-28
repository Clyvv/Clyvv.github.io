<?php 
header('Content-Type: application/json');
if(isset($_POST['submit'])){
    $to = "cmawoko@gmail.com"; 
    $from = $_POST['email']; 
    $full_name = $_POST['full_name'];
    $subject = "RSVP for ". $full_name;
    $message =  $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    }
?>