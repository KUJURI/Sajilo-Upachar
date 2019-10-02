<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "sajilo@upachar.com";
  $email = $_REQUEST['email'];
  $subject = "Appointment Booking Information";
  $comment ='Thank You for Using Sajilo Upachar';
  $comment .= '<br><br>Name of Patient:'.$_REQUEST['firstname'].' '.$_REQUEST['lastname'];
  $comment .='<br>Age:'.$_REQUEST['age'];
  $comment .= '<br>Name of Therapy Center:'.$_REQUEST['centername'];
  $comment .='<br>Name of Therapy:'.$_REQUEST['tname'];
  $comment .= '<br>Scheduled date:'.$_REQUEST['date'];
  $comment .='<br>Scheduled Time:'.$_REQUEST['time'];
  $comment .= '<br>Transportation Booked:'.$_REQUEST['transport'];
  $comment .= '<br>If booked transportation, the bus will arrive 1hr before your scheduled time.Thank You';
  
  
  //send email
  mail($email, "$subject", $comment, "From:" . $admin_email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {}
?>