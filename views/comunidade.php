<?php include ('layout.header.php');?>
<?php include ('layout.menu.php');?>
<?php include ('layout.alert.php');?>

<div id="comunidade" class="container">
  <form class="form-horizontal" method="POST" action="">
    <div class="row">        
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
  <?php include 'layout.footer.php'; ?>
