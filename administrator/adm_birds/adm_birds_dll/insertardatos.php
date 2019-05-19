<?php

include('../../adm_header.php');

$miconexion->conectar("localhost", "root", "", "podocarpusdb");

if (isset($_FILES['img'])) {
    $nombreImg = $_FILES['img']['name'];
    $ruta = $_FILES['img']['tmp_name'];
    $destino = "imagenes/" . $nombreImg;
    if (copy($ruta, $destino)) {
        
        $miconexion->consulta("INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','$destino')");
       
        if ($miconexion) {
            echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="../adm_birds_internas/birds_insert.php";</script>';
        } else {
            echo '<script type="text/javascript"> alert("Fallido"); window.location="../adm_birds_internas/birds_insert.php";</script>';
            die("Error" . mysqli_error($miconexion));
        }
    }
}

?>
