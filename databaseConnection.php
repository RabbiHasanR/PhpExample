<?php
$servername="localhost";
$username="root";
$password="";
$databasename="myDB";
//create connection
$conn=mysqli_connect($servername,$username,$password,$databasename);
//check connecton
if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

//create databasename
/*$sql="CREATE DATABASE myDB";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully";
}
else{
	echo "Error creating database: " .mysqli_error($conn);
}*/

//sql to create table
/*$sql="CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";
email VARCHAR(50),
gender VARCHAR(20) NOT NULL,
websitelink VARCHAR(100),
comment VARCHAR(200),

if(mysqli_query($conn,$sql)){
	echo "Table MyGuests created successfully";
}else{
	echo "Error creating table: " .mysqli_error($conn);
}*/

//alter table and add new colum
/*$sql="ALTER TABLE MyGuests 
ADD gender VARCHAR(20) NOT NULL ,
ADD websitelink VARCHAR(100) ,
ADD comment VARCHAR(200)";
if(mysqli_query($conn,$sql)){
	echo "Alter table successfully";
}else{
	echo "Error Alter table: " .mysqli_error($conn);
}*/
//mysqli_close($conn);
?>