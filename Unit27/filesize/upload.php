<head>
	<title>Control - V0.1</title>
</head>

<body>
	<h1 id="center">Test Screen Res</h1>

<?php
try {

//	$target_dir = "uploads/"; // permissions need to be set on this folder
	$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);

// Check if file already exists
	if (file_exists($target_file)) {
		throw new Exception("File already exists");		
	}



// try to upload file
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded. it has: ";
		echo $_FILES["fileToUpload"]["size"];
		echo " Bytes";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}

} catch(Throwable $e) {
    echo $e->getMessage();
}

?>

</body>