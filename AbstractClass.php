<?php
//abstract class create with abstract keyword
abstract class Car{
	//abstract class can have properties
	protected $tankVolume;
	
	//abstract classes can have non abstract method 
	public function setTankVolume($volume){
		$this->tankVolume=$volume;
	}
	
	//abstract method
	
	abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car{
	// Since we inherited abstract method, we need to define it in the child class, 
  // by adding code to the method's body.
  public function calcNumMilesOnFullTank(){
	  $miles=$this->tankVolume*30;
	  return $miles;
  }
}

class Toyota extends Car{
	// Since we inherited abstract method, we need to define it in the child class, 
  // by adding code to the method's body.
  
  public function calcNumMilesOnFullTank(){
	  return $miles=$this->tankVolume*33;
  }
  
  public function getColor(){
	  return "beige";
  }
}

//create instance for Honda class
$honda=new Honda();

$honda->setTankVolume(10);
echo $honda->calcNumMilesOnFullTank();//300
//create instance for Toyota class
$toyota=new Toyota();
$toyota->setTankVolume(10);
echo "<br>".$toyota->calcNumMilesOnFullTank();//330
echo "<br>".$toyota->getColor();
?>