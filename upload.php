<!--file upload code  -->
<?php
//create the upload file php script
/*$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//check if image file is a actual image of a fake image
if(isset($_POST["submit"])){
	$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check==true){
		echo "File is an image".$check["mime"].".";
		$uploadOk=1;
	}
	else{
		echo "File is not an image";
		$uploadOk=0;
	}
}

//check if file already exists
if(file_exists($target_file)){
	echo "Sorry,file already exists.";
	$uploadOk=0;
}
//check file size
if($_FILES["fileToUpload"]["size"]>500000){
	echo "Sorry,you file is too large";
	$uploadOk=0;
}

//allow certain file formats
if($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType="jpeg" && $imageFileType!="gif"){
	echo "Sorry,only JPG,JPEG,PNG & GIF files allow";
	$uploadOk=0;
}

//check if $uploadOk is set to 0 by an error 
if($uploadOk==0){
	echo "Sorry,your file was not uploaded.";
	//if everything is ok try to upload file
	
}else{
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
		echo "The file ".basename($_FILES["fileToUpload"]["name"])."has been upload";
	}
	else{
		echo "Sorry, there was an error uploading your file";
	}
}*/
?>
<!--file upload another way -->
<?php
if(isset($_FILES['fileToUpload'])){
	$errors=array();
	$file_name=$_FILES['fileToUpload']['name'];
	$file_size=$_FILES['fileToUpload']['size'];
	$file_tmp=$_FILES['fileToUpload']['tmp_name'];
	$file_type=$_FILES['fileToUpload']['type'];
	$file_ext=strtolower(end(explode('.',$file_name)));
	$expension=array("jpeg","jpg","phg");
	//check image jpeg,jpg or png
	if(in_array($file_ext,$expension)==false){
		$errors[]="extension not allowed,please chose jpg or png file";
	}
	//check image size <2mbps
	if($file_size>2097152){
		$errors[]="file size must be excatily 2 mbps";
	}
	//check any errors 
	if(empty($errors)==true){
		move_uploaded_file($file_tmp,"uploads/".$file_name);
		echo "success";
	}
	
	else{
		print_r($errors);
	}
}
?>