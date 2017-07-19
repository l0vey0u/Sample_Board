<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sample_Board </title>
</head>
<body>
	<style type="text/css">
		.btn {
			display: block;
			padding: 10px;
			border: 0.5px solid black;
			text-align: center;
		}
	</style>
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
		<input type="text" placeholder="ID"/>
		<input type="password" placeholder="PW"/>
		<input type="submit" value="login"/>
		<style type="text/css">
			input[type="text"], input[type="password"] {
				border: 0 solid black;
				border-bottom: 1px solid black;
				width: 80%;
				height: 20%;
				text-align: center;
			}
			input[type="submit"] {
				border: 0 solid black;
				background: rgba(0,0,0,0);
				width: 50%;
				height: 10%;
				text-align: center;
			}
			input[type="text"] {
				position: absolute;
				top: 10%;
				bottom: 70%;
			}
			input[type="password"] {
				position: absolute;
				top: 35%;
				bottom: 45%;
			}
			input[type="submit"] {
				position: absolute;
				top: 60%;
				bottom: 30%;
			}
		</style>
		<a herf="#" id=Register class="btn"> JOIN </a>
		<style type="text/css">
			a[id=Register] {
				position: absolute;
				top: 85%;
				bottom: 0;
				width: 80%;
				height: 15%;
				text-align: center;
			}
		</style>
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
		#view, #write {
			position: absolute;
			left:70%;
			width: 384px;
			height: 142px;
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
