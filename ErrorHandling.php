<?php
/*
We will show different error handling methods:

Simple "die()" statements
Custom errors and error triggers
Error reporting

 */
//basic error handling using die()
/*if(!file_exists("welcome.txt")){
	die("File not found.");
}else{
	$file=fopen("welcome.txt","r");
}*/
//creating a custom error handler
/*
Creating a custom error handler is quite simple. We simply create a special function that can be called when an error occurs in PHP.

This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context):

Syntax
error_function(error_level,error_message,
error_file,error_line,error_context)
Parameter	Description
error_level	Required. Specifies the error report level for the user-defined error. Must be a value number. See table below for possible error report levels
error_message	Required. Specifies the error message for the user-defined error
error_file	Optional. Specifies the filename in which the error occurred
error_line	Optional. Specifies the line number in which the error occurred
error_context	Optional. Specifies an array containing every variable, and their values, in use when the error occurred
 */
 
 //custom error handler function
 /*function customError($errno,$errstr){
	 echo "<b>Error:</b>[$errno]$errstr<br>";
	 //echo "Ending Script";
	 //die();
 }
 
 //set error handler
 //In this example an E_USER_WARNING occurs if the "test" variable is bigger than "1". If an E_USER_WARNING occurs we will use our custom error handler and end the script:
 set_error_handler("customError",E_USER_WARNING);
 //trigger error
 echo $test;
 
 //trigger_error() function use for catch error
 $test=2;
 if($test>=1){
	 trigger_error("Value must be 1 or below",E_USER_WARNING);
 }*/
 
 //error handler function 
 //phpinfo();//get all php info using phpinfo()
 function customError($errno,$errstr){
	 echo "<b>Error:</b>[$errno]$errstr<br>";
	 echo "Rabbi hasan has been notified";
	 error_log("Error:[$errno]$errstr",1,"hasan35-1199@diu.edu.bd","From:jasrabbi50@gmail.com");
 }
 //set error handler
 set_error_handler("customError",E_USER_WARNING);
 //trigger error
 $test=3;
 if($test>=1){
	 trigger_error("Value must be 1 or below",E_USER_WARNING);
 }
?>
