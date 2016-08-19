<html>

	<head>

	<title>Insertar Demo</title>

	</head>

	 
 
	<body>

<!--boton ingreso -->


<form action="insertar.php" method="post" enctype="multipart/form-data">
<p>id: <input type="text" name="id_demo" /></p>
<p>demo: <input type="text" name="demo" /></p>

<label for="imagen">Imagen:</label>
<input type="file" name="photo"  size=25 />

<input type="submit" name="insertar" value ="Submit">
</form>
<!--imagen-->


<!--salir-->
<form id="salir" action="formulario.php" method="get">
<input type="submit" name="salir" value ="salir">
</form>



</body>

</html>
