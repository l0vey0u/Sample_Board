<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
if(!(isset($_SESSION['is_login'])) or empty($_SESSION['is_login'])) {
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
	<img id=logo src='for_logo.jpg' />
	<?php 
	if (!$_SESSION['is_login']) {
		/* Login Form */
	 echo '<form id=login_form action="login_check.php" method="post" onsubmit="return check_len()">
		<input name="id" type="text" placeholder="ID"/>
		<input name="pw" type="password" placeholder="PW"/>
		<input type="submit" value="login"/>
		<a href="signup.php" id=Register class="btn"> JOIN </a>
		</form>';
	} else {
		echo $_SESSION['id']." 안뇽";
		echo '<button type="button" onclick="log_out()"> 로그아웃 </button>';
	}
?>
	<!-- Action -->
	<a href="#" id=view class="btn"> View </a>
	<a href="write.php" id=write class="btn"> Write </a>
</body>
</html>
<script type = "text/javascript">
function check_len()
{
	if(document.getElementsByName('id')[0].value.length > 0
		&& document.getElementsByName('pw')[0].value.length > 0 ) {
			if(document.getElementsByName('id')[0].value.length < 11)
				return true;
			else {
				alert("ID는 10글자이내로 입력해주세요.");
				document.getElementById('login_form').reset();
				return false;
			}
		} else {
			alert("ID 또는 PW가 입력되지 않았습니다.");
			document.getElementById('login_form').reset();
			return false;
		}
	return false;
}
function log_out() 
{
	<?php session_destroy(); ?>
	location.href='main_page.php';
}
</script>
