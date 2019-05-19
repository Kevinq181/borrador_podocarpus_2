<?php
	extract($_POST);
	include('../adm_header.php');
	$miconexion->consulta("update staff set nombres='$name', apellidos='$lastname', correo='$email', celular='$phone' , domicilio='$address', nacionalidad='$nationality' , lugarEncargo='$place' , urlAvatar='$url_img' where id=$id_e");
	echo "<script>location.href='index.php'</script>";
?>
