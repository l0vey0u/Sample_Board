<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$db_host = "localhost";
$db_user = "";
$db_passwd = "";
$db_name = "";
$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
if($conn->connect_error) {
	echo "DB Connect Failed: ".mysqli_connect_error();
}
?>
