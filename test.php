<?php
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['comments'];
    $from = 'From: TangledDemo'; 
    $to = 'zuhair_m_h@yahoo.com; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    

    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }

  
?>
