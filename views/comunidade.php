<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Cadastro de comunidades</title>
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  .alert{padding: 0;margin-bottom: 0;border: 0;}
</style>
</head>
<body>
  <?php include ('menu.php');?>
  <div id="comunidade" class="container">
  <form class="form-horizontal" method="POST" action="">
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
        </div>
      </div>
      <fieldset>
        <legend>Cadastro de Comunidades</legend>            
        <div class="control-group">
          <label class="control-label" for="nome">Nome:</label>
          <div class="controls">
            <div class="input-group">
              <span class="input-group-btn">
                <button data-toggle="modal" href="#myModal" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span> Buscar</button>
              </span>
              <input id="nome" name="nome" placeholder="Nome" class="form-control" required="" type="text" value="<?php echo (isset($campo['nome'])?$campo['nome']:""); ?>" >
              <span class="input-group-btn">
                <button class="btn btn-info" type="submit">&nbsp;<span class="glyphicon glyphicon-plus"></span>&nbsp;</button>
              </span>    
            </div>
            <p class="help-block">Digite o nome da comunidade</p>
          </div>
        </div>          
      </fieldset>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>              
          <th class="text-center">Ação</th>
        </tr>            
      </thead>
      <tbody>            
        <?php foreach ($lista as $campo): ?>
          <tr>
            <td><?php echo $campo['nome'] ?></td>
            <td class="text-center">                
              <a title="Editar" href="<?php echo baseUrl().'/comunidade/edita/'.$campo['id']?>"><span class="glyphicon glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;
              <a title="Apagar" href="<?php echo baseUrl().'/comunidade/delete/'.$campo['id']?>"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a>&nbsp;&nbsp;
            </td>            
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- referente ao formulario de busca  -->
  <div class="container">
    <div class="row">
      <div id="myModal" class="modal fade in">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>            
            </div>
            <div class="modal-body">
              <div class="input-group">              
                <input type="text" class="form-control" placeholder="Pesquisar...">
                <span class="input-group-btn">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Ir</button>
                </span>
              </div>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
      });
    }, 5000);
  </script>
</body>
</html>




