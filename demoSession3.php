<?php

//create session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
/*if(isset($_SESSION["name"])){
	echo "welcome" .$_SESSION["name"];
}
else{
	echo "not log in";
}*/

echo "your name is: ".$_SESSION["name"]."your color is:".$_SESSION["favcolor"];
?>
</body>
</html>