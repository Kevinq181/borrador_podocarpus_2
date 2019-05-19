<?php
include('../../adm_header.php');
extract($_GET);
$res = $miconexion->consulta("select * from aves where id=$id");
$lista_e = $miconexion->consulta_lista();

?>
<main>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href='../adm_birds_css/update.css' rel='stylesheet' type='text/css' />


	<form class='form' method="post" action="../adm_birds_dll/update.php" enctype="multipart/form-data">
		<h2>EDITAR ESPECIE</h2>
		<div class="">
			<div class="form_item col-12 col-lg-5">
				<input type="text" name="id" id="id" class="form_input" required value="<?php echo $lista_e[0]; ?>">
				<input type="text" name="nombre" id="nombre" class="form_input" required value="<?php echo $lista_e[1]; ?>">
				<label for="nombre" class="form_label">NOMBRE DE ESPECIE</label>
			</div>
			<div class="form_item col-12 col-lg-5">
				<input type="text" name="nombre_cientifico" id="nombre_cientifico" class="form_input" required value="<?php echo $lista_e[2]; ?>">
				<label for="nombre_cientifico" class="form_label">NOMBRE CIENTIFICO</label>
			</div>
		</div>
		<div class="form_item col-12 col-lg-5">
			<input type="text" name="habitat" id="habitat" class="form_input" required value="<?php echo $lista_e[4]; ?>">
			<label for="habitat" class="form_label">HABITAT</label>
		</div>

		<div class="row justify-content-center">
			<div class="form_item col-11">
				<input class="form_input form_upload" type="file" name="img" id="foto">
				<label class="form_label">ELEGIR IMAGEN</label>
			</div>
			<div class="form_item col-11">
				<input type="text" name="imagen" id="imagen" class="form_input" required value="<?php echo $lista_e[5]; ?> ">
				<label for="imagen" class="form_label" id="txt_imagen">Imagen actual</label>
				<img src="../adm_birds_dll/<?php echo $lista_e[5]; ?>" width="300px" height="200px" id="imagen_actual"> 
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="form_item col-11">
				<textarea class="form_textarea" id="textarea" name="descripcion" rows="3" cols="444" required><?php echo $lista_e[3]; ?></textarea>
				<label for="textarea" class="form_label">DESCRIPCIÓN</label>
			</div>
		</div>

		<div class="row justify-content-center">
			<button class="submit" type="submit">EDITAR</button>
		</div>
	</form>
</main>

<?php
include('../../adm_footer.php');
?>