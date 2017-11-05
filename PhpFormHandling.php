<!DOCTYPE html>
<html lang="en">
<!--css code -->
<title>Php form handling</title>
<header>Form Handling</header>
<!--<form action="welcome.php" method="post">
Name:<input type="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
/*When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method. */
<input type="submit">
</form>

<form action="welcome_get.php" method="get">
Name:<input type="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
/*When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method. */
<input type="submit">
</form> -->

<!-- Form validation -->
<?php
//define regular expression
$firstNameRegex="/^[a-zA-Z ]*$/";
$lastNameRegex="/^[a-zA-Z ]*$/";
$websiteRegex="/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
//define variables and set to empty values
$firstNameErr=$lastNameErr=$emailErr=$genderErr=$websiteErr="";
$firstName=$lastName=$email=$gender=$comment=$website="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST['firstName'])){
	$firstNameErr="FirstName is required";
}else{
	$firstName=test_input($_POST['firstName']);
	//check if name only contains letters and whitespace
	if(!preg_match($firstNameRegex,$firstName)){
		$firstNameErr="Only letters and white space allowed";
	}
}

if(empty($_POST['lastName'])){
	$lastNameErr="LastName is required";
}else{
	$lastName=test_input($_POST['lastName']);
	//check if name only contains letters and whitespace
	if(!preg_match($lastNameRegex,$lastName)){
		$lastNameErr="Only Letters and white space allowed";
	}
}

if(empty($_POST['email'])){
	$emailErr="Email is required";
}else{
	$email=test_input($_POST['email']);
	//check if e-mail address is well-formed
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$emailErr="Invalid email format";
	}
}
	
if(empty($_POST['website'])){
	$websiteErr="";
}else{
	$website=test_input($_POST['website']);
	//check if url address syntax is valid(this regular expression also allows dashes in the URL)
	if(!preg_match($websiteRegex,$website)){
		$websiteErr= "Invalid URL";
	}
}	

if(empty($_POST['comment'])){
	$comment="";
}else{
	$comment=test_input($_POST['comment']);
}

if(empty($_POST['gender'])){
	$genderErr="Gender is required";
}else{
	$gender=test_input($_POST['gender']);
}	
	
} 

function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>

<h2>PHP form Validation Example </h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
FirstName:<input type="text" name="firstName">
<span class="error">* <?php echo $firstNameErr; ?></span>
<br><br>
LastName: <input type="text" name="lastName">
<span class="error">* <?php echo $lastNameErr;?></span>
<br><br>
E-mail:<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:<input type="text" name="website">
<span class="error"> <?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<?php
include('databaseConnection.php');
if(isset($_POST['submit'])){
	$firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $website=mysqli_real_escape_string($conn,$_post['website']);
	$comment=mysqli_real_escape_string($conn,$_POST['comment']);
	$gender=mysqli_real_escape_string($conn,$_POST['gender']);
	
	$query1=mysqli_query($conn,"insert into MyGuests values('','$firstName','$lastName','$email','','$gender','$website','$comment')");
	
	if($query1){
		header("location:PhpFormHandling.php");
		echo "insert succsessfully";
	}else{
		echo "Erron in insert data: " .mysqli_error($conn);
	}
	mysqli_close($conn);
} 
?>

</html>