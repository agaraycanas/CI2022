<div class="container">
	<h1>Tema 01 - Ej 04</h1>
	<h3>Resultado</h3>
	
	<?php $long = sizeof($numeros);?>
	<?php foreach ($numeros as $numero):?>
		<?=$numero?> <?=$long--==1?'':$op?> 
	<?php endforeach;?>
	
	= <?= $sol ?>
	
	<form action="<?=base_url()?>t01/ej04/tres/tresPost" method="post">
		<input type="submit" value="Otra vez"/>
	</form>
</div>