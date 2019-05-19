<?php
class clase_mysqli{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";
	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;
	/*constructor de la clase*/
	function clase_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($db != "")$this->BaseDatos=$db;
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		/*conectar al servidor*/
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return$this->Conexion_ID;
	}
	function consulta($sql=""){
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Consulta_ID){
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}

	/*retorna el numero de campos de la consulta*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	/*retorna de campos de la consulta*/
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}
	function verconsulta(){
		echo "<table border=1>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".utf8_encode($row[$i])."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	function verconsulta_crud(){
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo  "<th>Actualizar</th>";
		echo  "<th>Borrar</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".utf8_encode($row[$i])."</td>";
			}
			echo "<td><a href='actualizar.php?id=$row[0]'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='borrar.php?idr=$row[0]'><i class='fas fa-trash-alt'></i></a></td>";
			echo "</tr>";
		} 
		echo "</table>";
	}
    
    function verconsulta_avescrud(){
		echo "<table class='table_birds'>";
		echo "<tr>";
        echo  "<th class='t1'>ID</th>";
        echo  "<th>Nombre</th>";
        echo  "<th>Nombre Científico</th>";
		echo  "<th>Habitat</th>";
		echo  "<th>Acciones</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".utf8_encode($row[$i])."</td>";
			}
<<<<<<< HEAD
			echo "<td><div class='btn_editar'><a href='adm_birds_internas/birds_update.php?id_editar=$row[0]'><i class='icon-mod'> | Editar</i></a></div>
                  <div  class='btn_eliminar'><a href='adm_birds_internas/birds_delete.php?id=$row[0]'><i class='icon-eli'> | Eliminar</i></a></div></td>";
=======
			echo "<td><div class='acciones'>
            <div class='btn_ver'><a href='adm_birds_internas/birds_read.php?id=$row[0]'><i class='icon-ver'></i></a></div>
            <div class='btn_editar'><a href='actualizar.php?id=$row[0]'><i class='icon-mod'></i></a></div>
            <div  class='btn_eliminar'><a href='adm_birds_internas/birds_delete.php?id=$row[0]'><i class='icon-eli'></i></a></div>
            </div></td>";
>>>>>>> 339aaf99c9d836d8c7c4864e7016f6ab35ca425f
			echo "</tr>";
		}
		echo "</table>";
	}
    
    function verconsulta_avesread(){
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
            echo "<img src='aguila.jpg' class='img_read'>";
            echo "<h3 class='nombre_read'>Nombre</h3>";
            echo "<p class='cont_read'>".utf8_encode($row[1])."</p>";
            echo "<h3 class='nombrec_read'>Nombre Científico</h3>";
            echo "<p class='cont_read'>".utf8_encode($row[2])."</p>";
            echo "<h3 class='habitat_read'>Habitat</h3>";
            echo "<p class='cont_read'>".utf8_encode($row[4])."</p>";
            echo "<h3 class='desc_read'>Descripción</h3>";
            echo "<p class='cont_desc_read'>".utf8_encode($row[3])."</p>";
			/*for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".utf8_encode($row[$i])."</td>";
			}*/
		}
		
	}
    
   /* function preguntar(id){
        if(confirm('Está seguro que deseas eliminar?')){
            window.location.href = "birds_delete.php?id="+ id_birds;
        }
    }
    */
	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) { 
				$row[$i];
			}
			return $row;
		}
	}
}
?>