<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
$_SESSION['is_login'];
if($_SESSION['is_login'] != TRUE and $_SESSION['is_login'] != FALSE ) {
	$_SESSION['is_login'] = FALSE;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sample_Board </title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<!-- LOGO -->
	<img id=logo src="http://placehold.it/384x712"/> 
	<?php 
	if (!$_SESSION['is_login']) {
		/* Login Form */
	 echo '<form id=login_form action="login_check.php" method="post">
		<input name="id" type="text" placeholder="ID"/>
		<input name="pw" type="password" placeholder="PW"/>
		<input type="submit" value="login"/>
		<a href="signup.php" id=Register class="btn"> JOIN </a>
		</form>';
	} else {
		echo $_SESSION['id']." 안뇽";
	}
?>
	<!-- Action -->
	<a href="#" id=view class="btn"> View </a>
	<a href="#" id=write class="btn"> Write </a>
</body>
</html>
