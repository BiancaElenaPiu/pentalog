<?php

$number1=$_POST['number1'];
$number2=$_POST['number2'];
$operator=$_POST['operator'];

function Calculator(int $number1, int $number2, string $operator)
{
  switch($operator)
  {
    case '+':
      $result=$number1+$number2;
      break;
    
    case '-':
      $result=$number1-$number2;
      break;
   
    case '*':
      $result=$number1*$number2;
      break;
    
    case '/':
      if($number2==0)
      {
        echo 'This number cannot be devided...';
        $result='null';
      }
      else
      {
        $result=$number1/$number2;
      }
      
      break;


  }

  return $result;
}

echo "Result: ".Calculator($number1,$number2,$operator);




?>
<!DOCTYPE>
<html>
  <body>
    <a href=calculator.html>Back to Calculator</a>
  </body>
</html>