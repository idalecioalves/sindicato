<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="/css/cadados.css">
</head>
<body>
	<?php include ('layout.header.php');?>
	<?php include ('layout.menu.php');?>
	<?php include ('layout.alert.php');?>

	<div id="cadastro" class="bradius">
		<form action="" method="POST" >
			<div id="primeira">
				<label for="apelido" >Nome:</label>
				<div id="campoapelido">
					<input type="text" class="txtusuario bradius" name="apelido" required/>
				</div>
			</div>
			<div id="primeira">
				<label >E-mail:</label>
				<div id="campoapelido">
					<input type="email" class="txtusuario bradius" name="email" value="<?php echo (isset($email_value)?$email_value:'');?>" required />
				</div>
			</div>
			<div id="primeira">
				<label>Senha:</label>
				<div id="campoapelido">
					<input type="password" class="txtusermedios bradius" name="senha" value="" required />
				</div>
			</div>
			<div id="primeira">
				<label>Repita Senha:</label>
				<div id="campoapelido">
					<input type="password" class="txtusermedios bradius" name="repsenha" value="" required />
				</div>
			</div>
			<div id="primeira">
				<label>Nível:</label></br>
				<select id="" name="nivel" class="txtusermedios  bradius">
					<?php foreach ($nivel as $key => $value): ?>
					<?php echo '<option value="'.$key.'"'.selected($key,(isset($nivel_value)?$nivel_value:'-1')).'>'.$value.'</option>'; ?>
				<?php endforeach; ?>
			</select>
		</div>
		<div id="primeira">
			<input type="submit" class="txtcad bradius" name="cadastrar" value="Cadastrar">
		</div>
	</form>
</div>

<table class="table">
	<thead>
		<tr></br></br>
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
<?php include 'layout.footer.php'; ?>