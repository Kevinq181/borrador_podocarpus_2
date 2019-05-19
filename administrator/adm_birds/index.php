<?php
	include('../adm_header.php');
?>
<main>
    <link rel="stylesheet" href="adm_birds_css/estilos.css">
    <link rel="stylesheet" href="adm_birds_css/fontello.css">
    <div class="birds_principal">
      <div class="ingresar"><a class="icon-insertar" href="adm_birds_internas/insert.php"> | Insertar</a></div>
       <h2 class="titulo_modificar">ITEMS DISPONIBLES</h2>
        <section class="area_trabajo1">
            <section class="contenido_mod1">
                <?php
				$miconexion->consulta("select id, nombre,nombre_c,habitat from aves");
				$miconexion->verconsulta_avescrud();
			?>
            </section>
        </section>
    </div>
</main>
<?php
	include('../adm_footer.php');
?>
