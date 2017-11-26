<!DOCTYPE html>
<html>
<body>
<?php
//date example
/*
d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
*/
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Today is ".date("Y-m-d")."<br>";
echo "Today is ".date("l");

//get a simple time
echo "<h1>Get a simple time</h1>";
echo "The time is ".date("h:i:sa")."<br>";

//get the time zone
date_default_timezone_set("America/New_York");
echo "New_York time is ".date("h.i.sa")."<br>";

//create a date with php mktime()
//mktime(hour,minute,second,month,day,year)
$d=mktime(11,14,54,8,12,2014);
echo "Created date is ".date("Y-m-d h:i:sa",$d)."<br>";

//create a date from a string with php strtotime()
//The PHP strtotime() function is used to convert a human readable string to a Unix time.
//strtotime(time,now)

$d1=strtotime("10:30pm April 15 2014");
echo "Created date is ".date("Y-m-d h:i:sa",$d1)."<br>";

//PHP is quite clever about converting a string to a date, so you can put in various values:
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$d)."<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa",$d)."<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa",$d)."<br>";
//However, strtotime() is not perfect, so remember to check the strings you put in there.
//more date example
//The example below outputs the dates for the next six Saturdays:

$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks",$startdate);
while($startdate<$enddate){
	echo date("M d",$startdate)."<br>";
	$startdate=strtotime("+1 week",$startdate);
}

//the example below outputs the number of days until 4th of the july

$d2=strtotime("July 04");
$d3=ceil(($d2-time())/60/60/24);
echo "There are ".$d3."days untill 4th of july";
?>
<!--PHP Tip - Automatic Copyright Year-->
<br>
&copy; 2017-<?php echo date("Y");?>
</body>
</html>