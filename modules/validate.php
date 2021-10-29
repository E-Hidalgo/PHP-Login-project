<?php

function validate() 
{
  session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];
  
$emaildb = "kikekoko@assembler.com";
$passworddb = "Kike123456";

if($passworddb === $password && $emaildb === $email)
{
  $_SESSION["email"] =$email;
  header("Location: ../panel.php");
}
else
{
  header("Location: ../index.php");
}
};

validate();