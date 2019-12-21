<?php
   
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
     
    $mailTO = "2314diego@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    mail($mailTO, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
    }
    