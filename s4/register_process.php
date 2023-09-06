<?php

require_once 'config.php';


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  //input data in the database
  $stmt=$pdo->prepare('INSERT INTO users (username,password) VALUES (:username,:password)');
  $stmt->bindParam(':username', $username, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);


  if($stmt->execute())
  {
    echo "Registration successful. <a href='login.html'>Login</a>";

  }
  else
  {
    echo 'Error occured during registration';
  }



}


?>