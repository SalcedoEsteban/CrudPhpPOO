<?php
	require_once "../conexion.php";
	require_once "../metodosCrud.php";
	
	$nombre_completo = $_POST['txt_nombre_completo'];
	$identificacion = $_POST['txt_identificacion'];
	$sede_carrera = $_POST['txt_sede_carrera'];
	$codigo = $_POST['txt_codigo'];

	$datos = array($nombre_completo, $identificacion, $sede_carrera, $codigo);

	$obj = new MetodosCrud();
	
	if ($obj->insertarDatos($datos) == 1)
	{
		header("location:consultar.php");
		//echo "<h1>Datos insertados correctamente!</h1>";
	}
	else
	{
		echo "falló al agregar la informacion";
	}
?>