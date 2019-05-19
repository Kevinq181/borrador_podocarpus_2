<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="new.php"><i class="fas fa-user-plus"></i> Staff</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select id, nombres,apellidos,correo,celular,domicilio,nacionalidad,lugarEncargo,urlAvatar  from staff");
				$miconexion->verconsulta_crud();
			?>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>