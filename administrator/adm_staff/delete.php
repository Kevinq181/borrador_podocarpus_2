<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("delete from staff where id=$idr");
	echo "<script>location.href='index.php'</script>";
?>
