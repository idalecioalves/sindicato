<?php include ('layout.header.php');?>
<?php //include ('layout.menu.php');?>
<?php //include ('layout.alert.php');?>
<div  class="container">
   <form class="form-horizontal" method="POST" action="">     
      <fieldset>      
         <div  class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">               
                  <div id="delegacia" class="panel panel-primary">
                     <div class="panel-heading">
                        <h3 class="panel-title">Cadastro de delegacias</h3>
                        <span class="pull-right">
                           <!-- Tabs -->
                           <ul class="nav panel-tabs">
                              <li><a href="#tab4" data-toggle="tab">Observações</a></li>
                              <li><a href="#tab3" data-toggle="tab">Locador</a></li>
                              <li><a href="#tab2" data-toggle="tab">Delegado</a></li>
                              <li><a href="#tab1" data-toggle="tab">Delegacia</a></li>                    
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
                                    <input type="text" class="form-control" id="nome" required placeholder="" riquired>                     
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="nome" class="control-label">Data Fundação</label>
                                    <input type="text" class="form-control" id="nome" placeholder="" >                     
                                 </div>
                              </div>

                              <div class="form-group">
                                 <div class="col-sm-8">
                                    <label for="Nome" class="control-label">Endereço:</label>
                                    <input type="text" class="form-control" id="nome" placeholder="" riquired>              
                                 </div>  
                                 <div class="col-sm-4">
                                    <label for="nome" class="control-label">Bairro</label>
                                    <input type="text" class="form-control" id="nome" placeholder="" riquired>                      
                                 </div>
                              </div>

                              <div class="form-group">
                                 <div class="col-sm-8">
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

                              <div class="form-group">
                                 <div class="col-sm-3">
                                    <label for="nome" class="control-label">Telfone 1</label>
                                    <input type="text" class="form-control" id="nome" placeholder="(    )">                      
                                 </div>
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
   

   <div class="col-md-8 col-md-offset-2">       
      <table class="table table-striped table-hover">
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
</div>

<?php include 'layout.footer.php'; ?>