<?php
if (isset($_POST['submit'])) {
     $name=$_POST['name'];
     $email=$_POST['email'];

     $to='rhythmniraulaoo7@gmail.com';
     $subject='Form submission from pyg';
     $message="Name:".$name;
     $headers="From:".$email;

     if (mail($to, $subject, $message $headers)) {
     	$alert="<script>alert('Submission Successfull. We will contact you. Thank you!');</script>";
     	echo $alert;
     }
     else{
     	echo "Something went wrong";
     }
}


?>