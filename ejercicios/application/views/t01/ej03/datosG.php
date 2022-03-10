<div class="container">
	<h1>Tema 01</h1>
	<h2>Ejercicio 03</h2>
	
	<form action="<?=base_url()?>t01/ej03/datosP" method="post">
		
		<h4>Introduce dos números n,p (1..10)</h4>
		
		<label for="idN">n</label>
		<input id="idN" type="number" name="n" min="1" max="10"/>
		<br/>
		
		<label for="idP">p</label>
		<input id="idP" type="number" name="p" min="1" max="10"/>
		<br/>
		
		<input type="submit"/>
		<br/>
				
	</form>
</div>