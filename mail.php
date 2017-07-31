<?php
     $from = $_POST["email"];
     $to = "another_email";
     $subject = $_POST['subject'];
     $message = $_POST['message'].$_POST["tel"];
     $headers = "From:" . $from;
echo "ЛОЛ0";
 mail($to,$subject,$message, $headers);
	
