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
		<img src="img/logo.png">
		<form action="<?php echo baseUrl().'/login';?>" method="POST" >
			<label id="mailsenha" for="email">E-mail:</label>
			<input type="text" class="txt bradius" name="email" required value="<?php echo $email_value;?>">
			<label id="mailsenha" for="senha">Senha:</label>
			<input type="password" class="txt bradius" name="password" required value="">			
			<input type="submit" class="sb bradius" value="Entrar"/>
		</form>
		<?php if(!empty($error['email'])):?>	
		<p class="bg-danger"><?php echo $error;?></p>	
	<?php endif; ?> 
	<?php echo $email_error;?>
</div>

</body>
</html>