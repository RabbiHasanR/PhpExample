<?php
//create function with an exception 
/*function checkNum($number){
	if($number>1){
		throw new Exception("Value must be 1 or below");
	}
	return true;
}
//trigger exception in a "try" block
try{
	checkNum(2);
	//if the exception is thrown, this will not be shown
	echo "If you see this,the number is 1 or below";
}
//catch exception
catch(Exception $e){
	echo "Message: " .$e->getMessage();
}*/

//Creating a custom exception class_alias
/*
To create a custom exception handler you must create a special class with functions that can be called when an exception occurs in PHP. The class must be an extension of the exception class.

The custom exception class inherits the properties from PHP's exception class and you can add custom functions to it.

Lets create an exception class:
 */
 
 /*class customException extends Exception{
	 public function errorMessage(){
		 //error message
		 $errorMsg='Error on line '.$this->getLine().' in ' .$this->getFile().':<b>'.$this->getMessage().'</b> is not a vlid E-mail address';
		 return $errorMsg;
	 }
 }
 $email="jasrabbi50@example.com";
 try{
	 //check if
	 if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
		 //throw exception if email is not valid
		 throw new customException($email);
	 }
	 //multiple exception
	 //check for "example" in mail address
	 if(strpos($email,"example")!==false){
		 throw new Exception("$email is na example e-mail");
	 }
 }
 
 catch(customException $e){
	 //display custom message
	 echo $e->errorMessage();
 }
 //catch multiple exception
 catch(Exception $e){
	 echo $e->getMessage();
 }
 
 //re-throwing exception example
 class customExceptionTwo extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  try {
    //check for "example" in mail address
    if(strpos($email, "example") !== FALSE) {
      //throw exception if email is not valid
      throw new Exception($email);
    }
  }
  catch(Exception $e) {
    //re-throw exception
    throw new customExceptionTwo($email);
  }
}

catch (customExceptionTwo $e) {
  //display custom message
  echo $e->errorMessage();
}

//Top level exception handler example

function myException($exception){
	echo "<b>Exception:</b>".$exception->getMessage();
}
set_exception_handler('myException');
throw new Exception('uncaught exception occured');*/

//practice exception example..throwing an exception

function inverse($x){
	if(!$x){
		throw new Exception('Division by zer0');
	}
	return 1/$x;
}

try{
	echo inverse(5)."<br>";
	//echo inverse(0)."\n";
}
catch(Exception $e){
	echo "Caught exception: ".$e->getMessage()."<br>";
}
//exception handling with a finaly block
finally{
	echo "First finally.<br>";
}

try{
	echo inverse(0);
}
catch(Exception $e){
	echo "Caught exception: ".$e->getMessage()."<br>";
}finally{
	echo "Second finally.<br>";
}
//continue execution
echo "HI rabbi";

//nested exception
class MyException extends Exception{
	
}
class MyOtherException extends Exception{}
class Test{
	public function testing(){
		try{
			try{
				throw new MyException('foo!');
			}
			//multi catch exception
			catch(MyException  $e){
				//rethrow it
				//throw $e;
				var_dump(get_class($e));
			}
		}
		
		catch(Exception $e){
			var_dump($e->getMessage());
		}
	}
}
$foo=new Test;
$foo->testing();


?>