<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "kaiholzmann@gmail.com";
$subject = "News von Der Hochzeitsseite";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt = $name . " (  Email = " . $email . " ) schreibt: \r\n " . $message;
 
$headers = "From: contactform@dasdingmitdemring.web42.io" . "\r\n" .
            "CC: carolinehiersemann@web.de" . $email;
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html#formular");
?>
