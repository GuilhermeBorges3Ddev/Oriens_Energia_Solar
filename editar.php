<?php include_once("header.php") ?>

<div class="form">

<div class="mensagme">
	<?php 

	if(isset($_GET['error']))
	{
		?> 
			<span style="color:red"><?php echo $_GET['error'] ?></span>
		<?php
	} 
	else if(isset($_POST['success']))
	{
		?> 
			<span style="color:green"><?php echo $_GET['success'] ?></span>
		<?php
	}


	?>
</div>
	
    <form class="form" method="POST" action="editando.php" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="nome">Nome</label>
                <input type="text" id="codigo" name="nome" class="form-control" autofocus="true" required max="1000000">
	</div>

	<div class="form-group">
		<label for="titulo">Cidade</label>
		<input type="text" id="cidade" name="cidade" class="form-control" autofocus="true" required maxlength="40">
	</div>

	<div class="form-group">
		<label for="genero">Email</label>
		<input type="text" id="email" name="email" class="form-control" required maxlength="35">
	</div>

	<div class="form-group">
		<label for="consumo">Consumo</label>
		<input type="text" id="consumo" name="consumo" class="form-control" required maxlength="30">
	</div>

<!--	<div class="form-group">
		<label for="Duracao">Duração</label>
		<input type="number" id="Duracao" name="duracao" class="form-control" required maxlength="11">
	</div>

	<div class="form-group">
		<label for="ano">Ano</label>
		<input type="number" id="ano" name="ano" class="form-control" required="" max="2100" min='1900'>
	</div>-->
<!--
	<div class="form-group">
		<label for="poster">Poster</label>
		<div class="form-control">
			<input type="file" name="poster">
		</div>
	</div>-->

	<div class="form-group">
		<button class="btn btn-success" type="submit">Editar</button>
	</div>

</form>


</div>


<?php include_once("footer.php") ?>