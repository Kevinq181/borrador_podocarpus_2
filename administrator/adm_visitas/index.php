<?php
	include('../adm_header.php');
?>
<main>
	<?php
		$miconexion->consulta("select * from visitas");
		$miconexion->verconsulta();
	?>
</main>
<?php
	include('../adm_footer.php');
?>