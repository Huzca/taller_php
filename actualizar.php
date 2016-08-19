<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_GET['id_demo'];
$demo = $_GET['demo'];

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Actualiza Demo</title>       
	</head>
    <body style="padding:15px;">

 		
                 <?php 
			$cadena = "update demo set nombre = '" .$demo. "' where id_demo =".$id ;
			echo $cadena;
			$model->UpdateDEMO($cadena);?>
               
 
    </body>
</html>
