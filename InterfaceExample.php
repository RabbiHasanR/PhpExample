<?php

//declear interface with interface keyword

interface Car{
	public function setModel($name);
	public function getModel();
}

//another interface
interface Vehicle{
	public function setHasWheels($bool);
	public function getHasWheels();
}
//here class implements interface
//class implements one or more interface
class MiniCar implements Car,Vehicle{
	private $model;
	private $hasWheels;
	//Car interface function explain here
	public function setModel($name){
		$this->model=$name;
	}
	
	//another Car interface function explain here
    public function getModel(){
		return $this->model;
	}

    //Vehicle interface funtion exaplain
public function setHasWheels($bool){
	$this->hasWheels=$bool;
}	

//another Vehicle interface function exaplain here
public function getHasWheels(){
	return ($this->hasWheels)?"has wheels":"no wheels";
}
}
//create instance for calss MiniCar
$minicar=new MiniCar();
$minicar->setModel('BMW');
$minicar->setHasWheels("yes");
echo $minicar->getModel()." And ".$minicar->getHasWheels();
?>

<!--
difference between interface and abstract class
interface	                     abstract class
- abstract methods
- constants	-                         abstract methods
                                        - constants
                                       - concrete methods
                                        - concrete variables
access modifiers- public	           - public
                                         - protected
                                         - private
etc.
number of parents	The same class 
can implement more than 1 interface	         The child class can inherit only from 1 abstract class

 -->