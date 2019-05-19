<?php
if (isset($_POST['submit'])) {  
    echo "Your firstname is " . $_POST['fullname'] . "<br>";

    echo "You email is " . $_POST['email'] ;

   }  else {

    echo "Your form is not submitted yet please fill the form and visit again";
  }

?>
