<div class="container">
	<h1>Nueva persona</h1>
	
	<form action="<?=base_url()?>persona/cPost" method="post">
		<label for="idLoginname">Loginname</label>
		<input id="idLoginname" type="text" name="loginname" autofocus="autofocus" required="required"/>
		<br/>
		
		<label for="idNombre">Nombre</label>
		<input id="idNombre" type="text" name="nombre"/>
		<br/>
		
		<label for="idApellido">Apellido</label>
		<input id="idApellido " type="text" name="apellido"/>
		<br/>
		
		<div class="row">
		<label for="idPaisNace">País de nacimiento</label>
    	<select id="idPaisNace" name="idPaisNace">
    		<?php foreach ($paises as $pais):?>
    		<option value="<?=$pais->id?>">
    			<?=$pais->nombre?>
    		</option>
    		<?php endforeach;?>
    	</select>
    	</div>
		
		<input type="submit"/>
		<br/>
	</form>
</div>