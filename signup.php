<?php
if(strcmp("http://".getenv("HTTP_HOST")."/duckhoim/main_page.php",getenv("HTTP_REFERER"))!==0)
{
	echo '<script type="text/javascript"> alert("올바른 경로로 접근해주세요."); history.go(-1); </script>';
	exit;
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> 회원가입 </title>
</head>

<body>
	<form id = sign_form action="signup_query.php" method="post" onsubmit="return check_len()">
				<input name="id" type="text" placeholder="ID"/>
				<input name="pw" type="password" placeholder="PW"/>
				<input type="submit" placeholder="Join"/>
	</form>
</body>
</html>
<script type="text/javascript">
function check_len()
{
	if(document.getElementsByName('id')[0].value.length > 0
		&& document.getElementsByName('pw')[0].value.length > 0 ) {
			if(document.getElementsByName('id')[0].value.length < 11)
				return true;
			else {
				alert("ID는 10글자이내로 입력해주세요.");
				document.getElementById('sign_form').reset();
				return false;
			}
		} else {
			alert("ID 또는 PW가 입력되지 않았습니다.");
			document.getElementById('sign_form').reset();
			return false;
		}
	return false;
}
</script>
