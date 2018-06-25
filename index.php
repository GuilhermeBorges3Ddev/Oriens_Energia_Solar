<?php include_once("header.php") ?>

<div class="form">

<div class="mensagme">
	<?php 

        if(isset($_POST['success']))
	{
		?> 
			<span style="color:green"><?php echo $_GET['success'] ?></span>
		<?php
	}


	?>
</div>
	
    <form class="form" method="POST" action="form.php" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="nome">Nome</label>
                <input type="text" id="codigo" name="nome" class="form-control" autofocus="true" required max="1000000">
	</div>

	<div class="form-group">
		<label for="titulo">Cidade</label>
		<input type="text" id="cidade" name="cidade" class="form-control" autofocus="true" required maxlength="40">
	</div>
        
        <div class="form-group">
		<label for="titulo">Estado</label>
		<select name="estado" class="form-control" placeholder="Selecione o Estado"> 
		<option value="estado">Selecione o Estado</option> 
		<option value="ac">Acre</option> 
		<option value="al">Alagoas</option> 
		<option value="am">Amazonas</option> 
		<option value="ap">Amapá</option> 
		<option value="ba">Bahia</option> 
		<option value="ce">Ceará</option> 
		<option value="df">Distrito Federal</option> 
		<option value="es">Espírito Santo</option> 
		<option value="go">Goiás</option> 
		<option value="ma">Maranhão</option> 
		<option value="mt">Mato Grosso</option> 
		<option value="ms">Mato Grosso do Sul</option> 
		<option value="mg">Minas Gerais</option> 
		<option value="pa">Pará</option> 
		<option value="pb">Paraíba</option> 
		<option value="pr">Paraná</option> 
		<option value="pe">Pernambuco</option> 
		<option value="pi">Piauí</option> 
		<option value="rj">Rio de Janeiro</option> 
		<option value="rn">Rio Grande do Norte</option> 
		<option value="ro">Rondônia</option> 
		<option value="rs">Rio Grande do Sul</option> 
		<option value="rr">Roraima</option> 
		<option value="sc">Santa Catarina</option> 
		<option value="se">Sergipe</option> 
		<option value="sp">São Paulo</option> 
		<option value="to">Tocantins</option> 
	</select>
	</div>

	<div class="form-group">
		<label for="genero">Email</label>
		<input type="text" id="email" name="email" class="form-control" required maxlength="35">
	</div>

	<div class="form-group">
		<label for="consumo">Consumo</label>
		<input type="text" id="consumo" name="consumo" class="form-control" required maxlength="30">
	</div>


	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>

</form>


</div>


<?php include_once("footer.php") ?>