<?php

// Write a simple class that displays a message like "Hello, my name is Alex", 
//where "Alex" is an argument value of the method from the class;
echo "First problem<br><br>";
{
  class Conversation
  {
    public function introduction($name)
    {
      
      return "Hello, my name is ".$name;
    }
  }

  $person=new Conversation();
  $result=$person->introduction("Alex");
  echo $result;

}

echo "<br><br>Second problem <br>"; // tb sa o termin

// Write classes that describe types of vehicles, starting from a base class and extending it. 
//advanced: at least 8 classes, 3 abstract methods and 2 non-abstract)
{
  abstract class Vehicle
  {
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand,$model,$year) //initializare
    {
      $this->brand=$brand;
      $this->model=$model;
      $this->year=$year;
    }

    abstract function start(); //1st abstract method
    abstract function accelerate(); //2nd abstract method
    abstract function stop(); //3rd abstract method

    public function getInfo()//1st non-abstract method
    {
      return "Brand : ".$this->brand.", Model: ".$this->model.", Year: ".$this->year;
    }

    public function sound()//2nd non-abstract method
    {
      return "Bep!Bep!";
    }

  }

  //2nd class
  class Car extends Vehicle
  {
    public function __construct($brand,$model,$year)
    {
      parent::__construct($brand,$model,$year);
    }

    public function start()
    {
      return "The car starts...";
    }

    public function accelerate()
    {
      return "The car accelerates...";
    }
    public function stop()
    {
      return "The car stops...";
    }

  }

  $myDreamCar=new Car("Suzuki","Swift","2023");
  echo $myDreamCar->getInfo()."<br>";
  echo $myDreamCar->start();
  echo $myDreamCar->accelerate();
  echo $myDreamCar->sound();
  echo $myDreamCar->stop();

  //3rd class
  class Truck extends Vehicle
  {
    public function __construct($brand,$model,$year)
    {
      parent::__construct($brand,$model,$year);
    }

    public function start()
    {
      return "The truck starts...";
    }

    public function accelerate()
    {
      return "The truck accelerates...";
    }

    public function stop()
    {
      return "The truck stops...";
    }
  }

    //4th class

    class Bicycle extends Vehicle
    {
      public function __construct($brand,$model,$year)
      {
        parent::__construct($brand,$model,$year);
      }
      public function start()
      {
        "The bicycle starts...";
      }

      public function accelerate()
      {
        return "The bicycle accelerates...";
      }

      public function stop()
      {
        return "The bicycle stops...";
      }
    }

    //5th class
    class Limousine extends Vehicle
    {
      public function __construct($brand,$model ,$year )
      {
        parent::__construct($brand,$model,$year);
      }

      public function start()
      {
        return "The limousine starts...";
      }

      public function accelerate()
      {
        return "The limousine accelerates...";

      }

      public function stop()
      {
        return "The limousine stops...";
      }

    }

    //6th class

    class Bus extends Vehicle
    {
      public function __construct($brand, $model, $year)
      {
        parent::__construct($brand,$model,$year);
      }

      public function start()
      {
        return "The bus starts...";
      }

      public function accelerate()
      {
        return "The bus accelerates...";
      }

      public function stop()
      {
        return "The bus stops...";
      }

    }

    //7th class

    class Van extends Vehicle //to finish
    {
      public function __construct($brand,$model ,$year )
      {
        parent::__construct($brand,$model,$year);
      }

      public function start()
      {
        return "The Van starts...";
      }

      public function accelerate()
      {

      }
      public function stop()
      {

      }

    }


    //8th class
    class Minivan extends Vehicle
    {
      public function __construct($brand,$model,$year)
      {
        parent::__construct($brand,$model,$year);
      }

      public function start()
      {

      }

      public function accelerate()
      {

      }

      public function stop()
      {

      }
    }



}


//write a small program that takes the calculation of a net salary and returns it.
// the insert will be mocked (set the parameters manually) (mvc)

echo "<br>Third problem <br>";
{
  class Money
  {
    private $gross_salary;
    private $tax_rate;
    private $insurance;

    public function __construct($gross_salary,$tax_rate,$insurance)
    {
      $this->gross_salary=$gross_salary;
      $this->tax_rate=$tax_rate;
      $this->insurance=$insurance;
    }

    public function netSalary()
    {
      $res=$this->gross_salary-($this->gross_salary*$this->tax_rate)-$this->insurance;
      return $res;
    }



    
  }

  $gs=5000;
  $tr=0.2;
  $ins=200;
  $mny=new Money($gs,$tr,$ins);
  $mySalary=$mny->netSalary();
  echo number_format($mySalary,2);

  
}



?>