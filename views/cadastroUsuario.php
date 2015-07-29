<?php
//include "./config/conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo baseUrl().'/css/cadado.css';?>" />
</head>
<body>
	<?php include('menu.php');?>
	<div id="cadastro" class="bradius">
		<img src="<?php echo baseUrl().'/img/logo.png'?>">
		<form action="" method="POST" >			
			<?php include('alert.php');?>
			<fieldset>
				<label id="mailsenha">Nome:</label>
				<input type="text" class="txt bradius" name="nome" value="<?php echo (isset($nome_value)?$nome_value:'');?>" required />
				<label id="mailsenha">E-mail:</label>
				<input type="email" class="txt bradius" name="email" value="<?php echo (isset($email_value)?$email_value:'');?>" required />
				<label id="mailsenha">Senha:</label>
				<input type="password" class="txt bradius" name="senha" value="" required />
				<label id="mailsenha">Repita Senha:</label>
				<input type="password" class="txt bradius" name="repsenha" value="" required />
				<label id="mailsenha">Nível:</label>
				<select id="" name="nivel" class="txt  bradius">					
					<?php foreach ($nivel as $key => $value): ?>
						<?php echo '<option value="'.$key.'"'.selected($key,(isset($nivel_value)?$nivel_value:'-1')).'>'.$value.'</option>'; ?>
					<?php endforeach; ?>
				</select>
				<input type="submit" class="sb txt bradius" name="cadastrar" value="Cadastrar">
			</fieldset>
		</form>		
	</div>
	
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th class="text-center">Ação</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($lista as $campo): ?>
				<tr>
					<td><?php echo $campo['name'] ?></td>
					<td><?php echo $campo['email'] ?></td>
					<td class="text-center">
						<a title="Editar" href="<?php echo baseUrl().'/usuario/edita/'.$campo['id']?>"><span class="glyphicon glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;
						<a title="Apagar" href="<?php echo baseUrl().'/usuario/delete/'.$campo['id']?>"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a>&nbsp;&nbsp;
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>



</body>
</html>