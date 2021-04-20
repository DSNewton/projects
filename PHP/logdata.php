<!DOCTYPE html>
<HTML>
<head>
	<title>Test Signon - v0.1</title>
</head>

<?php

$ip = $_SERVER["REMOTE_ADDR"];
$date = date('d-m-Y H:i:s');
$file = 'log.txt';

$userid = $_POST['userid'];
$password = $_POST['password'];

$current = file_get_contents($file);

$newLine=  $userid . ' logged in from IP Address of ' . $ip . ' on ' . $date . "\r\n";
$current = $current . $newLine;
file_put_contents($file, $current);

?>

<body>
	<h1>Test Signon - v0.1</h1>

	Userid : <?php echo $userid; ?>
	<br><br>
	Password : <?php echo $password; ?>

</body>
</HTML>