<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//set session variables
$_SESSION["favcolor"]="green";
$_SESSION["favanimal"]="cat";
echo "Session variable are set.";
$_SESSION["name"]="Rabbi";
?>
</body>
</html>