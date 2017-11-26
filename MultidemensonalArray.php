<!DOCTYPE html>
<html>
<body>
<?php
$cars=array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";

//print multidimensional array within for loop

for($row=0;$row<4;$row++){
	echo "<p>Row number $row<br></p>";
	echo "<ul>";
	for($col=0;$col<3;$col++){
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}

//example2 indexed array
echo "<p>Indexed array using for loop</p>";
$shop=array(
array("rose",1.25,15),
array("daisy",0.75,25),
array("orchid",1.15,7)
);
echo "<ol>";
for($row=0;$row<3;$row++){
	echo "<li><b>The row number $row</b>";
	echo "<ul>";
	for($col=0;$col<3;$col++){
		echo "<li>".$shop[$row][$col]."</li>";
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ol>";

//example3 associative array using for and foreach loop
echo "<p>Associative array using for and foreach loop </p>";

$glossary=array(
array(
Title=> "rose",
Price=>1.25,
Number=>15
),
array(
Title=>"dairy",
Price=>0.75,
Number=>25
),
array(
Title=>"orchid",
Price=>1.25,
Number=>7
)
);
echo "<p>Manual acces to each element from associative array</p>";
for($row=0;$row<3;$row++){
	echo $glossary[$row]["Title"]."costs ".$glossary[$row]["Price"]. "and number ".$glossary[$row]["Number"]."<br>";
}

echo "<h1>Using foreach loop to display elements</h1>";
echo "<ol>";
for($row=0;$row<3;$row++){
	echo "<li><b>Thw row number $row</b>";
	echo "<ul>";
	foreach($glossary[$row] as $key=>$value){
		echo "<li>".$value."</li>";
	}
	echo "</ul>";
	echo "</li>";
}

//three dimensonal array example2
echo "<h1>Three dimensional array example</h1>";

$shop1=array(
array(
array("rose",1.25,15),
array("dairy",0.75,25),
array("orchid",1.15,7)
),
array(
array("cake",3.5,20),
array("drinks",7,30),
array("banana",2.25,25)
),
array(
array("toothpest",4.35,20),
array("brash",1.15,50),
array("hair_brash",2.25,10)
)
);
echo "<ul>";
for($layer=0;$layer<3;$layer++){
	echo "<li>The layer number $layer";
	echo "<ul>";
	for($row=0;$row<3;$row++){
		echo "<li>The row number $row";
		echo "<ul>";
		
		foreach($shop1[$layer][$row] as $key=>$value){
			echo "<li>".$value."</li>";
		}
		echo "</ul>";
		echo "</li>";
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ul>";
?>
</body>
</html>