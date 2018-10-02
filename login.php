<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Login</title>
	<style>
		body {
			font-family: Arial;
			color: #444;
		}
		.container {
			position: absolute;
			top: 150px;left: 35%;right: 35%;
			box-shadow: 1px 1px 5px 1px #ddd;
		}
		.container h3 {
			font-size: 25px;
			margin: 30px 0px 35px 0px;
		}
		.wrap { margin: 2% 5% 3% 5%; }
		.box {
			width: 86%;
			font-size: 18px;
			color: #666;
			padding: 1px 25px;
			height: 46px;
			border-radius: 6px;
			border: 1px solid #ddd;
			margin: 10px 0px;
		}
		#login {
			width: 100%;
			height: 45px;
			border-radius: 5px;
			background-color: #8d7d63;
			color: #fff;
			cursor: pointer;
			border: none;
			font-size: 18px;
			margin-top: 10px;
			margin-bottom: 35px;
		}
		@media (max-width: 480px) {
			.container {
				left: 5%;right: 5%;top: 25px;
			}
			.box { width: 80%; }
		}
	</style>
</head>
<body>

<div class="container">
	<div class="wrap">
		<h3>Login</h3>
		<form id="formLogin">
			<div>Name :</div>
			<input type="text" id="name" class="box">
			<button id="login">Sign into game</button>
		</form>
	</div>
</div>

<script src="js/embo.js"></script>
<script>
	submit('#formLogin', () => {
		let name = $('#name').isi()
		let post = 'name='+name
		pos('./back/login.php', post, () => {
			mengarahkan('./')
		})
		return false
	})
</script>

</body>
</html>