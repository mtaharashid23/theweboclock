<?php
  $action = $_GET['action'];
  if($action == 'form_submission'){
       sendemail();
  }
  if($action == 'price'){
   pricing();
  }  
  function sendemail(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $locationURL = $_POST['locationURL'];
    // $domain = $_POST['domain'];
    // $subject = $_POST['subject'];
    $message = 'Name: '.$name."\r\n";
    $message .= 'Email: '.$email."\r\n";
    $message .= 'Phone: '.$phone."\r\n";
    $message .= 'Message: '.$msg."\r\n";
    $message .= 'Url: '.$locationURL."\r\n";
    // $message .= 'Domain: '.$domain."\r\n";
    // $message .= 'subject: '.$subject."\r\n";
    // Set your email address where you want to receive emails . 
    $to = 'info@theweboclock.com';
    $subject = 'Contact Request From Website';
    $send_email = mail($to,$subject,$message);  
    echo ($send_email) ? 'success' : 'error';
  }
  function pricing(){
    $ycompany = $_POST['ycompany'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $locations = $_POST['locations'];
    $message = 'Company Name: '.$ycompany."\r\n";
    $message .= 'Name: '.$fname."\r\n";
    $message .= 'Email: '.$email."\r\n";
    $message .= 'Phone: '.$phone."\r\n";
    $message .= 'Location: '.$locations."\r\n";
    // Set your email address where you want to receive emails . 
    $to = 'info@theweboclock.com';
    $subject = 'Newsletter Request From Website';
    $send_email = mail($to,$subject,$message);   
    echo ($send_email) ? 'success' : 'error';
  }  
?>