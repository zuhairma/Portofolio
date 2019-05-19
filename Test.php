<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$comments = $_POST['comments'];

$email_from = "Zuhairm@outlook.com";
$subject    = "New Form Submission";
$email_body = "Username: $fullname.\n".
              "User Email: $email.\n".
              "Subject: $sub.\n".
              "User Comments: $comments.\n".
$to = "Zuhair_m_h@yahoo.com";

$headers = "From: $email_from \r\n";
$headers .="Reply-to: $email \r\n";
mail($to, $subject, $email_body, $headers);
header("Location: index,html");


?>