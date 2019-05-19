<?php
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['comments'];
    $from='zuhairm@outlook.com';
    $to = 'zuhair_m_h@yahoo.com; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    

mail ($to, $subject, $body, $from)
        echo '<p>Your message has been sent!</p>';
   
  
?>
