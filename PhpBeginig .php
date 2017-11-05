<!DOCTYPE>
<html lang="en">
<title>Php Practise</title>
<header>Php Syntext and variables</header>
<?php
echo"Hello World <br>";
$x=5 /*+15*/+5;
echo "Add result=$x<br>";
$txt="Programming";
echo"I love $txt<br>";
//different diclearation
echo"I love".$txt."!<br>";
//The following example will output the sum of two variables
$y=4;
echo$x+$y;

//Golabl scope 
$globalvariable=100;
function myTest(){
	//using globalvariable this function will generate an error_get_last
	echo"<p>Variable globalvariable inside function:$globalvariable</p>";
}

myTest();
echo"<p>Variable globalvariable outside function is:$globalvariable</p>";

//Local scope
function localScope(){
	$localVariable=200;
	echo"<p>Variable globalvariable inside function is:$localVariable</p>";
}
localScope();
echo"<p>Variable globalvariable outside function is:$localVariable</p>";
/*The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function) */
//global keyword

$a=10;
$b=10;
function globalKeyword(){
	global $a,$b;
	$b+=$a;
	echo "<p>Using global keyword Result indise function:$b</P>";
}

globalKeyword();
echo "Using global keyword Result outside function:$b";

/*PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly. */
//using GLOBALS array
$num1=200;
$num2=100;
function add(){
	$GLOBALS['num1']+=$GLOBALS['num2'];
}
add();
echo "<p>Using GLOBALS array add result:$num1</p>";

/*Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable */
//PHP the static keyword

function staticKeyword(){
	static $x=0;
	$y=100;
	echo "<p>Using static keyword $x</p>";
	echo "<p>Without static keyword $y</p>";
	$x++;
	$y++;
}
staticKeyword();
staticKeyword();
staticKeyword();

//The PHP print Statement

print "<h2>PHP is fun!</h2>";
print"I'm about to learn PHP!<br>";
print "Study PHP  " . $txt . "";
//PHP data types
echo"<h1>PHP Data Types</h1>";
$int=455;
$float=45.555;
$boolean=true;
//php Array
$cars=array("volvo","bmw","toyota");
//The PHP var_dump() function returns the data type and value
var_dump($int);
var_dump($float);
var_dump($boolean);
var_dump($cars);
//PHP object
print"<h1>PHP Object</h1>";
//create class
class Car{
	function Car(){
		$this->model="W";
	}
}
//create an object
$herbie=new Car();

echo $herbie->model;

//PHP NULL Value
/*Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL */
print"<h1>PHP NULL Value</h1>";

$value="Hello world!";
$value=null;
var_dump($value);
//string example
print"<h1>String Practice</h1>";
print"<h2>Get The Length of a String</h2>";
//The PHP strlen() function returns the length of a string.
echo strlen("Hello world!");
print"<h2>Count The Number of Words in a String</h2>";
//The PHP str_word_count() function counts the number of words in a string
echo str_word_count("Hello world!");
print"<h2>Reverse a String</h2>";
//The PHP strrev() function reverses a string
echo strrev("Hello World!");
print"<h2>Search For a Specific Text Within a String</h2>";
/*The PHP strpos() function searches for a specific text within a string.

If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

The example below searches for the text "world" in the string "Hello world!" */
echo strpos("Hello world","world");
print"<h2>Replace Text Within a String</h2>";
/*The PHP str_replace() function replaces some characters with some other characters in a string.

The example below replaces the text "world" with "Dolly" */
echo str_replace("world","dolly","Hello world");

//Php constant
print"<h2>Create a PHP Constant</h2>";
//to create a constant use the define() function
//define(name,value,case-insensitive)
/*Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
The example below creates a constant with a case-sensitive name */
define("GREETING","Welcome to fucking world!");
echo GREETING;
//he example below creates a constant with a case-insensitive name:
define("STRING1","<p>I am Happoy now!</p>",true);
echo string1;

//constants are global
print"<h2>Constant are Global</h2>";
/*Constants are automatically global and can be used across the entire script.

The example below uses a constant inside a function, even if it is defined outside the function */
function constantTest(){
	echo string1;
}
constantTest();

//if else statement
print"<h2>If-else Practise</h2>";
$t=date("H");
if($t<"10"){
	echo "Have a good mornign!";
}
elseif($t<"20"){
	echo"Have a good day!";
}
else{
	echo"Have a good night!";
}

//switch statement
print"<h2>switch statement Practise</h2>";
$favcolor="red";
switch($favcolor){
	case"red":
	echo"Your favourite color is red!";
	break;
	case"blue":
	echo"Your favourite color is blue!";
	break;
	case"green":
	echo"Your favourite color is green!";
	break;
	default:
	echo"Your favourite color is neither red,blue,not green!";
}
//while loop practise
print"<h2>while loop Practise</h2>";
$value1=1;
while($value1<=5){
	echo"The number is:$value1<br>";
	$value1++;
}
//do while loop practise
print"<h2>do while loop Practise</h2>";
$value2=1;
do{
	echo"The number is:$value2<br>";
	$value2++;
}while($value2<=5);
	
//for loop practice
print"<h2>for loop Practise</h2>";
for($x=0;$x<=10;$x++){
	echo"The number is :$x<br>";
}

//foreach loop through each key/value pair in an array 
//foreach loop works only on arrays and is used to loop
/*For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

The following example demonstrates a loop that will output the values of the given array ($colors) */
print"<h2>foreach loop Practise</h2>";
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
	echo "$value<br>";
}
//PHP function practice
//PHP Function Arguments or parameter
print"<h2>function with parameter Practise</h2>";
function familyName($fname,$year){
	echo "$fname Refsnes.Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
//function with defaule argument/parameter value
print"<h2>function with default argument/parameter vlaue Practise</h2>";
function setHeight($minheight=50){
	echo"The height is :$minheight<br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
//function with returning values
print"<h2>function with returning values Practise</h2>";

function sum($x,$y){
	$z=$x+$y;
	return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//Array practice
/*In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays */
//php indexed arrays practice
print"<h2>PHP Indexed Arrays Practise</h2>";
$vehicle=array("volvo","bmw","toyota");
echo "I like ".$vehicle[0].",".$vehicle[1]."and".$vehicle[2]."<br>";
//The count() function is used to return the length (the number of elements) of an array
echo"Length of Vehicle array: ";
echo count($vehicle);

//loop through an indexed array
print"<h2>Loop through an indexed array</h2>";
$arrlength=count($vehicle);
for($x=0;$x<$arrlength;$x++){
	echo $vehicle[$x];
	echo "<br>";
}

//PHP Associative Arrays
print"<h2>PHP Associative array</h2>";
/*Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array:  */

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is ".$age['Peter']."years old";
//Loop through an Associative array
print"<h2>Loop through an Associative array</h2>";

foreach($age as $x=>$x_value){
	echo "Key=".$x .", value" .$x_value;
	echo"<br>";
}
//array sorting practice
print"<h2>PHP array sorting</h2>";
/*In this chapter, we will go through the following PHP array sort functions:

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
 */
 
 //Sort Array in Ascending Order - sort()
 print"<h2>Ascending order sort() sorting</h2>";
 sort($vehicle);
 foreach($vehicle as $values){
	 echo $values."<br>";
 }
 $numbers=array(2,4,7,1,3);
 sort($numbers);
 foreach($numbers as $values){
	echo $values."<br>"; 
 }
 
 print"<h2>descending order rsort() sorting</h2>";
 rsort($numbers);
 foreach($numbers as $values){
	echo $values."<br>"; 
 }
 
 print"<h2>associative array Ascending order ksort() sorting, according to key</h2>";
 ksort($age);
 foreach($age as $x=>$x_value){
	echo "Key=".$x .", value" .$x_value;
	echo"<br>";
}

print"<h2>associative array descending order ksort() sorting, according to key</h2>";
krsort($age); 
foreach($age as $x=>$x_value){
	echo "Key=".$x .", value" .$x_value;
	echo"<br>";
}

print"<h2>associative array ascending order ksort() sorting, according to value</h2>";
 asort($age);
 foreach($age as $x=>$x_value){
	echo "Key=".$x .", value" .$x_value;
	echo"<br>";
}

print"<h2>associative array descending order ksort() sorting, according to value</h2>";
 arsort($age);
  foreach($age as $x=>$x_value){
	echo "Key=".$x .", value" .$x_value;
	echo"<br>";
}

//Php Superglobals variables
echo"<h1>PHP Superglobals varables example</h1>";
/*The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION */
//PHP $GLOBALS example

echo"<h2>GLOBALS variable example</h2>";

/*$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

The example below shows how to use the super global variable $GLOBALS: */

$valueEx1=75;
$valueEx2=50;
function addition(){
	$GLOBALS['sum']=$GLOBALS['valueEx1']+$GLOBALS['valueEx2'];
}
addition();
echo"Result:$sum";

//php $_SERVER variable example
echo"<h2>_SERVER variable example</h2>";
/*$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

The example below shows how to use some of the elements in $_SERVER */
 
 //Returns the filename of the currently executing script
 echo $_SERVER['PHP_SELF'];
 echo"<br>";
 //Returns the name of the host server 
 echo $_SERVER['SERVER_NAME'];
 echo"<br>";
 //Returns the Host header from the current request
 echo $_SERVER['HTTP_HOST'];
 echo"<br>";
 //Returns the complete URL of the current page (not reliable because not all user-agents support it)
 echo $_SERVER['HTTP_REFERER'];
 echo"<br>";
 echo $_SERVER['HTTP_USER_AGENT'];
 echo"<br>";
 //Returns the path of the current script
 echo $_SERVER['SCRIPT_NAME'];
 echo"<br>";
 //Returns the version of the Common Gateway Interface (CGI) the server is using
 echo $_SERVER['GATEWAY_INTERFACE'];
 echo"<br>";
 //Returns the IP address of the host server
 echo $_SERVER['SERVER_ADDR'];
 echo"<br>";
 //Returns the server identification string 
 echo $_SERVER['SERVER_SOFTWARE'];
 echo"<br>";
 //Returns the name and revision of the information protocol (such as HTTP/1.1)
 echo $_SERVER['SERVER_PROTOCOL'];
 echo"<br>";
 //Returns the request method used to access the page (such as POST)
 echo $_SERVER['REQUEST_METHOD'];
 echo"<br>";
 //Returns the timestamp of the start of the request (such as 1377687496)
 echo $_SERVER['REQUEST_TIME'];
 echo"<br>";
 //Returns the query string if the page is accessed via a query string
 echo $_SERVER['QUERY_STRING'];
 echo"<br>";
 //Returns the Accept header from the current request
 echo $_SERVER['HTTP_ACCEPT'];
 echo"<br>";
 //Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
 echo $_SERVER['HTTP_ACCEPT_CHARSET'];
 echo"<br>";
 //Is the script queried through a secure HTTP protocol
 echo $_SERVER['HTTPS'];
 echo"<br>";
 //Returns the IP address from where the user is viewing the current page
 echo $_SERVER['REMOTE_ADDR'];
 echo"<br>";
 //Returns the Host name from where the user is viewing the current page
 echo $_SERVER['REMOTE_HOST'];
 echo"<br>";
 //Returns the port being used on the user's machine to communicate with the web server
 echo $_SERVER['REMOTE_PORT'];
 echo"<br>";
 //Returns the absolute pathname of the currently executing script
 echo $_SERVER['SCRIPT_FILENAME'];
 echo"<br>";
 //Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
 echo $_SERVER['SERVER_ADMIN'];
 echo"<br>";
 //Returns the port on the server machine being used by the web server for communication (such as 80)
 echo $_SERVER['SERVER_PORT'];
 echo"<br>";
 //Returns the server version and virtual host name which are added to server-generated pages
 echo $_SERVER['SERVER_SIGNATURE'];
 echo"<br>";
 //Returns the file system based path to the current script
 echo $_SERVER['PATH_TRANSLATED'];
 echo"<br>";
 //Returns the URI of the current page
 echo $_SERVER['SCRIPT_URI'];
 
 
 //PHP $_REQUEST variables example
 
 echo"<h2>PHP REQUEST varibale exmple</h2>";
 /*PHP $_REQUEST is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field: */
 if($_SERVER['REQUEST_METHOD']=="POST"){
	 //collect value of input field
	 $name=$_REQUEST['fname'];
	 if(empty($name)){
		 echo "Name is empty";
	 }
	 else{
		 echo $name;
	 }
 }
 
 //PHP $_POST varibale example
 
 echo "<h2>PHP POST varabale example</h2>";
 /*PHP $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field */
 
 if($_SERVER['REQUEST_METHOD']=="POST"){
	 //collect value of input field
	 $name=$_POST['fname'];
	 if(empty($name)){
		 echo "Name is empty";
	 }
	 else{
		 echo $name;
	 }
 }
 
 //PHP $_GET variable example
 echo "<h2>GET variable example</h2>";
 /*PHP $_GET can also be used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.

Assume we have an HTML page that contains a hyperlink with parameters:

<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>
When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.

The example below shows the code in "test_get.php": */
 echo "Study".$_GET['subject']." at ".$_GET['web'];
 ?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname">
<input type="submit" name="Submit">
</form>
<a href="PhpPractise/PhpBeginig.php?subject=PHP&web=W3schools.com">Test $GET</a>
</html>