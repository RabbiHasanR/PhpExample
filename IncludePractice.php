<!DOCTYPE html>
<html>
<body>

<div class="menu">
<!--using include 
require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue
 -->
<?php include'menu.php'; ?>
</div>
<h1>Welcome to moy home page!</h1>

<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>
</body>
</html>