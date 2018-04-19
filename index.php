<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?PHP echo "<h2>Intact Web Uploader</h2>"; ?>
	<form action="results.php" id="myForm" name="frmupload" method="post" enctype="multipart/form-data">
	<?php echo "<p>Welcome, select a file to upload.</p>\n"; ?>
		<input type="file" name="fileToUpload" id="fileToUpload" multiple="multiple">
		<br /><br />
		<input type="submit" value="Upload File" name="submit" onclick='upload_image();'> 
	</form>

</body>
</html>
