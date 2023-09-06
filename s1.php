
<?php


// first problem
{

  echo "First problem :<br>For an array of elements count the number of occurrences of a given element.<br>";

 $vector=array(1,2,2,2,3,4,5,6,7);
 $n=count($vector);


 function number_of_occurrences($element,$number)
 {
  $n=0;
   foreach($element as $value)
   {
    if($value==$number)
    {
      $n++;
    }
   }

   return $n;
 }

 echo "<br>The number 2 appears ".number_of_occurrences($vector,2)." times.<br>";
}

//second problem
{
  echo "<br>Second problem:<br>";
  echo "Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop.";
  $vect2=array();
  function insert(&$vector2,$nrElements)
  {
    echo "<br>";
    
    for($i=0;$i<$nrElements;$i++)
    {
      $vector2[$i]=rand(0,9);
      echo $vector2[$i]."\n";
    }

  }

  insert($vect2,10);

 
   function search($vector,$number,$nr)
  {
    foreach($vector as $element)
    {
        if($element==$number)
      {
      echo "<br>Number found";
      break;
      }
      
    }
  }

  search($vect2,0,10);
}

//third problem

{
  echo"<br><br>Third problem:<br>";
  echo "For a given array, reverse the order of the elements.<br>";
   $vect3=array(1,2,3,4,5,6,7,8,9,10);
   $nvect=count($vect3);


   echo"<br>The initial array is:<br>";
   for($k=0;$k<10;$k++)
   {
    echo $vect3[$k]."\n";
   }

   function reverse(&$vector,$start,$end)
   {
    while($start<$end)
    {
      $aux=$vector[$start];
      $vector[$start]=$vector[$end];
      $vector[$end]=$aux;
      $start++;
      $end--;

    }
   }   

   reverse($vect3,0,9);

   echo "<br>The inverted array is : <br>";
   for($j=0;$j<10;$j++)
   {
    echo $vect3[$j]."\n";
   }
   echo"<br>";
}

//fourth problem
{
  echo "<br>Fourth problem :<br>";
  echo "Verify if a string is a palindrome and return the result.<br>";

  $a="heh";
  $nmb=strlen($a);

 
  
  
  function palindrom($string,$nmb)
  { 
     $l=0;
     $h=$nmb-1;

      while($l<$h)
   {
      if($string[$l]==$string[$h])
      {
        return True;
      }
      else
      {
        return False;
        
      }
    $l+=1;
    $h-=1;
    }

  }

  if(palindrom($a,$nmb)==True)
  {
    echo"<br>The string is a palindrome!";
  }
  else{
    echo "<br>The string is NOT a palindrome!";
  }
  
  

}

?>