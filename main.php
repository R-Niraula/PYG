<?php
//get data from form  

$email= $_POST['email'];

$to = "rhythmozilniraulakroos@gmail.com";
$subject = "Mail From PYG website";
$txt ="Email = " . $email;
$headers = "From:rhythmniraulaoo7@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect

?>