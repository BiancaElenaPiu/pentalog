<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
$username=$_POST['username'];
$password=$_POST['password'];

$file=fopen('users.txt','w');
fwrite($file,$username.":".$password."\n");
fclose($file);
}

if($_SERVER['REQUEST_METHOD']=='post')
{


 $username=$_POST['username'];
 $password=$_POST['password'];

$file=fopen('users.txt','r');

if(fgets($file)==$username.":".$password)
{
  echo "Succesful Login";
}
else
{
  echo"Try again";
}
fclose($file);

}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>

  <body>
    <h1>Login page</h1>
    <form method='post'>
    <label for='username'>Username :</label>
    <input type='text' id='username' name='username'/>
    <br>
    <br>
    <label for='password'>Password :</label>
    <input type='password' id='password' name='password'/>
    <input type='submit' value='Submit'/>

    <br>
    <br>
    <a href='register.php'>Create an account</a>
</form>

  </body>
  
</html>






