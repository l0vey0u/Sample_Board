<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sample_Board </title>
</head>
<body>
	<!-- LOGO -->
	<img id=logo src="http://placehold.it/384x712"/>
	<style type="text/css">
		#logo {
			position: absolute;
			top:10%;
			left:10%;
			bottom: 15%;
		}
	</style>

	<!-- Login Form -->
	<form id=login_form action="#" method="post">
	</form>
	<style type="text/css">
		#login_form {
			position: absolute;
			top:10%;
			left:40%;
			bottom: 15%;
			border: 0.5px solid black;
			width: 384px;
			height: 712px;
		}
	</style>

	<!-- Action -->
	<a herf="#" id=view class="btn"> View </a>
	<a herf="#" id=write class="btn"> Write </a>
	<style type="text/css">
		.btn {
			display: block;
			width: 384px;
			height: 142px;
			padding: 10px;
			border: 0.5px solid black;
			text-align: center;
		}
		#view, #write {
			position: absolute;
			left:70%;
			line-height: 142px;
		}
		#view {
			top: 10%;
			bottom: 75%;
		}
		#write {
			top: 40%;
			bottom: 45%;
		}
	</style>
</body>
</html>

