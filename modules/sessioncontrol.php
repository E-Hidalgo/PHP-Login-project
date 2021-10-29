<?php

function validate()
{
  session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];
  
  echo $email . $password;

    
$emaildb = "kikekoko@assembler.com";
$passworddb = "Kike123456";

if($passworddb === $password && $emaildb === $email)
{
  header("Location: ../panel.php");
}
}