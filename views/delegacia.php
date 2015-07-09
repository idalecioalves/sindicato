<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Cadastro de comunidades</title>
  <!-- Bootstrap -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
.alert{padding: 0;margin-bottom: 0;border: 0;}  
.blue{background: #73C3E6  !important;}
.orange{background: #FFEED7 !important;}
.green2{background: #ABE385 !important;}

/*Panel tabs*/
.panel-tabs {    position: relative;    bottom: 30px;    clear:both;    border-bottom: 1px solid transparent;}
.panel-tabs > li {    float: right;    margin-bottom: -1px;}
.panel-tabs > li > a {    margin-right: 2px;    margin-top: 4px;    line-height: .85;    border: 1px solid transparent;    border-radius: 4px 4px 0 0;    color: #ffffff;}
.panel-tabs > li > a:hover {    border-color: transparent;    color: #ffffff;    background-color: transparent;}
.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {    color: #fff;    cursor: default;    -webkit-border-radius: 2px;    -moz-border-radius: 2px;    border-radius: 2px;    background-color: rgba(255,255,255, .23);    border-bottom-color: transparent;}
</style>
</head>
<body>
  <?php include ('menu.php');?>
  <div class="container">
    <form class="form-horizontal" method="POST" action="">
      <div class="row">
        <div  class="alert-group">
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
  <div class="container">
    <div class="row">
      <div id="delegacia"  class="col-md-8 col-md-offset-2">
        <div id="delegacia" class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Cadastro de delegacias</h3>
            <span class="pull-right">
              <!-- Tabs -->
              <ul class="nav panel-tabs">
                <li><a href="#tab1" data-toggle="tab">Delegacia</a></li>
                <li><a href="#tab2" data-toggle="tab">Delegado</a></li>
                <li><a href="#tab3" data-toggle="tab">Locador</a></li>
                <li><a href="#tab4" data-toggle="tab">Observalções</a></li>
              </ul>
            </span>
          </div>
          <div class="panel-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <legend>Delegacia</legend>   
                
                <div class="form-group"  >
                  <div class="col-sm-8">
                    <label for="nome" class="control-label">Nome</label>
                    <input type="text" class="form-control" id="nome" required placeholder="">                     
                  </div>
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">Data Fundação</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                     
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-8">
                    <label for="Nome" class="control-label">Endereço:</label>
                    <input type="text" class="form-control" id="nome" placeholder="">              
                  </div>  
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">Bairro</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-5">
                    <label for="nome" class="control-label">Cidade</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>          
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">CEP</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>          
                  <div class="col-sm-1">
                    <label for="nome" class="control-label">UF</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">Telfone 1</label>
                    <input type="text" class="form-control" id="nome" placeholder="(    )">                      
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">Telfone 2</label>
                    <input type="text" class="form-control" id="nome" placeholder="(    )">                      
                  </div>
                  <div class="col-sm-6">
                    <label for="nome" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                </div>
              </div>
              <!--############################ fim panel 1 ##############################-->
              
              <div class="tab-pane" id="tab2">
                <legend>Delegado</legend>
                <div class="form-group"  >
                  <div class="col-sm-8">
                    <label for="nome" class="control-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">RG</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">CPF</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-8">
                    <label for="enderecoDelegado" class="control-label">Endereço:</label>
                    <input type="text" class="form-control" id="enderecoDelegado" placeholder="">                      
                  </div>
                </div>

                <div class="form-group"  >
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">Bairro</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">Cidade</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">CEP</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>          
                  <div class="col-sm-1">
                    <label for="nome" class="control-label">UF</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>          
                </div> 

                <div class="form-group"  >
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">Telfone 1</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">Telfone 2</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-6">
                    <label for="nome" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                </div>
              </div><!--############################ fim panel 2 ##############################-->
              <div class="tab-pane" id="tab3">
                <legend>Locador</legend>
                <div class="form-group">
                  <div class="col-sm-8">
                    <label for="nomeDelegado" class="control-label">Nome:</label>
                    <input type="text" class="form-control" id="nomeDelegado" placeholder="">            
                  </div>
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">RG</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">CPF</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-8">
                    <label for="enderecoDelegado" class="control-label">Endereço:</label>
                    <input type="text" class="form-control" id="enderecoDelegado" placeholder="">                      
                  </div>
                </div>

                <div class="form-group"  >
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">Bairro</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-4">
                    <label for="nome" class="control-label">Cidade</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>      
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">CEP</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>          
                  <div class="col-sm-1">
                    <label for="nome" class="control-label">UF</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>          
                </div> 
                <div class="form-group"  >
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">Telfone 1</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-3">
                    <label for="nome" class="control-label">Telfone 2</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                  <div class="col-sm-6">
                    <label for="nome" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="nome" placeholder="">                      
                  </div>
                </div>

              </div><!--############################ fim panel 3 ##############################-->
              <div class="tab-pane" id="tab4">
                <div class="form-group">
                  <div class="col-sm-12">
                    <legend>Observaçoes Gerais</legend>                          
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                  </div>
                </div> 
              </div><!--############################ fim panel 4 ##############################-->
            </div>
          </div>
        </div>
      </div>
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
      <td><?php echo $campo['delegaciaNome'] ?></td>
      <td class="text-center">                
        <a title="Editar" href="<?php echo baseUrl().'/delegacia/edita/'.$campo['id']?>"><span class="glyphicon glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;
        <a title="Apagar" href="<?php echo  baseUrl().'/delegacia/delete/'.$campo['id']?>"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a>&nbsp;&nbsp;
      </td>            
    </tr>
  <?php endforeach; ?>
</tbody>
</table>


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




