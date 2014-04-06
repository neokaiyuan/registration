<?php 
  require 'PHPMailerAutoload.php'
  // Check if the "from" input field is filled out
  echo "Thank you for sending us feedback";
  if (isset($_POST["email"]))
    {
    $dest = "kaiyuan.neo@gmail.com";
    $subject = "[NEW SIGNUP] New member company";
    $message = $_POST["comments"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    $from = $_POST["email"]; // sender
    // send mail
    mail("kaiyuan.neo@gmail.com", $subject, $message, null, -f$from);
    }
?>

<script> console.log('hello'); </script>
<a href="http://svangel.com">SV Angel Homepage</a>