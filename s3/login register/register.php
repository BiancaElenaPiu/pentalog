<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
  </head>

  <body>
    <h1>Register page</h1>

    <form method='post' action='login.php'>
    <label for='username'>Username :</label>
    <input type='text' id='username' name='username'>
    <br>
    <br>
    <label for='password'>Password :</label>
    <input type='password' is='password' name='password'> 
    <input type='submit' value='Submit'/>
</form>
    <form action='login.php'></form>
  </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
$username=$_POST['username'];
$password=$_POST['password'];

$file=fopen('users.txt','w');
fwrite($file,$username.":".$password."\n");
fclose($file);
}
?>



