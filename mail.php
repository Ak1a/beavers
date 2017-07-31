<?php
     $from = $_POST["email"];
     $to = "another_email";
     $subject = $_POST['subject'];
     $message = $_POST['message'].$_POST["tel"];
     $headers = "From:" . $from;

 mail($to,$subject,$message, $headers);
header('Location: https://ak1a.github.io/beavers/index.html');
exit;
	
