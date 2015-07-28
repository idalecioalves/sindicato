<?php
include "./config/conexao.php";
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
	<div id="cadastro" class="bradius">
		<img src="img/logo.png">
		<form action="<?php echo baseUrl().'/usuario';?>" method="POST" >
			<label id="mailsenha">Nome:</label>
			<input type="text" class="txt bradius" name="nome" value="" required />
			<label id="mailsenha">E-mail:</label>
			<input type="email" class="txt bradius" name="email" value="" required />
			<label id="mailsenha">Senha:</label>
			<input type="password" class="txt bradius" name="senha" value="" required />
			<label id="mailsenha">Repita Senha:</label>
			<input type="password" class="txt bradius" name="repsenha" value="" required />
			<label id="mailsenha">Nível:</label>
			<select id="" name="nivel" class="txt  bradius">
				<option value="1">Administrador</option>
				<option value="2">Usuário</option>
			</select>
			<input type="submit" class="sb txt bradius" name="cadastrar" value="Cadastrar">
		</form>
		<?php
		if (isset($_POST['cadastrar'])){
			$nome = ($_POST["nome"]);
			$email = ($_POST["email"]);
			$senha = $_POST["senha"];
			$repsenha=$_POST["repsenha"];
			$nivel = ($_POST["nivel"]);
		}
		if ($senha!=$repsenha) {
			echo "As senhas não são iguais!";
		}elseif (filter_var($email,FILTER_VALIDATE_EMAIL)){
			$cadastrar=$pdo->prepare("INSERT INTO usuario (nome,email,senha,nivel)VALUES(:nome,:email,:senha,:nivel)");
			$cadastrar->bindValue(":nome",$nome);
			$cadastrar->bindValue(":email",$email);
			$cadastrar->bindValue(":senha",$senha);
			$cadastrar->bindValue(":nivel",$nivel);
			$cadastrar->execute();
		}else{
			echo "E-mail inválido";
		}
		?>
	</div>
</body>
</html>