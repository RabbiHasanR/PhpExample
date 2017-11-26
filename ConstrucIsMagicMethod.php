<?php
class Car{
	private $model;
	//create constructor or magic method declear with two underscores __construct
	public function __construct($model){
		$this->model=$model;
	}
	//get model eith getModel()
	
	public function getModel(){
		return "The car mode is: ".$this->model;
	}
} 

$car1=new Car("Mercedes");

echo $car1->getModel();
?>
<!-- write a constructor method without risking error -->
<?php

class Vechicel{
	//the model property has a default value of "null"
	private $model="N/A";
	
	//we don't have to assign a value to the $model property
	//since it already has a default value
	public function __construct($model=null){
		//only if model value is passed it will be assign
		if($model){
			$this->model=$model;
		}
	}
	public function getVersion(){
		//use magic constants __CLASS__...this magic constant return class name
		//other magic constants
		/*
          __LINE__ to get the line number in which the constant is used.
__FILE__ to get the full path or the filename in which the constant is used.
__METHOD__ to get the name of the method in which the constant is used.
		*/
		return 'The class is :<b>'.__CLASS__.'</b><br><b>The line is:'.__LINE__.'</b><br><b>The method is:'.__METHOD__.'</b><br><b>The file is:'.__FILE__.'</b><br>The car model is: '.$this->model;
	}
}

//we create the new vechicel object without passing a value
$vechicel=new Vechicel();
echo "<br>".$vechicel->getVersion();
//now we create the new vechicel object with passing a value
$vechicel1=new Vechicel("BMW");
echo "<br>".$vechicel1->getVersion();
?>

<!--multidimensinal array with class and constructor -->
<?php
//code with error
/*class ArrayPractice{
	private $car=array(
	array(),
	array(),
	array()
	);
	
	public function __construct($car=array(array(),array(),array())){
		$this->car=$car;
	}
	public function getCar(){
		for($row=0;$row<4;$row++){
			 foreach($car[$row] as $key->$value){
				 return $value;
			 }
			
		}
	}
}

$array=new ArrayPractice("Volvo",22,18);
echo $array->getCar();*/
?>