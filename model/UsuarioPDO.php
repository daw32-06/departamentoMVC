<?php
    /**
    *  @todo Clase para las consultas PDO de la clase Usuario
    *  @author Juan José Rubio
    *  @author Santiago Huerga
    *  @author Pablo Mora
    **/

    // Incluimos la clase DBPDO.php que es la que ejecuta las consultas preparadas
    include_once("DBPDO.php");




    class UsuarioPDO{
        /**
        *  @param String $codUsuario : Codigo del usuario
        *  @param String $password : Contraseña del usuario
        *  @return array[String] : Array del usuario
        **/
        public static function validarUsuario($codUsuario, $password){
            // Inicializamos el $arrayUsuario
            $arrayUsuario=[];
            // Query de la consulta prepatrada
            $consultaUsuario = "select * from usuario where codUsuario=? AND password=?";
            // Ejecutamos la consulta preparada y la guardamos en el $resultSet
            $resultSet=DBPDO::ejecutarConsulta($consultaUsuario,[$codUsuario,$password]);
            // Comprobamos cuantos usuarios se han devuelto



            if($resultSet->rowCount())
            {
                // Guardamos el objeto de cada fila en $usuario
                $usuario = $resultSet->fetchObject();
                // Pasamos al array los valores obtenidos
                $arrayUsuario['descUsuario'] = $usuario->descUsuario;
                $arrayUsuario['perfil'] = $usuario->perfil;
                $arrayUsuario['ultimaConexion'] = $usuario->ultimaConexion;
                $arrayUsuario['contadorAccesos'] = $usuario->contadorAccesos;
            }
            // Devolvemos el array del usuario
            return $arrayUsuario;
        }

    }
