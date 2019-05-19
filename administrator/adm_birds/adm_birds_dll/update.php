<?php
extract($_POST);
include('../../adm_header.php');
if (isset($_FILES['img'])) {
	$nombreImg = $_FILES['img']['name'];
	$ruta = $_FILES['img']['tmp_name'];
	$destino = "imagenes/" . $nombreImg;
	if ($nombreImg != "") {
		if (copy($ruta, $destino)) {
			$miconexion->consulta("UPDATE aves SET nombre='$nombre', nombre_c='$nombre_cientifico', descripcion='$descripcion', habitat='$habitat' , imagen='$destino'  where id=$id");
			if ($miconexion) {
				echo '<script type="text/javascript"> alert("Editado Correctamente"); window.location="../index.php";</script>';
			} else {
				echo '<script type="text/javascript"> alert("Fallido"); window.location=".../index.php";</script>';
				die("Error" . mysqli_error($miconexion));
			}
		}
	} else {
		$miconexion->consulta("UPDATE aves SET nombre='$nombre', nombre_c='$nombre_cientifico', descripcion='$descripcion', habitat='$habitat' , imagen='$imagen'  where id=$id");
		if ($miconexion) {
			echo '<script type="text/javascript"> alert("Editado Correctamente"); window.location="../index.php";</script>';
		} else {
			echo '<script type="text/javascript"> alert("Fallido"); window.location=".../index.php";</script>';
			die("Error" . mysqli_error($miconexion));
		}
	}
}
