 <?php
$to = "allanor.mail@gmail.com"; 
$tema .= "Subject: ".$_POST['Subject']."<br>";
$message .= "First Name: ".$_POST['fname']."<br>";
$message .= "Last Name: ".$_POST['lname']."<br>";
$message .= "E-mail: ".$_POST['email']."<br>"; 
$message .= "message: ".$_POST['message']."<br>"; 
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $tema, $message, $headers); 
$email .= $_POST['email']; 

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "your message has been sent";
} else {
    echo "E-mail  '$email' - wrong\n";
}