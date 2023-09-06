<!-- config -> configuration file -->
<?php

$host='localhost';
$dbname='database';
$dsn="mysql:host=$host;dbname=$dbname;charset=UTF8";
try
{
  $pdo=new PDO($dsn,'root','');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  if($pdo)
  {
    echo 'Connected to the database succesfully!';
  }
}catch (PDOException $e)
{
  echo $e->getMessage();
}


?>