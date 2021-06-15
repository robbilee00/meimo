<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    
  if (!empty($_POST))
  {
    if (empty($_POST['name']))
    {
      $nameError='Name field cannot be blank';
      $errorsFound = true;
    }else
    { if( preg_match("#^[a-zA-Z \-.']{1,100}$#", ($_POST['name']) )){
        $name = ($_POST['name']);
            } else {
                    $name = ($_POST['name']);
                    $nameError="Name field must not contain numbers or symbols other than -,')";
                    $errorsFound = true;
                    }
    }
      
      
      if (empty($_POST['email']))
    { 
      $emailError='Email field cannot be blank';
      $errorsFound = true;
      }else{
      
      
      if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorsFound = true;
        $email = ($_POST['email']);
        $cleanEmail=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $emailError="Did you want to type $cleanEmail?"; 
         
      }else{
          $email = ($_POST['email']);
      }
} 
      if (!empty($_POST['mobile'])){
      if( preg_match("#^(04|05)[0-9]{8}$#", ($_POST['mobile']) )){
        $mobile = ($_POST['mobile']);
            } else {
                    $mobile = ($_POST['mobile']);
                    $mobileError="Please enter a valid Australian Mobile number";
                    $errorsFound = true;
                    }
      }
      
       if (!empty($_POST['message'])){
      $message = htmlspecialchars(preg_replace('/[^\n[:print:]]/','',$_POST['message']));
          
      }
      
  
      if (!empty($_POST['subject'])){
      $subject = preg_replace('/[^\n[:print:]]/','',$_POST['message']);
          
      }
      
  }

    
}

?>