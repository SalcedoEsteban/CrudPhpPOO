<?php 
	include 'conexion.php';
	$db = new Conexion();

	if ($db->conectar())
	{
		echo "conexion extiosa";
	}else
	{
		echo "fallo al conectar";
	}
	require_once "conexion.php";
	require_once "metodosCrud.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>crud</title>
		<meta charset="utf-8">
	</head>
	<body>

		<form action="procesos/insertar.php" method="post">
			<p><label>Nombre completo</label></p>
			<input type="text" name="txt_nombre_completo">
			<p><label>Identtificacion</label></p>
			<input type="text" name="txt_identificacion">
			<p><label>Sede - carrera</label></p>
			<input type="text" name="txt_sede_carrera">
			<p><label>Código</label></p>
			<input type="text" name="txt_codigo">
			<p><button>Guardar</button></p>
		</form>

		<p><label>Consultar registros</label></p>
		<a href="procesos/consultar.php"><button>Consultar</button></a>

		<!--<table border="1">
		<tr>
			<td>Nombre Completo</td>
			<td>identificacion</td>
			<td>sede - carrera</td>
			<td>codigo</td>
		</tr>-->

		<?php
			/*$obj = new MetodosCrud();
			$sql="select per_nom_com, per_ide, per_sed_car, per_cod from persona";
			$consulta = $obj->mostrarDatos($sql);

			while ($dato = mysqli_fetch_array($consulta))
			{
				echo "<tr>";
				echo "<td>".$dato['per_nom_com']."</td>";
				echo "<td>".$dato['per_ide']."</td>";
				echo "<td>".$dato['per_sed_car']."</td>";
				echo "<td>".$dato['per_cod']."</td>";
				echo "<tr>";
			}
			echo "</table>";*/
		?>
	</body>
</html>