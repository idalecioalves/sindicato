<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro de Aracoiaba</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>	
	<script src="<?php echo baseUrl().'/js/script.js'?>"></script>	

	<script src="./js/cpf.js"></script>
	<script src="./js/porcima.js"></script>
	<link rel="stylesheet" href="css/cad.css" />
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/cadado.css" />
	<link rel="stylesheet" href="css/sobre.css" />
	<!--<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=cadastro">-->
</head>
<body>
	<?php include'menu.php'; ?>
	<div id="geral">
		<img src="img/logo.png" id="imagemlogo" class="bradius">
		<header id="cabecalho">
			<img src="img/topo.png" id="imgtxt">
			<input  id="registro" type="text" class="txtregistro bradius" name="registro">
		</header>
		<div class="logo"></div>
		<form>
			<div id="delegaciacadados">
				<label for="delegacia" >Del. Sindical de:</label>
				<select id="delegacia" class="txtdelegacia bradius" name="delegacia">
					<option>Option one</option>
					<option>Option two</option>
				</select>
			</div>	

			<div id="entrasaicadados">
				<label for="calendario" >Entrada:</label>
				<input type="text" class="txtentracalend bradius calendario"/>
				<label for="calendario" >Saida:</label>
				<input type="text" class="txtsaidacalend calendario bradius" />
			</div>

			<div id="cadastrar">
				<label id="dadopescadados" class="bradius" for="dados">DADOS PESSOAIS:</label>
				<div id="nomecadados">
					<label for="nome" >Nome</label>
					<div id="camponome">
						<input id="nome" type="text" class="txtnome bradius" name="nome" >	
					</div>				
				</div>
				<div id="apelidocadados">
					<label for="apelido" >Apelido</label>
					<div id="campoapelido">
						<input id="apelido" type="text" class="txtapelido bradius" name="apelido" >	
					</div>
				</div>

				<div id="datacadados">
					<label for="calendario" >Nascimento:</label>
					<div>
						<input type="text"  class="txtcalend bradius calendario" />			
					</div>
				</div>

				<div id="municadados">
					<label for="municipio" >Município:</label>
					<div>
						<input id="municpio" type="text" class="txtmuni bradius" name="municipio" >	
					</div>			
				</div>

				<div id="estadocadados">
					<div id="estadobel">
						<label for="estado" >Estado:</label>
					</div>
					<div>
						<input id="estado" type="text" class="txtestado bradius" name="estado" >	
					</div>							
				</div>

				<div id="maecadados">
					<div id="maebel">
						<label for="mae" >Mãe:</label>
					</div>
					<div>
						<input id="mae" type="text" class="txtpai bradius" name="mae" >
					</div>
				</div>	

				<div id="paicadados">
					<div id="paibel">
						<label for="pai" >Pai:</label>
					</div>
					<div>
						<input id="pai" type="text" class="txtpai bradius" name="pai" >	
					</div>
				</div>
				<div id="residcadados">
					<div class="control-group">
						<label for="residencia" >Residência:</label>						
						<a href="/sindicato/delegacia/lista" rel="modal" class="btn btn-primary">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
						<button type="submit" id="atualiza"class="btn btn-primary" value="Salvar">
							<span class="glyphicon glyphicon-refresh"></span>
						</button>
						<div class="controls ">
							<select id="comunidade" name="comunidade" class="txtresid bradius">
								<option>Option one</option>
								<option>Option two</option>
							</select>									
						</div>
					</div>
				</div>


				<div class="window" id="janela1">

				</div>


				<div id="civgeral">
					<div>
						<label id="civilabel" for="estadocivic" >Estado Civil:</label>	
					</div>	
					<div id="esivilcadados" class="bradius">
						<input type="radio" name="opcao" value="solteiro">Solteiro
						<input type="radio" name="opcao" value="casado">Casado
						<input type="radio" name="opcao" value="Amasiado">Amasiado
						<input type="radio" name="opcao" value="outros">Outros
						<input type="radio" name="opcao" value="viuvo">Viúvo
					</div>
				</div>

				<div id="conjugecadados">
					<div id="conjugebel">
						<label for="conjuge" >Nome do Cônjuge:</label>
					</div>
					<div>
						<input id="conjuge" type="text" class="txtconjuge bradius" name="conjuge" >	
					</div>							
				</div>

				<div id="filhocadados">
					<div id="filho">
						<label id="filabel" for="filho">Filhos Menores:</label>
					</div>
					<div>
						<input id="cabelo" type="text" class="txtfilho bradius" name="conjuge" >	
					</div>
				</div>

				<div id="cpfcadados">
					<div>
						<label id="cpf" for="cpf" >CPF:</label>
					</div>
					<div id="cpf">
						<input type="text" name="cpf" id="cpf" class="txtcpf bradius"onblur="javascript: validarCPF(this.value);"   maxlength="14" onkeypress="javascript: mascara(this, cpf_mask);">
					</div>							
				</div>

				<div id="iguaiscadados">
					<div>
						<label id="casado" for="casado" >Cert. Casamento:</label>
					</div>
					<div id="casado">
						<input id="casado" type="text" class="txtcasado bradius" name="casado">	
					</div>							
				</div>

				<div id="iguaiscadados">
					<div>
						<label id="pele" for="pele" >Pele:</label>
					</div>
					<div id="pele">
						<input id="pele" type="text" class="txtpele bradius" name="pele" >	
					</div>							
				</div>

				<div id="iguaiscadados">
					<div>
						<label id="olhos" for="olhos" >Olhos:</label>
					</div>
					<div id="olhos">
						<input id="olhos" type="text" class="txtolhos bradius" name="olhos" >	
					</div>							
				</div>

				<div id="iguaiscadados">
					<div>
						<label id="cabelos" for="cabelos" >Cabelos:</label>
					</div>
					<div id="cabelos">
						<input id="cabelos" type="text" class="txtcabelos bradius" name="cabelos" >	
					</div>							
				</div>

				<div id="iguaiscadados">
					<div>
						<label id="altura" for="altura" >Altura:</label>
					</div>
					<div id="altura">
						<input id="altura" type="text" class="txtaltura bradius" name="altura" >	
					</div>							
				</div>	

				<div id="carteiracadados">
					<div>
						<label id="carteira" for="carteira" >Carteira Profissional Nº:</label>
					</div>
					<div id="Carteira">
						<input id="carteira" type="text" class="txtcarteira bradius" name="carteira" >	
					</div>							
				</div>

				<div id="iguais2">
					<div>
						<label id="serie" for="altura" >Série:</label>
					</div>
					<div id="serie">
						<input id="serie" type="text" class="txtserie bradius" name="serie" >	
					</div>							
				</div>			

				<div id="iguais2">
					<div>
						<label id="via" for="via" >Via:</label>
					</div>
					<div id="via">
						<input id="via" type="text" class="txtvia bradius" name="via" >	
					</div>							
				</div>

				<div id="resevistacadados">
					<div>
						<label id="resevista" for="carteira" >Carteira Resevista Nº:</label>
					</div>
					<div id="Carteirarese">
						<input id="Carteirarese" type="text" class="txtresevista bradius" name="resevista" >	
					</div>							
				</div>	

				<div id="iguais2">
					<div>
						<label id="serierese" for="rese" >Série:</label>
					</div>
					<div id="serierese">
						<input id="serierese" type="text" class="txtserierese bradius" name="serierese" >	
					</div>							
				</div>

				<div id="iguais2">
					<div>
						<label id="viarese" for="via" >Via:</label>
					</div>
					<div id="viarese">
						<input id="viarese" type="text" class="txtviarese bradius" name="viarese" >	
					</div>							
				</div>	

				<div id="identcadados">
					<div>
						<label id="ident" for="carteira" >Carteira Identidade Nº:</label>
					</div>
					<div id="identidade">
						<input id="identidade" type="text" class="txtidentidade bradius" name="carteira" >	
					</div>							
				</div>

				<div id="iguais2">
					<div>
						<label id="expeditor" for="expeditor" >Orgão Exp.:</label>
					</div>
					<div id="expeditor">
						<input id="expeditor" type="text" class="txtexpeditor bradius" name="expeditor" >	
					</div>							
				</div>	

				<div id="titulocadados">
					<div>
						<label id="via" for="via" >Título de Eleitor Nº:</label>
					</div>
					<div id="titulo">
						<input id="titulo" type="text" class="txttitulo bradius" name="titulo" >	
					</div>							
				</div>

				<div id="iguais2">
					<div>
						<label id="zona" for="via" >Zona:</label>
					</div>
					<div id="zona">
						<input id="zona" type="text" class="txtzona bradius" name="zona" >	
					</div>							
				</div>

				<div id="iguais2">
					<div>
						<label id="secao" for="via" >Seção:</label>
					</div>
					<div id="secao">
						<input id="secao" type="text" class="txtsecao bradius" name="secao" >	
					</div>
				</div>
			</div>

			<div id="graucadados" class="bradius">
				<label id="escolaridadecadados" for="escola">ESCOLARIDADE:</label>	
				<input type="radio" name="opcao" value="analfabeto">Analfabeto
				<input type="radio" name="opcao" value="alfabetizado">Alfabetizado
				<input type="radio" name="opcao" value="pgmenor">1º Grau Menor
				<input type="radio" name="opcao" value="pgmaior">1º Grau Maior
				<input type="radio" name="opcao" value="sgcompleto">2º Grau Completo
				<input type="radio" name="opcao" value="sgincompleto">2º Grau Incompleto
			</div>

			<div id="profissaocadados" class="bradius">
				<div id="proficadados" class="bradius">
					<label for="escola">DADOS PROFISSIONAIS:</label>
				</div>
				<div id="proflabel">
					<label id="profissaolabel"> Profissão:</label>
					<input type="text" class=" txtprof bradius" name="" >		
				</div>
				<div id="pro">
					<input type="radio" name="opcao1" class="" value="analfabeto">Produtor</br></br>
					<input type="radio" name="opcao1" class="" value="alfabetizado">Comodatário				
				</div>
				<div id="pro">
					<input type="radio" name="opcao1" class=""value="pgmenor"> Arrendatário</br></br>
					<input type="radio" name="opcao1" value="pgmaior">Assalariado		
				</div>		
				<div id="pro">
					<input type="radio" name="opcao1" class="" value="sgcompleto">Posseiro</br></br>
					<input type="radio" name="opcao1" class="" value="sgincompleto">Parceiro
				</div>
				<div id="pro">
					<input type="radio" name="opcao1" class="" value="sgincompleto">Assentado</br></br>
					<input type="radio" name="opcao1" class="" value="sgincompleto">Meeiro
				</div>
				<div id="proflabel">
					<label id="profissaooutros"> Outros:</label>
					<input type="text" class=" txtoutroprof bradius" name="" >		
				</div>
				<div id="proflabel">
					<label id="profissaolabel2"> Cargo no Sindicato:</label>
					<input type="text" class=" txtprof2 bradius" name="" >		
				</div>

				<div id="proflabel">
					<label id="periodolabel" for="calendario" > se ocupa, mencionar o período:</label>	
					<input type="text" class="txtcalend2 bradius calendario" />			
				</div>

				<div id="proflabel">
					<label id="periodolabel" for="calendario" > Data da Admissão no Sindicato:</label>	
					<input type="text" class="txtcalend2 bradius calendario" />			
				</div>
			</div>

			<div id="foto">
				<!--foto-->
			</div>

			<div id="depende" class="bradius">
				<label id="dependecadados" class="bradius" for="depende">DEPENDENTES:</label>
			</div>

			<input id="bntcad" type="submit" class="sb bradius" value="Cadastrar"/>

		</form>
	</div>
	<div id="mascara"></div>
</body>
</html>
