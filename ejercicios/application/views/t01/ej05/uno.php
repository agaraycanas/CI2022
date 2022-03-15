<div class="container">
	<h1>Tema 01 - Ej 04</h1>
	
	<?php if ($numeros != null):?>
	<h3>Números introducidos hasta el momento</h3>
    	<?php foreach ($numeros as $numero):?>
    		<?=$numero?> 
    	<?php endforeach;?>
	<?php endif;?>

	<h3>Introduce un número (0 para terminar)</h3>


	<form action="<?=base_url()?>t01/ej04/uno/unoPost" method="post">
		<input type="number" value="1" name="n" autofocus="autofocus" /> <br />

		<input type="submit" /> <br />
	</form>
	
		<form action="<?=base_url()?>t01/ej04/tres/tresPost" method="post">
		<input type="submit" value="Comenzar"/>
	</form>
</div>