<?php  session_start(); 
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?PHP

	$target_dir = "c:\\test\\";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$filename = $_FILES["fileToUpload"]["name"];
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size in bytes
if ($_FILES["fileToUpload"]["size"] > 4294967296) {
	echo "<h2>Web Uploader</h2>"; ?>
		<form action="index.php" method="post">
			<?PHP echo "<p>Sorry, your file is too large (4GB max).<br /></p>";?>
			<input type="submit" value="Go Back!">
		</form>
	<?PHP
	$uploadOk = 0;
}
	
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

	// echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "<h2>Intact Web Uploader</h2>"; ?>
			<form action="index.php" method="post">
				<?PHP echo "<p><span id=\"success\">SUCCESS</span><br /><br />\"". basename( $_FILES["fileToUpload"]["name"]). "\" uploaded to <em>" . $target_dir . "</em><br /></p>";?>
				<input type="submit" value="Go Back!">
			</form>
		<?PHP
	} else {
		echo "<h2>Web Uploader</h2>"; ?>
		<form action="index.php" method="post">
			<?PHP echo "<p>Sorry, there was an error uploading your file. Try again?<br /></p>";?>
			<input type="submit" value="Go Back!">
		</form>
		</body>
		</html>
	<?PHP
	}
}

?>

</body>
</html>
