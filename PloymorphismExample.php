<!--
According to the Polymorphism principle, 
methods in different classes that do 
similar things should have the same name.
 -->
 
 <?php
 //n order to implement the polymorphism principle, we can choose between abstract classes and interfaces.
 //create interface
 interface Shape {
  public function calcArea();
}

//create class with interface implements
class Circle implements Shape {
  private $radius;
   
  public function __construct($radius)
  {
    $this -> radius = $radius;
  }
  
  // calcArea calculates the area of circles 
  public function calcArea()
  {
    return $this -> radius * $this -> radius * pi();
  }
}

//create class with interface implements
class Rectangle implements Shape {
  private $width;
  private $height;
   
  public function __construct($width, $height)
  {
    $this -> width = $width;
    $this -> height = $height;
  }
  
  // calcArea calculates the area of rectangles   
  public function calcArea()
  {
    return $this -> width * $this -> height;
  }
}
//create instance
$circ = new Circle(3);
$rect = new Rectangle(3,4);
//print area
echo $circ -> calcArea()."<br>";
echo $rect -> calcArea();
 ?>