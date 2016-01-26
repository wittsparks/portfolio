<?php
$result = mail("wittsparks@yahoo.com", "Email from wittsparks.com",
   $_POST['name']." at ".$_POST['email']." says:<br/>".$_POST['message']);

error_log("A contact form was submitted to wittsparks.com:");
error_log(var_export($_POST, true));
?>
