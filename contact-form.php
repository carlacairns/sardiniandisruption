<?php // not in use, just basic layout
    $name =$_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "";
    $body= "";

    $body .= "From: " .$name. "\r\n";
    $body .= "Email: " .$email. "\r\n";
    $body .= "Message: " .$message. "\r\n";

    mail($to, $subject,$body );
?>