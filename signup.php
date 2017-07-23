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
	var raw_id = document.getElementsByName('id')[0].value;
	var raw_pw = document.getElementsByName('pw')[0].value;
	var id = raw_id.replace(/\s/g, "");
	id = id.replace(/[^a-zA-Z0-9]/g, "");
	var pw = raw_pw.replace(/\s/g, "");
	pw = pw.replace(/[^a-zA-Z0-9.]/g, "");
	if(id.length !== raw_id.length) {
		alert("ID에는 영어와 숫자만 올 수 있습니다.");
		document.getElementById('sign_form').reset();
		return false;
	} else if(pw.length !== raw_pw.length) {
		alert("PW에는 영어와 숫자, '.'만 올 수 있습니다.");
		document.getElementsByName('pw')[0].value = "";
		return false;
	}
	if(id.length > 0 && pw.length > 0 ) {
			if(id.length < 11) {
				if(pw.length >= 6 && pw.length <= 16) {
			  		return true;
				} else {
					alert("PW는 6글자 이상, 16글자 이하로 입력해주세요.");	
					document.getElementsByName('pw')[0].value = "";
					return false;
				}
			} else {
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
