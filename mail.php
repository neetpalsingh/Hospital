<?php
//get data from form  
$name = $_POST['name'];
$number= $_POST['phone'];
$email= $_POST['email'];
$time= $_POST['time'];
$message= $_POST['message'];
$to = "neetpalsingh750@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Phone = " . $number ."\r\n  Email = " . $email . "\r\n  Time = " . $time . "\r\n Message =" . $message .";
$headers = "From: nikhil94100@mail.com" . \r\n ."CC: somebodyelse@example.com ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>