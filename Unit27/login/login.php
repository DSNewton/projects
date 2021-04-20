<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>
<head>
	<title>Test Signon - v0.3</title>
</head>

<body>
	<h1>Test Signon - v0.3</h1>

<?php 
	$status   = False;
	$userid   = $_POST['userid'];
	$password = $_POST['password'];
	if (($userid == 'fred')  && ($password == 'secret')) {
		$status = "loggedIn";
	}
	elseif (($userid == 'dogdog')  && ($password == 'random123')) {$status = "loggedIn";
	 	# code...
	 } 

	else {
		echo 'userid and/or password invalid<br>';
		$status = "loggedOut";
	}
	$_SESSION["status"] = $status;
	echo 'Current logged in status is : ' . $status;
?>

	<form name='form1' id='form1' action="index.html" method="get">
		Home : <input type="submit"  value="Home">
	</form>

</body>
</HTML>