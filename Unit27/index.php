<!DOCTYPE html>
<HTML>
<head>
	<title>Test Signon - v0.1</title>
</head>

<body onload="getScreenDetails();">

	<h1>Test Signon - v0.1</h1>
	
	<form name='form1' id='form1' action="screen.php" method="post">
				<input type="hidden" id="width" name="width" value="0">
				<input type="hidden" id="height" name="height" value="0">
		userid:   <input type="text" name="userid"><br>
		Password: <input type="password" name="password"><br>

		<input type="submit">
	</form>

	
<script>

function getScreenDetails() {
	document.forms['form1']['width'].value = screen.width;
	document.forms['form1']['height'].value = screen.height;
}

</script>
	
	
</body>

</html>