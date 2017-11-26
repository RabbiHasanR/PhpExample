<?php
//the parent class
class Car{
	//private property inside the class
	private $model;
	//The $model property is now protected, so it can be accessed 
  // from within the class and its child classes
  protected $color;
  
  //public setter method for color property
  public function setColor($color){
	  $this->color=$color;
  }
	
	//setModel()..public method and properties can be used by parent and child classes
	public function setModel($model){
		$this->model=$model;
	}
	
	public function getModel(){
		return $this->model;
	}
	
	//hello()
	public function hello(){
		return "beep! I am a <i>".$this->model."</i><br>";
	}
	
	//final method display()
	//final method can not override
	final public function display(){
		return "Fuck of emotion";
	}
}

//child class inherits the code from the parent class
//and it can also have it's own code
class SportsCar extends Car{
	private $style="fast and furious";
	
	//Tries to get a private property that belongs to the parent
  //this is error Notice: Undefined property: SportsCar::$model
  /*public function hello()
  {
    return "beep! I am a <i>" . $this -> model . "</i><br />";
  }*/
	//has no problem to get a protected property that belongs to the perent
	
	
	public function getColor(){
		return "beep!Color is <i>".$this->color."</i>";
	}
	public function driveItWithStyle(){
		return 'Drive a'.$this->getModel().'<i>'.$this->style.'</i>';
	}
	
	//override a parent class hello() in child class
	
	public function hello(){
		return "I am rabbi";
	}
	
	//final method from parent class can not override in chil class
	/*public function display(){
		return "Love";
	}*/
}

//create an instance from the child class
$sportsCar1=new SportsCar();
//set the value of the class property
//for this aim we use a method that we created in the parent
$sportsCar1->setModel("Mercedes");

echo $sportsCar1->hello();

$sportsCar2=new SportsCar();
$sportsCar2->setModel('Ferrari');
echo "<br>".$sportsCar2->driveItWithStyle();
$sportsCar2->setColor('Blue');
echo "<br>".$sportsCar2->getColor();
//print  override hello() in child
echo "<br>".$sportsCar2->hello();
//call final override method and it's got Fatal error: Cannot override final method Car::display()
//echo "<br>".$sportsCar2->display();
//print hello method with parent class object
$car=new Car();
$car->setModel("BMw");
echo "<br>".$car->hello();
//but final method cal call his class object
echo "<br>".$car->display();
?>