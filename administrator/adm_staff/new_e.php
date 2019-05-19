<?php
	extract($_POST);
	include('../adm_header.php');
	$miconexion->consulta("insert into staff values ('','$name','$lastname','$email','$phone','$address','$nationality','$place','$url_img')");
	echo "<script>location.href='index.php'</script>";
?>
