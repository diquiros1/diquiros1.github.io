<?php
   
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = '2314diego@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

     
    $to = "2314diego@gmail.com";

    $headers = "From: $mailFrom; /r/n";

    $headers .= "Reply-To: $visitor_email /r/n"
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    

?>
    