<?php
	require_once "../conexion.php";
	require_once "../metodosCrud.php";
	
	$nombre_completo = $_POST['txt_nombre_completo'];
	$identificacion = $_POST['txt_identificacion'];
	$sede_carrera = $_POST['txt_sede_carrera'];
	$codigo_estudiante = $_POST['txt_codigo'];
	$codigo_auto_incre = $_POST['txt_codigo_autoincremen'];

	$datos = array($nombre_completo, $identificacion, $sede_carrera, $codigo_estudiante, $codigo_auto_incre);
	$obj = new MetodosCrud();

	if ($obj->actualizarDatos($datos) == 1)
	{
		header("location:consultar.php");
		echo "<h1>Datos actualizados correctamente!</h1>";
	}
	else
	{
		echo "falló al actualizar la informacion";
	}
?>

