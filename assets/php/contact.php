<?php
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];
 
 //check input fields
 
 if(empty($name) || empty ($email) || empty($message))
   {
     echo("please fill the form");
   }
  else
  {
    mail("hp523674@gmail.com","portifolio $message","From: $name <$email>");
     
     echo "<script type= 'text/javascript'>alert('message sent successfully');
          window.history.log(-1);
          </script>";
          
    
    
  }
?>











