<?php

require_once("colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("demo");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO($cadena)
 {
 try
	{
	$result=$this->modelo->operacion($cadena);
                       
	return $result;
	}
	catch(Exception $e)
	{
		die($e->getMessage());
	}
 }
 
 public function UpdateDEMO($cadena)
 {
 try
	{
	   $result= $this->modelo->operacion($cadena);
                       
			return $result;
	}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 

 public function DeleteDEMO($id)
 {
 try
		{
			echo $id;
		     $result= $this->modelo->operacion("delete from demo where id_demo = " .$id);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
