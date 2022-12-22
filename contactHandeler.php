<?php

  $clientName=$_POST['name'];

  $clientEmail=$_POST['email'];

  $message=$_POST['message'];



  $emailFrom=$clientEmail;

  $emailSubject="New Submission from website";

  $emailBody="Username: $clientName.\n".

             "User Email: $clientEmail.\n".

             "Message: $message.\n";

     $to="rjornamentalfab@gmail.com";
     
    
  $headers="From: $emailFrom \r\n";

  $headers.="Replay-to: $clientEmail\r\n";

  mail($to,$emailSubject,$emailBody,$headers);

  header("Location: index.html");

  



?>