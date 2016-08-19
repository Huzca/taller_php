 <?php
require_once 'conexion.php';


$n= "hector";
$p= "nasus";
$Nombre = $_GET['Nombre'];
 


//echo $Nombre;
//echo "    ";
$Password = $_GET['Password'];
//echo $Password;


if ($Nombre == $n and $Password == $p)
{
echo "Usuario:  ";
echo $Nombre;
echo nl2br(" \n ");
echo nl2br(" \n ");

//conexion a la base 
$cone = new conexion();
//fin conexion a la base


require_once 'formulario.php';
//$boto = new botones();



}

else {
echo "usuario o contraseña incorrectos";
}

?>


