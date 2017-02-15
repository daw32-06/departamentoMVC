<?php
	/**
	*  @todo Clase para consultas preparadas mediante PDO
	*  @author Juan José Rubio
	*  @author Santiago Huerga
	*  @author Pablo Mora
	**/

	// Incluimos la configuracion de la base de datos
	require_once 'config/constDB.php';

	class DBPDO
	{
		/**
		* @param String $str_query --> Consulta preparada SQL
		* @param array[String] $param_query --> Paramestros de la consulta
		* @return null o PDOException o ResultSet con la informacion del registro
		**/

		public function ejecutarConsulta($str_query, $param_query)
		{

			try{
				// Creamos la conexion
				define("DSN","mysql:host=localhost;dbname=DAW206_PMMDBdepartamento");
				//$dsn = "\"mysql:host=".HOSTDB.";dbname=".NOMBREDB."\"";
				//echo $dsn;

				$db = new PDO(DSN, USUARIODB,PASSDB);
				// setAttribute sirve para habilitar las excepciones
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// sentencia preparada
				$preparedStatament = $db->prepare($str_query);
				// Ejecutamos la sentencia
				$preparedStatament->execute($param_query);
			}catch (PDOException $e) {
				// Devolvemos null si se encuentra excepcion
				$preparedStatament = null;
				echo "$e";
				// Cerramos la conexion
				unset($db);
			}
			// Devolvemos null o el resultado de la sentencia preparada;
			return $preparedStatament;
		}
	}
