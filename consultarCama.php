<?php
include('functions.php'); 
$cama=$_GET['cama'];
if ($resultset = getSQLResultSet("SELECT cedula,nombre,edad,sexo,telefono,direccion,responsable,religion,piso,cama,fecha_ingreso,ant_familiares,ant_patologicos,ant_no_patologicos,ant_gineco_obstetricos,habitacion 
FROM  `tablapis` where cama='$cama'")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
    	
    	}
    	
   }

   if(nico==1){
   	return holi
   }
   
   newt_form_set_timer(form, milliseconds)
?>
