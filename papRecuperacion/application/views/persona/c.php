<div class="container">
	<h1>Nueva persona</h1>
	
	<form action="<?=base_url()?>persona/cPost" method="post">
		<label for="idLoginname">Loginname</label>
		<input id="idLoginname" type="text" name="loginname" autofocus="autofocus"/>
		<br/>
		
		<label for="idNombre">Nombre</label>
		<input id="idNombre" type="text" name="nombre"/>
		<br/>
		
		<label for="idApellido">Apellido</label>
		<input id="idApellido " type="text" name="apellido"/>
		<br/>
		
		<input type="submit"/>
		<br/>
	</form>
</div>