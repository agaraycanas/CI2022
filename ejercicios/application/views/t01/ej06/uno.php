<div class="container">
	<h1>Tema 01 - Ej 06</h1>
	

	<h3>Introduce un nombre y edad (nombre="fin" para terminar)</h3>


	<form action="<?=base_url()?>t01/ej06/uno/unoP" method="post">
		<label for="idNombre">Nombre</label>
		<input id="idNombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/>
		
		<label for="idEdad">Edad</label>
		<input id="idEdad" type="number" name="edad" value="18" min="0" max="200"/>
		<br/>
		
		<input type="submit" /> <br />
	</form>
	
</div>