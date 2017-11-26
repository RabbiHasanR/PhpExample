<?php
//Declare the class
class Car{
	//propertise
	public $comp;
	public $color='beige';
	public $hasSunRoof=true;
	public $tank;
	
	//method that says hello
	public function hello(){
		//The $this keyword indicates that we use the class's own methods and properties, and allows us to have access to them within the class's scope.
		//use this keyword
		return "Beep i am a <i>".$this->comp."</i>,I am ".$this->color;
	}
	
	//add gallons of fuel to the tank when we fill it 
	public function fill($float){
		$this->tank+=$float;
		return $this;
	}
	//substract gallons of fuel from the tank as we ride the car
	public function ride($float){
		$miles=$float;
		$gallons=$miles/50;
		$this->tank-=($gallons);
		return $this;
	}
}

//create an instance
$bmw=new Car();
$mercedes=new Car();

//get the values
echo $mercedes->color;//beige
echo "<br>";
echo $bmw->color;
echo "<br>";

//set new values
$bmw->color="blue";
$bmw->comp="BMW";
$mercedes->comp="Mercedes Benz";

//get the value again
echo $bmw->color;//blue
echo "<br>";
echo $mercedes->color;//beige
echo "<br>";
echo $bmw->comp;//BMW
echo "<br>";
echo $mercedes->comp;//Mercedes Benz
echo "<br>";
//use the methos to get a beep
echo $bmw->hello();//beep
echo "<br>";
echo $mercedes->hello();
//add 10 gallons of fuel ,then ride 40 miles
//and get the number of gallons in the tank

//chaining methods and properties
$tank=$bmw -> fill(10) -> ride(40) -> tank;
//print the results to the screen
echo "<br>The number of gallons left in the tank: ".$tank."gal";
$tank=$bmw->fill(10);
$tank=$bmw->ride(40);
echo "<br>".$bmw->tank;

?>