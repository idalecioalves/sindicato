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
		<?php if(isset($flash['error'])): ?>
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong><?php echo $flash['error'];?></strong>
			</div>
		<?php endif; ?>
	</div>
	<?php if(isset($errors)): ?>						
		<?php foreach ($errors as $key => $value): ?>
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong><?php echo $value;?></strong>
			</div>
		<?php endforeach ?>
	<?php endif; ?>
</div>