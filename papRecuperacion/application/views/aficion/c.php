<div class="container">
	<h1>Nueva afición</h1>
	
	<form action="<?=base_url()?>aficion/cPost" method="post">
		<label for="idNombre">Nombre</label>
		<input id="idNombre" type="text" name="nombre" autofocus="autofocus" required="required"/>
		<br/>
		
		<input type="submit"/>
		<br/>
	</form>
</div>