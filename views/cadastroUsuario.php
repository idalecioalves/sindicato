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
	<link rel="stylesheet" href="<?php echo baseUrl().'/css/cadado.css';?>" />
</head>
<body>


	<?php include'menu.php'; ?>
	<div id="cadastro" class="bradius">
		<img src="<?php echo baseUrl().'/img/logo.png'?>">

		<form action="<?php echo baseUrl().'/usuario/cadastro';?>" method="POST" >
			<label id="mailsenha">Nome:</label>
			<input type="text" class="txt bradius" name="nome" value="<?php echo (isset($campo['name'])?$campo['name']:'');?>" required />
			<label id="mailsenha">E-mail:</label>
			<input type="email" class="txt bradius" name="email" value="<?php echo (isset($campo['email'])?$campo['email']:'');?>" required />
			<label id="mailsenha">Senha:</label>
			<input type="password" class="txt bradius" name="senha" value="" required />
			<label id="mailsenha">Repita Senha:</label>
			<input type="password" class="txt bradius" name="repsenha" value="" required />
			<label id="mailsenha">Nível:</label>
			<select id="" name="nivel" class="txt  bradius">
				<option value="1">Administrador</option>
				<option value="2">Usuário</option>
			</select>
			<input type="submit" class="sb txt bradius" name="h2727t6" value="5445 ">
		</form>
	</div>

	<div class="row">
        <div class="alert-group">
          <?php if(isset($flash['info'])): ?>
            <div class="alert alert-info alert-dismissable in ">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong><?php echo $flash['info'];?></strong>
            </div>
          <?php endif;?>
          <?php if(isset($flash['success'])):?>
            <div class="alert alert-success alert-dismissable in ">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong> <?php echo $flash['success'];?></strong>
            </div>
          <?php endif;?>
          <?php if(isset($error)): ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong><?php echo $flash['error'];?></strong>
            </div>
          <?php endif; ?>
        </div>vb                                 ggjjkj
      </div>
</body>
</html>