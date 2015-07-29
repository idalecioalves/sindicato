<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo baseUrl(); ?>">Sindicato</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<!-- <li><a href="<?php echo baseUrl();?>/login">LOGIN</a></li> -->
			<li><a href="<?php echo baseUrl();?>/cadastro">CADASTRO</a></li>
			<li><a href="<?php echo baseUrl();?>/comunidade/lista">COMUNIDADE</a></li>
			<li><a href="<?php echo baseUrl();?>/usuario/lista">USUÁRIOS</a></li>
			<li><a href="<?php echo baseUrl();?>/delegacia/lista">DELEGACIA</a></li>
			
		</ul>		
		<ul class="nav navbar-nav navbar-right">			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (isset($_SESSION['user'])?$_SESSION['user']:'usuario') ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<!-- <li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li> -->					
					<li><a href="<?php echo baseUrl();?>/logout">SAIR</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>