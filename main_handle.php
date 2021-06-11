<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $to='rhythmniraulaoo7@gamil.com';
    $subject='Mail from PYG site';
    $txt="Name: ".$name."\n"."Email: ".$email."\n"."Message: ".$message;
    $headers="From: ".$email;
    
    if(mail($to, $subject, $txt, $header)){
        echo 'alert("Thank you ".$name."we will connect you soon")';
    }else{
        echo 'alert("Something went wrong")';
    }
}




?>