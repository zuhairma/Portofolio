<?php
 if(isset($_POST['submit']))
{
  $name = $_POST['fullname'];
  $mailfrom = $_POST['email'];
  $sub = $_POST['sub'];
  $comments = $_POST['comments'];
  $mailTo = "zuhair_m_h@yahoo.com";
  $headers = "From: ".$mailfrom 
    $txt = "You've received email from ".$name .\n\n".$comments;
  mail($mailTo, $sub, $txt, $headers);
  header("Location: index.html");
}

?>
