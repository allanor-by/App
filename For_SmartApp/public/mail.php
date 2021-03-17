

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

$email = $form_state->getValue('email');
    $firstname = $form_state->getValue('fname');
    $lastname = $form_state->getValue('lname');


    $url = "https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/".$email."/?hapikey=0e6d1d32-53fa-49aa-932e-a6409f64caf8";

    $data = array(
      'properties' => [
        [
          'property' => 'firstname',
          'value' => $fname
        ],
        [
          'property' => 'lastname',
          'value' => $lname 
        ]
      ]
    );


    $json = json_encode($data,true);

    $response = httpClient()->post($url.'&_format=hal_json', [
      'headers' => [
        'Content-Type' => 'application/json'
      ],
        'body' => $json
    ]);
