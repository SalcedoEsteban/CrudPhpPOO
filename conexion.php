<?php

	class Conexion
	{
		
		private $servidor;
		private $usuario;
		private $password;
		private $bd;
		private $conexion;

		function __construct()
		{
			$this->servidor = 'localhost';
			$this->usuario = 'root';
			$this->password = 'root123';
			$this->bd = 'estudiante';
		}

		public function conectar()
		{
			$this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
			return $this->conexion;
		}

		public function cerrarConexion()
		{
			$this->conexion->close();
			return true;
		}
	}

	/*$obj = new Conexion();

	if ($obj->conectar())
	{
		echo "conexion extiosa";
	}else
	{
		echo "fallo al conectar";
	}*/

?>