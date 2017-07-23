<?php
session_start();
if(!(isset($_SESSION['secret_mod'])) or
	empty($_SESSION['secret_mod'])) {
	$_SESSION['secret_mod'] = TRUE;
}
if(strcmp("http://".getenv("HTTP_HOST")."/duckhoim/main_page.php",getenv("HTTP_REFERER"))!==0)
{
	echo '<script type="text/javascript"> alert("올바른 경로로 접근해주세요."); history.go(-1); </script>';
	exit;
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> 글쓰기 </title>
</head>
<body>
<form id = write_form action="write_query.php" method="post" onsubmit="return check_len()">
	<input name = "title" type="text" placeholder="글 제목"/>
	<input name = "pin" type="password" placeholder="글 비밀번호( 4자리 숫자 )"/>
	<input name = "content" type="text" placeholder="글 내용"/>
	<input type = "submit" value="작성 완료"/>
</form>
</body>
</html>
<script type="text/javascript">
function check_len()
{
	var raw_title = document.getElementsByName('title')[0].value;
	var raw_pin = document.getElementsByName('pin')[0].value;
	var raw_content = document.getElementsByName('content')[0].value;
	var title = raw_title.replace(/\s/g, "");
	var pin = raw_pin.replace(/\s/g, "");
	pin = pin.replace(/[^0-9]/g, "");
	var content = raw_content.replace(/\s/g, "");
	if(pin.length !== raw_pin.length) {
		alert("비밀번호에 포함된 공백이나 특수문자를 제거해주세요.");
		return false;
	}
	if(title.length > 0 && content.length > 0) 
	{
		if(raw_title.length > 31) {
			alert("글 제목은 30자까지만 입력해주세요. ( 공백포함 )");
			return false;
		}
		if(raw_pin.length == 0) 
		{
			var choice = confirm("비밀글 기능을 사용하지 않으시겠습니까?");
			if(choice == true) 
			{
				<?php $_SESSION['secret_mod']=FALSE; ?>
				return true;
			} else if(choice == false) {
				alert("비밀키로 사용될 4자리 숫자를 입력해주세요.");
				return false;
			} else {
				alert("입력값 오류");
				return false;
			}
		} else {
			return true;
		}				
	} else {
		alert("글의 제목 또는 내용이 입력되지 않았습니다.");
		return false;
	}
	return false;
}
</script>
