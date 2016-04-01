<?php
include('functions.php'); 
$cama=$_GET['camarote'];
if ($resultset = getSQLResultSet("SELECT cedula,nombre,edad,sexo,telefono,direccion,responsable,religion,piso,cama,fecha_ingreso,ant_familiares,ant_patologicos,ant_no_patologicos,ant_gineco_obstetricos,habitacion 
FROM  `tablapis` where camarote='$camarote'")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
    	
    	}
    	
   }
   
?>
