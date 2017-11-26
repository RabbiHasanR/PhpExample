<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//echo session variable that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
//to change a session variable just overwrite it 
$_SESSION["favcolor"]="Yellow";
$_SESSION["favanimal"]="tiger";
print_r($_SESSION);
//remove all session varibales
unset($_SESSION["name"]);
//session_unset();
print_r($_SESSION);

//destroy the session

//session_destroy();

print_r($_SESSION);

?>
</body>
</html>