<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    if (($name=="")||($email=="")||($message=="")||($subject==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        mail("lucasyuan1528@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
?>