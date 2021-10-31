<?php

function checkSession()
{
  session_start();

  $urlFile = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

  if ($urlFile == "index.php") {

  if (isset($_SESSION["email"])) {
    header("Location:./panel.php");
} else {
    // Check for session error
    if ($alert = checkLoginError()) return $alert;

    // Check for info session variable
    if ($alert = checkLoginInfo()) return $alert;

    // Check for logout
    if ($alert = checkLogout()) return $alert;
}
} else {

  if(!isset($_SESSION["email"])) 
  {
    $_SESSION["loginError"]= "This is a private area. Please log in.";
    header("Location: ./index.php");
  }

 
}
}


function validate()
{
  session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];



  if(checkUser($email,$password)) {
    $_SESSION["email"]= $email;
    header("Location: ../panel.php");
  }
else
{
  $_SESSION["loginError"] = "Wrong email or password!";
  header("Location: ../index.php");
}
}


function checkUser(string $email,string $password)
{
  $emaildb = "kikekoko@assembler.com";
  $passworddb = "Kike123456";

  $passDbEnc = password_hash($passworddb,PASSWORD_DEFAULT);

  if($email == $emaildb && password_verify($password,$passDbEnc)) return true;
  else return false;
}


function destroySession() 
{
  session_start();

  unset($_SESSION);
  
  if (ini_get("session.use_cookies"))
  {
  $params = session_get_cookie_params();
  setcookie(
    session_name(),
    "",
    time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]
  );
}
  
  session_destroy();
  
  header("Location: ../index.php?logout=true");
  
}

function checkLoginError()
{
    if (isset($_SESSION["loginError"])) {
        $errorText = $_SESSION["loginError"];
        unset($_SESSION["loginError"]);
        return ["type" => "danger", "text" => $errorText];
    }
}

function checkLoginInfo()
{
    if (isset($_SESSION["loginInfo"])) {
        $infoText = $_SESSION["loginInfo"];
        unset($_SESSION["loginInfo"]);
        return ["type" => "primary", "text" => $infoText];
    }
}

function checkLogout()
{
    if (isset($_GET["logout"]) && !isset($_SESSION["email"])) return ["type" => "primary", "text" => "Logout succesful"];
}