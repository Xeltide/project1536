<?php
  //Email information
  $admin = "donnsjuan@gmail.com";
  $email = $_REQUEST['formEmail'];
  $subjectLine = $_REQUEST['formName'];
  $question = $_REQUEST['questionField'];
  
  //send email
  mail($admin, "$subjectLine", $question, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
?>