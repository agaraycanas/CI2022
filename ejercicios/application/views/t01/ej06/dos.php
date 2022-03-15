<div class="container">
	<h1>Tema 01 - Ej 06</h1>
	
	<h3>Lista de usuarios</h3>
	<?php foreach ($datos as $nombre => $edad):?>
		<?=$nombre?> (<?=$edad?>),  
	<?php endforeach;?>
	
	<form action="<?=base_url()?>t01/ej06/dos/dosP" method="post">
		<input type="submit" value="Volver a empezar"/>
	</form>
</div>