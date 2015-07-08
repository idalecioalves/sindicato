<?php 
//include("classes/conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/estilo.css" />
</head>
<body>
	<div id="login" class="bradius">
		<img src="img/logo.png" id="imglogin">
		<div class="message"></div>
		<div class="logo"></div>
		<div class="acomodar">

			<form action="" method="post" >
				<label for="email">E-mail:</label><input id="email" type="text" class="txt bradius" name="email" value="">
				<label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" name="senha" value="">
				<input type="submit" class="sb bradius" value="Entrar"/>
				<div  class="bradius cadastrar"><a href="cadastro.php" title="Participe">Cadastrar-se &raquo;</a></div>
			</form>
			
		</div>
	</div>
</body>
</html>