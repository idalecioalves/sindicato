<?php
//include("classes/conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/cadado.css" />
</head>
<body>
	<?php include'menu.php'; ?>
	<div id="login" class="bradius">
		<img src="img/logo.png">
		<form action="" method="POST" >
			<label id="mailsenha" for="">Nome:</label>
			<input type="text" class="txt bradius" name="" value="">
			<label id="mailsenha" for="">Senha:</label>
			<input type="password" class="txt bradius" name="" value="">
			<label id="mailsenha" for="">Repita Senha:</label>
			<input type="password" class="txt bradius" name="" value="">
			<label id="mailsenha" for="">Nível:</label>
			<select required id="" name="" class="txt  bradius">
				<option>Administrador</option>
				<option>Usuário</option>
			</form>
		</div>
	</body>
	</html>