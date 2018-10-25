<?php
require "dbconnect.php";

if(isset($_POST['Submit']))
{
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file); 
	//$sno=1;
	$name = $_POST['Name'];
	$qual = $_POST['Quali'];
	$desi = $_POST['Design'];
	$img = $_FILES["fileToUpload"]["tmp_name"];
	$query = "INSERT INTO `staffdetails` VALUES ('$name','$qual','$desi','$target_file');";
	
	mysqli_query($scon ,$query);
}
?>
<html>
	<style>.box{
		width: 300px;
		border :10px solid gray;
		padding:20px;
		background-color:lightgray;
		}</style>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
	<div class="box">
	<form method="post" enctype="multipart/form-data">
	Name<br><input type="text" name="Name" required><br>
	Qualification<br><input type="text" name="Quali"  required><br>
	Designation<br><input type="text" name="Design"  required><br><br>
	<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
	<input type="Submit" name="Submit" value="Submit">
	</form>
	</div>
	</center>
</body>
</html>