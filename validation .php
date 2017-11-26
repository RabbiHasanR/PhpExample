<!DOCTYPE html>
<html>
<head>
<title>Validation</title>

<style>
input[type=text],select{
	width:100%;
	padding:12px 20px;
	margin:8px 0;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
}
input[type=password]{
	width:100%;
	padding:12px 20px;
	margin:8px 0;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
}

input[type=submit]{
	width:100%;
	background-color:#4CAF50;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	border-radius:4px;
	cursor:pointer;
}

input[type=submit]:hover{
	background-color:#45a049;
}
</style>
</head>
<body>
<?php
$nameRegex="/^[a-zA-Z ]*$/";
$emailRegex="";
$passwordRegex="";

$nameErr=$emailErr=$passwordErr=$countryErr="";
$name=$email=$password=$country="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST['name'])){
		$nameErr="name required";
	}
	else{
		$name=$_POST['name'];
		if(!preg_match($nameRegex,$name)){
			$nameErr="Only letters and white space allowed";
		}
	}
	
	if(empty($_POST['email'])){
		$emailErr="required email";
	}
	else{
		$email=$_POST['email'];
		if(!preg_match($emailRegex,$email)){
			$emailErr="Invalid email format";
		}
	}
	
	if(empty($_POST['password'])){
		$passwordErr="required password";
	}
	
	else{
		$password=$_POST['password'];
		if(!preg_match($passwordRegex,$password)){
			$passwordErr="invalid password";
		}
	}
	
	if(empty($_POST['country'])){
		$countryErr="please select country";
	}
	
	else{
		$country=$_POST['country'];
	}
}
?>
<h2>Form validation</h2>

<form action="" method="post">
<label for="name">Name<label>
<input type="text" id="name" name="name" placeholder="your name">
<span><?php echo $nameErr ?></span>
<label for="email">Email</label>
<input type="text" id="email" name="email" placeholder="enter your email">
<span><?php echo $emailErr ?></span>
<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="enter your password">
<span><?php echo $passwordErr ?></span><br>
<label for="country">Country</label>
<select id="country" name="country">
<option value="1">Australia</option>
<option value="2">Canada</option>
<option value="3">USA</option>
<option value="" selected>chose country</option>
<span><?php $countryErr ?></span>
</select>
<input type="submit" value="Submit">

</form>

</body>
</html>