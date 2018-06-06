<?php
	require_once "conexion.php";
	$obj = new Conexion();
	$conexion = $obj->conectar();
	$codigo = $_GET['codigo_auto_increm'];
	$sql = "select per_nom_com, per_ide, per_sed_car, per_cod from persona where per_id='$codigo'";
	$result = mysqli_query($conexion, $sql);
	$datos = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZANDO DATOS</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>ACTULIZANDO DATOS</h2>
	<form action="procesos/actualizar.php" method="post">
		<input type="text" hidden="" value="<?php echo $codigo ?>" name="txt_codigo_autoincremen">
		<p><label>Nombre completo</label></p>
		<input type="text" name="txt_nombre_completo" value="<?php echo $datos[0] ?>">
		<p><label>Identtificacion</label></p>
		<input type="text" name="txt_identificacion" value="<?php echo $datos[1] ?>">
		<p><label>Sede - carrera</label></p>
		<input type="text" name="txt_sede_carrera" value="<?php echo $datos[2] ?>">
		<p><label>Código</label></p>
		<input type="text" name="txt_codigo" value="<?php echo $datos[3] ?>">
		<p><button>Guardar</button></p>
	</form>
</body>
</html>