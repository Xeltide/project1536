<?php
  //Email and message information.
  $admin = "donnsjuan@gmail.com";
  $email = $_REQUEST['formEmail'];
  $subjectLine = $_REQUEST['formName'];
  $question = $_REQUEST['questionField'];
  
  //Sends email with specified address and information.
  mail($admin, "$subjectLine", $question, "From:" . $email);
  
  //Displays message to inform the user the message was sent.
  echo "Thanks for the message!";
?>