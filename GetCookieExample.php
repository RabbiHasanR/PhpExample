<?php
//create or retrieve a cookir
$cookie_name="user";
$cookie_value="John Doe";
//modify a cookie value
$cookie_value="Alex Porter";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");//86400=1day
//delete cookie
//set the expiration date to one hour ago
setcookie("user","",time()-3600);
//set the cookie is enable
setcookie("test_cookie","test",time()+3600,'/');
?>
<!DOCTYPE html>
<html>
<body>
<form action="GetCookieExample.php" method="post">
<input type="submit" value="submit">
</form>
<!-- display cookie value -->
<?php
//check cookie is null or not 
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named".$cookie_name."is not set";
}
else{
	echo "Cookie".$cookie_name."is set!<br>";
	echo "Value is: ".$_COOKIE[$cookie_name];
}
?>
<?php

echo "Cookie 'user' is deleted";
//check cookie enable or disable 
if(count($_COOKIE)>0){
	echo "Cookies are enable";
}else{
	echo "Cookies are disable";
}
?>
</body>
</html>