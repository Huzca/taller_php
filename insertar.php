<?php
require_once 'demoColector.php';
require_once 'demo.php';

// Logica
$alm = new demo();
$model = new demoColector();

$id = $_POST['id_demo'];
$demo = $_POST['demo'];
//$imagen = $_POST['photo'];

print_r($_FILES['photo']);
if($_FILES['photo']['name'])
{
echo $_FILES['photo']['name'];
echo $_FILES['photo']['tmp_name'];

}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>inicio</title>       
	</head>
    <body style="padding:15px;">

    
	<?php 
	$directorio = 'fotos';
	$tmp_name = $_FILES['photo']['tmp_name'];
	$nombre = $_FILES['photo']['name'];
	
	  move_uploaded_file($tmp_name, "$directorio/$nombre");

		$cadena = "insert into demo(id_demo,nombre, imagen) values(".$id. ",'".$demo."','".$nombre. "')";
		echo $cadena;
		$model->InsertDEMO($cadena);
		echo "se inserto registro, ejecute la consulta para verificar";
	?>
		

    </body>
</html>
