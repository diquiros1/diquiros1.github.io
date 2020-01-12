<?php
   
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $email_from = '2314diego@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

     
    $to = "2314diego@gmail.com";
    $headers = "From: $mailFrom; /r/n";
    $headers .= "Reply-To: $visitor_email /r/n";
    $txt = "You have received an e-mail from ".$name.".\r\n".$message;
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
    

?>
    