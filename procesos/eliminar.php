<?php
	
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$codigo_auto_incre = $_GET['codigo_auto_increm'];
	$obj = new MetodosCrud();

	

	if ($obj->eliminarDatos($codigo_auto_incre) == 1)
	{
		header("location:consultar.php");
		//echo "<h1>Datos insertados correctamente!</h1>";
	}
	else
	{
		echo "falló al eliminar la informacion";
	}
?>