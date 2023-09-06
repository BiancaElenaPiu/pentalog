<?php

session_start();
require_once 'config.php';

if($_SERVER["REQUEST_METHOD"]=='POST')
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $stmt=$pdo->prepare("SELECT * FROM users WHERE username = :username ");
  $stmt->bindParam(":username", $username, PDO::PARAM_STR);
  $stmt->execute();
  $user=$stmt->fetch(PDO::FETCH_ASSOC);

  if ($password == $user['password'])
  {
    $_SESSION['user_id'] = $user['id'];
    header("Location: profile.php");
    exit();
  }
  else
  {
    echo " Invalid password! <a href='login.html'>Login page</a> ";
}

}



?>