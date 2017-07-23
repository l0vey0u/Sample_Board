<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	session_start();
	require_once('db_conn.php');
	$id = $_POST['id'];
	$id = preg_replace("/[^0-9A-Za-z]/", '', $id);
	$id = addslashes($id);
	$id = preg_replace("/' '/", '', $id);
	$pw = $_POST['pw'];
	if($id!=$_POST['id'] or $id=='' or $pw=='') {
		echo "<script language='javascript'>alert('비정상적인 입력');</script>";
		mysqli_close($conn);
		echo "<script> location.replace('main_page.php');</script>";
		return -1;
	}
	$avail_query = "select * from USER where id='$id'";
	$res = mysqli_query($conn, $avail_query);

	if($res != NULL)
	{
		$row = $res->fetch_array(MYSQLI_ASSOC);

		if($row != NULL)
		{
			if(password_verify($pw, $row['pw'])) 
			{
				echo "<script language='javascript'>alert('로그인 성공!!!!');</script>";
				$_SESSION['is_login'] = TRUE;
				$_SESSION['id'] = $id;
				echo "<script> location.href='main_page.php';</script>";
			} 
			else 
			{
				echo "<script language='javascript'>alert('니 계정 없데 ㅎㅎ 1');</script>";
			}
		}
		else 
		{
			echo "<script language='javascript'>alert('니 계정 없데 ㅎㅎ 2');</script>";
		}
	}
		mysqli_close($conn);
?>
