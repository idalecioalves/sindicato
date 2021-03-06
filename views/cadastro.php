<?php include ('layout.header.php');?>
<?php include ('layout.menu.php');?>
<?php include ('layout.alert.php');?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				<h4 class="modal-title">Cadastro de Comunidades</h4>
			</div>
			<div class="modal-body">
				<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="/sindicato/comunidade/lista"></iframe>
			</div>
			<!--<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>-->
		</div>
	</div>
</div>

<div id="geral">
	<img src="img/logo.png" id="imagemlogo" class="bradius">
	<header id="cabecalho">
		<img src="img/topo.png" id="imgtxt">
		<input  id="registro" type="text" class="txtregistro bradius" name="registro" required />
	</header>
	<div class="logo"></div>
	<form method="post">
		<div id="delegaciacadados">
			<label for="delegacia" >Del. Sindical de:</label>
			<select id="delegacia" name="delegacia" class="txtmedios bradius">
				<option>Option one</option>
				<option>Option two</option>
			</select>
		</div>
		<div id="entrasaicadados">
			<label for="calendario" >Entrada:</label>
			<input type="text" name="entra" class="txtentracalend bradius calendario" required/>
			<label for="calendario" >Saida:</label>
			<input type="text" name="sai" class="txtsaidacalend calendario bradius" />
		</div>
		<div id="cadastrar">
			<label id="titulos" class="bradius" for="dados">DADOS PESSOAIS:</label>
			<div id="nomecadados">
				<label for="nome" >Nome</label>
				<div id="camponome">
					<input id="nome" type="text" class="txtmaiores bradius" name="nome" required>
				</div>
			</div>
			<div id="primeira">
				<label for="apelido" >Apelido</label>
				<div id="campoapelido">
					<input id="apelido" type="text" class="txtmaiores bradius" name="apelido" required/>
				</div>
			</div>
			<div id="primeira">
				<label for="calendario" >Nascimento:</label>
				<div>
					<input type="text" name="calendnascimento"  class="txtpequenos bradius calendario" required/>
				</div>
			</div>
			<div id="primeira">
				<label for="municipio" >Município:</label>
				<div>
					<input id="municpio" type="text" class="txtmedios bradius" name="municipio" >
				</div>
			</div>
			<div id="primeira">
				<div id="estadobel">
					<label for="estado" >Estado:</label>
				</div>
				<div>
					<input id="estado" type="text" class="txtpequenos bradius" name="estado" />
				</div>
			</div>
			<div id="primeira">
				<div id="maebel">
					<label for="mae" >Mãe:</label>
				</div>
				<div>
					<input id="mae" type="text" class="txtmaiores bradius" name="mae" required />
				</div>
			</div>
			<div id="primeira">
				<div id="paibel">
					<label for="pai" >Pai:</label>
				</div>
				<div>
					<input id="pai" type="text" class="txtmaiores bradius" name="pai" required />
				</div>
			</div>
			<div id="primeira">
				<div class="control-group">
					<label for="residencia">Residência:</label>
					<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">
						<span class="glyphicon glyphicon-pencil"></span>
					</button>

					<button id="atualiza"class="btn btn-primary" value="Salvar">
						<span class="glyphicon glyphicon-refresh"></span>
					</button>
					<div class="controls ">
						<select required id="comunidade" name="comunidade" class="txtmedios bradius">
							<option>none</option>
							<option>Option two</option>
						</select>
					</div>
				</div>
			</div>
			<div id="civgeral">
				<div>
					<label id="civilabel" for="estadocivic" >Estado Civil:</label>
				</div>
				<div id="esivilcadados" class="bradius" />
				<input type="radio" name="opcao3" checked value="solteiro">Solteiro
				<input type="radio" name="opcao3" value="casado">Casado
				<input type="radio" name="opcao3" value="Amasiado">Amasiado
				<input type="radio" name="opcao3" value="outros">Outros
				<input type="radio" name="opcao3" value="viuvo">Viúvo
			</div>
		</div>
		<div id="primeira">
			<div id="conjugebel">
				<label for="conjuge" >Nome do Cônjuge:</label>
			</div>
			<div>
				<input id="conjuge" type="text" class="txtmaiores bradius" name="conjuge" >
			</div>
		</div>
		<div id="primeira">
			<div id="filho">
				<label id="filabel" for="filho">Filhos Menores:</label>
			</div>
			<div>
				<input id="cabelo" type="text" class="txtpequenos bradius" name="filhos" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="cpf" for="cpf" >CPF:</label>
			</div>
			<div id="cpf">
				<input type="text" name="cpf" id="cpf" class="txtmedios bradius" required onblur="javascript: validarCPF(this.value);"   maxlength="14" onkeypress="javascript: mascara(this, cpf_mask);">
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="casado" for="casado" >Cert. Casamento:</label>
			</div>
			<div id="casado">
				<input id="casado" type="text" class="txtpequenos bradius" name="casado">
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="pele" for="pele" >Pele:</label>
			</div>
			<div id="pele">
				<input id="pele" type="text" class="txtmedios bradius" name="pele" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="olhos" for="olhos" >Olhos:</label>
			</div>
			<div id="olhos">
				<input id="olhos" type="text" class="txtmedios bradius" name="olhos" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="cabelos" for="cabelos" >Cabelos:</label>
			</div>
			<div id="cabelos">
				<input id="cabelos" type="text" class="txtmedios bradius" name="cabelos" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="altura" for="altura" >Altura:</label>
			</div>
			<div id="altura">
				<input id="altura" type="text" class="txtpequenos bradius" name="altura" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="carteira" for="carteira" >Carteira Profissional Nº:</label>
			</div>
			<div id="Carteira">
				<input id="carteira" type="text" class="txtmedios bradius" name="carteiraprofissional" required />	
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="serie" for="altura" >Série:</label>
			</div>
			<div id="serie">
				<input id="serie" type="text" class="txtpequenos bradius" name="serieprofissional" required />
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="via" for="via" >Via:</label>
			</div>
			<div id="via">
				<input id="via" type="text" class="txtpequenos bradius" name="viaprofissional" required />
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="resevista" for="carteira" >Carteira Resevista Nº:</label>
			</div>
			<div id="Carteirarese">
				<input id="Carteirarese" type="text" class="txtmedios bradius" name="resevista" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="serierese" for="rese" >Série:</label>
			</div>
			<div id="serierese">
				<input id="serierese" type="text" class="txtpequenos bradius" name="serierese" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="viarese" for="via" >Via:</label>
			</div>
			<div id="viarese">
				<input id="viarese" type="text" class="txtpequenos bradius" name="viarese" >
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="ident" for="carteira" >Carteira Identidade Nº:</label>
			</div>
			<div id="identidade">
				<input id="identidade" type="text" class="txtmedios bradius" name="carteiraident" required />
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="expeditor" for="expeditor" >Orgão Exp.:</label>
			</div>
			<div id="expeditor">
				<input id="expeditor" type="text" class="txtpequenos bradius" name="expeditor" required />
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="via" for="via" >Título de Eleitor Nº:</label>
			</div>
			<div id="titulo">
				<input id="titulo" type="text" class="txtmedios bradius" name="titulo" required />
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="zona" for="via" >Zona:</label>
			</div>
			<div id="zona">
				<input id="zona" type="text" class="txtpequenos bradius" name="zona" required />
			</div>
		</div>
		<div id="primeira">
			<div>
				<label id="secao" for="via" >Seção:</label>
			</div>
			<div id="secao">
				<input id="secao" type="text" class="txtpequenos bradius" name="secao" required />
			</div>
		</div>
	</div>
	<div id="graucadados" class="bradius">
		<label id="titulos" for="escola">ESCOLARIDADE:</label>
		<input type="radio" name="opcao2" checked value="analfabeto">Analfabeto
		<input type="radio" name="opcao2" value="alfabetizado">Alfabetizado
		<input type="radio" name="opcao2" value="pgmenor">1º Grau Menor
		<input type="radio" name="opcao2" value="pgmaior">1º Grau Maior
		<input type="radio" name="opcao2" value="sgcompleto">2º Grau Completo
		<input type="radio" name="opcao2" value="sgincompleto">2º Grau Incompleto
	</div>
	<div id="profissaocadados" class="bradius">
		<div id="titulos" class="bradius">
			<label for="escola">DADOS PROFISSIONAIS:</label>
		</div>
		<div id="proflabel">
			<label id="profissaolabel"> Profissão:</label>
			<input type="text" class=" txtprof bradius" name="profissão" required />
		</div>
		<div id="pro">
			<input type="radio" name="opcao1" class="" value="analfabeto" checked>Produtor</br></br>
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
		<div id="proutros">
			<label> Outros:</label>
			<input type="text" class=" txtoutroprof bradius" name="outros" >
		</div>
		<div id="procargo">
			<label for="calendario" > Cargo no Sindicato:</label>
			<input type="text" name="cargo" class="txtprof2 bradius" required />
		</div>

		<label for="calendario" > se ocupa, mencionar o período:</label>
		<input type="text" name="calendfuncaosind" class="txtcalend2 bradius calendario" required />

		<label for="calendario" > Data da Admissão no Sindicato:</label>
		<input type="text" name="calendadmicao" class="txtcalend2 bradius calendario" required />
	</div>
	<div id="foto">
		<!--foto-->
	</div>
	<div id="depende" class="bradius">
		<label id="dependecadados" class="bradius" for="depende">DEPENDENTES:</label>
	</div>
	<input id="bntcad" type="submit" name="dependente" class="sb bradius" value="Cadastrar"/>
</form>
</div>
<?php include 'layout.footer.php'; ?>

