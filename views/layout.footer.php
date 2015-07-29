	<!-- jQuery -->
	<script src="<?php echo baseUrl().'/js/jquery.min.js';?>"></script>		
	<script src="<?php echo baseUrl().'/js/jquery-ui.js';?>"></script>
	<script src="<?php echo baseUrl().'/js/bootstrap.js';?>"></script>
	<script src="<?php echo baseUrl().'/js/cpf.js';?>"></script>
	<script src="<?php echo baseUrl().'/js/porcima.js'?>"></script>	
	<script src="<?php echo baseUrl().'/js/script.js'?>"></script>
	<script type="text/javascript">
		window.setTimeout(function()
		{
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();
			});
		}, 5000);
	</script>
</body>
</html>