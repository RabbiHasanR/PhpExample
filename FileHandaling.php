<!DOCTYPE html>
<html>
<body>
<h1>Welcome to my home page!</h1>
<?php 
//open file usning  readfile()
echo readfile("file.txt");
/*
Modes	Description
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 */
$myfile=fopen("file.txt","r") or die("Unable to open this file!");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
?>
<?php
//read single line in file using fgets()
echo "<h4>Read single line in file<h4>";
$myfile1=fopen("file.txt","r") or die("unable to open this file!");
echo fgets($myfile1);
fclose($myfile1); 
?>
<?php
echo "<h4>Using foef() for check end of file</h4>";
//php check end of file using foef()
$myfile2=fopen("file.txt","r") or die("Unable to open this file!");
//output one line end of file
while(!feof($myfile2)){
	echo fgets($myfile2);
	echo "<br>";
} 
fclose($myfile2);
?>
<?php
echo "<h4>Read one by one Character</h4>";
//php read single character using fgetc()
$myfile3=fopen("file.txt","r") or die("unable to open file!");
//output one character until end of file
while(!feof($myfile3)){
	echo fgetc($myfile3);
	echo "<br>";
}
fclose($myfile3);
?>

<?php
echo "<h4>create new file<h4>";
//create new file using w or a and write something using fwrite()
$myfile4=fopen("file2.txt","w") or die("Unabe to create file!");
$txt="Rabbi hasan\n";
fwrite($myfile4,$txt);
$txt="Rabbi hasan\n";
fwrite($myfile4,$txt);
fclose($myfile4);

$myfile5=fopen("file2.txt","r") or die("Unable to opne file2");
while(!feof($myfile5)){
	echo fgets($myfile5)."<br>";
	
}
fclose($myfile5);

//PHP file overwriting
/*now that "file2.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.

In the example below we open our existing file "file2.txt", and write some new data into it: */
$myfile=fopen("file2.txt","w") or die("Unable to create file");
$txt="Puspo";
fwrite($myfile,$txt);
$txt="Puspo";
fwrite($myfile,$txt);
fclose($myfile);
//If we now open the "newfile.txt" file, both John and Jane have vanished, and only the data we just wrote is present:
echo "<h4>Read overwrite data in file </h4>";
$myfile=fopen("file2.txt","r") or die("unable to open this file");
while(!feof($myfile)){
	echo fgets($myfile)."<br>";
}
fclose($myfile);
?>


</body>
</html>