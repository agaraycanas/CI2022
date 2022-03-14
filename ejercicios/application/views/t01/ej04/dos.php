<div class="container">
	<h1>Tema 01 - Ej 04</h1>
	<h3>Introduce la operación que quieres realizar</h3>

	<form action="<?=base_url()?>t01/ej04/dos/dosPost" method="post">
		<select name="operacion">
			<option value="suma"> 
				Suma (+)
			</option>
			<option value="multi"> 
				Multiplicación (*)
			</option>
		</select>
		<input type="submit" /> <br />
	</form>
</div>