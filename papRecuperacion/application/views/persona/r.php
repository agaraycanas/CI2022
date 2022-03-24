<div class="container">
	<h1>Lista de personas</h1>
	
	<form action="<?=base_url()?>persona/c">
		<input type="submit" value="Nueva persona"/>
	</form>
	
	<table>
		<tr>
			<th>Loginname</th>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
		
		<?php foreach ($personas as $persona):?>
		<tr>
			<td> <?=$persona->loginname?> </td>
			<td> <?=$persona->nombre?> </td>
			<td> <?=$persona->apellido?> </td>
		</tr>
		<?php endforeach;?>
	</table>
</div>