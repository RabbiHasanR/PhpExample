<!DOCTYPE html>
<html>
<head>
<style>
table,th,td{
	border:1px solid black;
	border-collapse:collapse;
}th,td{
	padding:5px;
}
</style>
</head>
<body>
<table>
<tr>
<td>Filter Name</td>
<td>Filter ID</td>
</tr>
<?php
//get filter name and id using filter_id() and foreach loop
foreach(filter_list() as $id=>$filter){
	echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
}
?>
<!--
Why Use Filters?
Many web applications receive external input. External input/data can be:

User input from a form
Cookies
Web services data
Server variables
Database query results
You should always validate external data!
Invalid submitted data can lead to security problems and break your webpage!
By using PHP filters you can be sure your application gets the correct input!
 -->
</table>

<?php
//Sanitize a string using filter_var() function_exists
/*
The filter_var() function both validate and sanitize data.

The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

The variable you want to check
The type of check to use
 */
 
 echo "<h2>Sanitize a String</h2>";
 $str="<h1>Hello World!</h1>";
 $newstr=filter_var($str,FILTER_SANITIZE_STRING);
 echo $newstr;
 
 //validate an integer
 
 echo "<h2>Validate an integer</h2>";
 $int=100;
 if(!filter_var($int,FILTER_VALIDATE_INT)==false){
	 echo "Integer is valid <br>";
 }else{
	 echo "Integer is not valid <br>";
 }
 
 //filter_var() and problem with 0
 /*In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below: */
 echo "<h2>filter_var() and problem with 0</h2>";
 $int=0;
 if(filter_var($int,FILTER_VALIDATE_INT)==0 || !filter_var($int,FILTER_VALIDATE_INT)==false){
	 echo "Integer is valid";
 }else{
	 echo "Integer is not valid";
 }
 
 //Validate an ip address
 echo "<h2>Validate an IP address</h2>";
 $ip="127.0.0.1";
 if(!filter_var($ip,FILTER_VALIDATE_IP)==false){
	 echo $ip."is a valid IP address";
 }else{
	 echo $ip."is not a valid IP address";
 }
 
 //sanitize and validate an email address
 echo "<h2>Sanitize and validate an email address</h2>";
 $email="john.doe@example.com";
 //remove all illegal characters from email
 $email=filter_var($email,FILTER_SANITIZE_EMAIL);
 //validate e-mail
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false){
	 echo $email."is a valid email address";
 }else{
	 echo $email."is not a valid email address";
 }
 
 //Sanitize and validate a URL
 echo "<h2>Sanitize and validate a URL</h2>";
 $url="https://www.w3schools.com";
 //remove all illegal character from a url 
 $url=filter_var($url,FILTER_SANITIZE_URL);
 //validate url
 if(!filter_var($url,FILTER_VALIDATE_URL)==false){
	 echo $url."is a valid url";
 }
 else{
	 echo $url."is not a valid url";
 }
?>
</body>
</html>