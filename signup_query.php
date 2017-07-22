<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include 'db_conn.php';
$id = preg_replace("/[^0-9A-Za-z]/", '', $_POST['id']);
if ($id!=$_POST['id']) 
{
		echo "<script language='javascript'>alert('비정상적인 입력입니다.');</script>";
		mysqli_close($conn);
		echo "<script>location.href='signup.php';</script>";
		return -1;
}
$pw = password_hash($_POST['pw'], PASSWORD_BCRYPT);
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO USER VALUES('$id', '$pw', '$ip')";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<script>location.replace('main_page.php');</script>;
