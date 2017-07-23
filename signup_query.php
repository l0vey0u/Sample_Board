<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include 'db_conn.php';
$id = preg_replace("/[^0-9A-Za-z]/", '', $_POST['id']);
$id = preg_replace("/' '/", '', $id);
if ($id!=$_POST['id']) 
{
	echo "<script language='javascript'>
		alert('비정상적인 입력입니다.');</script>";
		mysqli_close($conn);
		echo "<script>location.href='signup.php';</script>";
		return -1;
}
if($id=='') {
	echo "<script language='javascript'>
		alert('ID 값을 입력해주세요.'); </script>";
		mysqli_close($conn);
		echo "<script>location.href='signup.php';</script>";
		return -1;
}
$id_check = "select * from USER where id='$id'";
$res = mysqli_query($conn, $id_check);
if(mysqli_num_rows($res)!=0) {
	echo "<script language='javascript'>
		alert('해당 id는 이미 사용되고 있습니다.');</script>";
		mysqli_close($conn);
		echo "<script>location.href='signup.php';</script>";
		return -1;
}
$pw = $_POST['pw'];
if($pw=='') {
	echo "<script language='javascript'>
		alert('PASSWORD 값을 입력해주세요.'); </script>";
		mysqli_close($conn);
		echo "<script>location.href='signup.php';</script>";
		return -1;
}
$pw = password_hash($pw, PASSWORD_BCRYPT);
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO USER VALUES('$id', '$pw', '$ip')";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<script>location.replace('main_page.php');</script>;
