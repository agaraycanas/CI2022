<div class="container">
	<h1>Editar persona</h1>
	
	<form action="<?=base_url()?>persona/uPost" method="post">
		<input type="hidden" name="idPersona" value="<?=$persona->id?>"/>
	
		<label for="idLoginname">Loginname</label>
		<input id="idLoginname" type="text" name="loginname" value="<?=$persona->loginname?>" autofocus="autofocus" required="required"/>
		<br/>
		
		<label for="idNombre">Nombre</label>
		<input id="idNombre" type="text" name="nombre" value="<?=$persona->nombre?>" />
		<br/>
		
		<label for="idApellido">Apellido</label>
		<input id="idApellido " type="text" name="apellido" value="<?=$persona->apellido?>" />
		<br/>
		
		<div class="row">
		<label for="idPaisNace">País de nacimiento</label>
    	<select id="idPaisNace" name="idPaisNace">
    		<option value="-1">---</option>
    		<?php foreach ($paises as $pais):?>
    		<option value="<?=$pais->id?>"
    		<?= $pais->id == $persona->fetchAs('pais')->nace->id ?'selected="selected"' : '' ?>
    		>
    			<?=$pais->nombre?>
    		</option>
    		<?php endforeach;?>
    	</select>
    	</div>
		
		<input type="submit"/>
		<br/>
	</form>
</div>