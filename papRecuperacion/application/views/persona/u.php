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
		
		<input type="submit"/>
		<br/>
	</form>
</div>