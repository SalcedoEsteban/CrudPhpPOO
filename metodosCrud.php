<?php
	class MetodosCrud
	{
		function __construct()
		{
		}

		public function mostrarDatos($sql)
		{
			$c = new Conexion();
			$conexion = $c->conectar();
			$result = mysqli_query($conexion, $sql);
			//return mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
			$obj->cerrarConexion();
		}

		public function insertarDatos($datos)
		{
			$c = new Conexion();
			$conexion = $c->conectar();
			$sql = "insert into persona(per_nom_com, per_ide, per_sed_car, per_cod) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
			$result = mysqli_query($conexion, $sql);
			return $result;
		}

		public function actualizarDatos($datos)
		{
			$c = new Conexion();
			$conexion = $c->conectar();
			$sql = "update persona set per_nom_com='$datos[0]', per_ide='$datos[1]', per_sed_car='$datos[2]', per_cod='$datos[3]' where per_id='$datos[4]'";
			$result = mysqli_query($conexion, $sql);
			return $result;
		}

		public function eliminarDatos($codigo_auto_incre)
		{
			$c = new Conexion();
			$conexion = $c->conectar();
			$sql = "delete from persona where per_id='$codigo_auto_incre'";
			$result = mysqli_query($conexion, $sql);
			return $result;
		}
	}
?>