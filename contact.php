<?php
require("sendgrid/sendgrid-php.php");

$sendgrid = new SendGrid('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');

$email = new SendGrid\Email();
$email
    ->addTo('wittsparks@yahoo.com')
    ->setFrom('wittsparks@gmail.com')
    ->setSubject('Message from Wittsparks.com')
    ->setText($_POST['name']." at ".$_POST['email']." says: ".$_POST['message'])
    ->setHtml($_POST['name']." at ".$_POST['email']." says:<br/>".$_POST['message'])
;

$sendgrid->send($email);
/*
$result = mail("wittsparks@yahoo.com", "Email from wittsparks.com",
   $_POST['name']." at ".$_POST['email']." says:<br/>".$_POST['message']);
*/

error_log("A contact form was submitted to wittsparks.com:");
error_log(var_export($_POST, true));
?>
