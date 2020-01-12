<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $to = "2314diego@gmail.com";
        $subject = 'Form Submission';
        $message="Name: ".$name."\n." ."Phone: ".$phone. "\n". "Wrote the following: "."\n\n"/$msg;
        $headers="From: ".$email;

        if mail($mailTo, $subject, $txt, $headers)){
            echo "<h1>Sent Successfully! Thank you"."".$name.",We will contact</h1>";
        }
        else{
            echo "Something went wrong!";
        }

    }
?>