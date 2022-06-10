<?php
include_once './public/header.php';
?>
<div class="container mainText">
	<article class="mainText col-md-12 bg-light text-center">
		<h3>Registrar Producto de Limpieza</h3>

		<h5>Información del producto</h5>

		<form class="paddForm" action="?Controller=CleaningProduct&action=addProduct" method="post">
			<div class="mb-3">
				<label class="form-label" for="name">Nombre:</label>
				<input class="form-control" type="text" id="name" name="name" required />
			</div>
			<div class="mb-3">
				<label class="form-label" for="price">Precio:</label>
				<input class="form-control" id="price" name="price" required />
			</div>
			<div class="mb-3">
				<label class="form-label" for="description">Descripción:</label>
				<input class="form-control" id="description" name="description" maxlength="1000" required />
			</div>

			<div class="mb-3">
				<input class="btn btn-secondary" type="submit" value="Registrar" />
			</div>

			<div class="mb-3">
				<span id="message"><?php echo $vars['result'] ?></span>
			</div>
		</form>

	</article>
</div>
<?php
include_once './public/footer.php';
?>