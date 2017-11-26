<?php
/*
While the public access modifier allows a code from outside or inside the class to access the class's methods and properties, the private modifier prevents access to a class's methods or properties from any code that is outside the class.
 */
//public access modifier
class Car{
	public $model;
	//private access modifier
	private $color;
	//access private properties outside class then we use getter and setter method
	
	public function setColor($color){
		$this->color=$color;
	}
	public function getColor(){
		return "The car color is ".$this->color;
	}
public function getModel(){
	return "The car model is ".$this->model;
}
//private method
private function getColorTwo(){
	return "The car color is ".$this->color;
}

}
$mercedes=new Car();
//here we access a property from outside the class cause this is public properties
$mercedes->model="Mercedes";
//here we access a  method from outside the class cause this is public method
echo "<br>".$mercedes->getModel();

//here we call private properties but this is not access here thi get error cause its private properties
//$mercedes->color="red";
//echo $mercedes->getColor();//Fatal error: Cannot access private property Car::$color and getColor()

//here we access private properties with out error
$mercedes->setColor("Red");
echo "<br>".$mercedes->getColor();
//here we also access private method using reflection or get tricky
$reflection=new ReflectionObject($mercedes);
$method=$reflection->getMethod('getColorTwo');
$method->setAccessible(true);
echo "<br>".$method->invoke($mercedes);
//why we do need access modifier
/*We need access modifiers in order to limit the modifications that code from outside the classes can do to the classes' methods and properties. Once we define a property or method as private, only methods that are within the class are allowed to approach it. So, in order to interact with private methods and properties, we need to provide public methods. Inside these methods, we can put logic that can validate and restrict data that comes from outside the class. */
class Vechicel{
	//the private access modifier denies access to the method from outside the class’s scope
	private $version;
	
	//the public access modifier allows the access to the method from outside the class
	public function setVersion($version){
		//validate that only certain car models are assigned to the $carModel property
		$allowedVersion=array("Mercedes benx","BMW");
		if(in_array($version,$allowedVersion)){
			$this -> version=$version;
		}
		else{
			$this->version="not in our list of models";
		}
	}
	public function getVersion(){
		return "The car model is ".$this->version;
	}
}

$mercedes1=new vechicel();
//sets the vechicel version
$mercedes1->setVersion("Totyota");
//gets the vechicel version
echo "<br>".$mercedes1->getVersion();
?>