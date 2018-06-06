<?php 
	include '../conexion.php';
	$db = new Conexion();

	if ($db->conectar())	
	{
		echo "conexion extiosa";
	}else
	{
		echo "fallo al conectar";
	}
	require_once "../conexion.php";
	require_once "../metodosCrud.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de datos</title>
</head>
<body>
	<h2>consulta de registros</h2>
	<table border="1">
		<tr>
			<td>Nombre Completo</td>
			<td>identificacion</td>
			<td>sede - carrera</td>
			<td>codigo</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</tr>

		<?php
			$obj = new MetodosCrud();
			$sql="select per_id, per_nom_com, per_ide, per_sed_car, per_cod from persona";
			$consulta = $obj->mostrarDatos($sql);

			while ($dato = mysqli_fetch_array($consulta))
			{
				echo "<tr>";
				echo "<td>".$dato['per_nom_com']."</td>";
				echo "<td>".$dato['per_ide']."</td>";
				echo "<td>".$dato['per_sed_car']."</td>";
				echo "<td>".$dato['per_cod']."</td>";
		?>
				<td><a href="../editar.php?codigo_auto_increm=<?php echo $dato['per_id'] ?>">Actualizar</a></td>
				<td><a href="eliminar.php?codigo_auto_increm=<?php echo $dato['per_id'] ?>">Eliminar</a></td>
				</tr>
		<?php
			}
		?>
	</table>
</body>
</html>