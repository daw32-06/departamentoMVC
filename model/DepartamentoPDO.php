<?php

/**
* Clase Departamento
* @author Juan José Rubio Iglesias <admin@tallernt.es>
* Ultima Revision: 16/02/2017
**/

include_once("DBPDO.php");

class DepartamentoPDO {

    /**
    * Consulta a la BBDD un departamento segun su codigo de departamento
    * @param string $codDepartamento Codigo del departamento
    * @return Departamento Devuelve el objeto departamento
    **/
    public static function getDepartamento($codDepartamento)
    {

        $departamentos = [];
        $query = "select * from departamento where codDepartamento=?";
        $resultSet = DBPDO::ejecutarConsulta($query, [$codDepartamento]);
        if(!is_null($resultSet))
        {
            if ($resultSet->rowCount()) {
                $objDepartamento = $resultSet->fetchObject();
                $departamentos['descDepartamento'] = $objDepartamento->descDepartamento;
                $departamentos['volumenDeNegocio'] = $objDepartamento->volumenDeNegocio;
                $departamentos['disabled'] = $objDepartamento->disabled;
            }
        }else{
            $departamentos = null;
        }
        return $departamentos;
        //Return Array del departamento￼
    }

    /**
    * Añade un departamento a la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @param string $descDepartamento Descripcion del departamento
    * @param float $volumenNegocio Volumen de Negocio
    * @return boolean Devuelve verdadero o falso para saber si se ha creado correctamente
    **/
    public static function addDepartamento($codDepartamento, $descDepartamento, $volumenDeNegocio)
    {
        $altaCorrecta = true;
        $sentenciaSQL = "insert into departamento (codDepartamento,descDepartamento,volumenDeNegocio) values(?,?,?)";

        $resultSet = DBPDO::ejecutarConsulta($sentenciaSQL, [$codDepartamento, $descDepartamento, $volumenDeNegocio]);
        //echo gettype($resultSet);
        if (is_null($resultSet)) {
            $altaCorrecta = false;
        }
        return $altaCorrecta;
    }

    /**
    * Obtiene el numero de departamentos (Para la paginacion)
    * @param string $descripcion Criterio de busqueda por descripcion
    * @param string $disabled Indica si debe contar tambien los departamentos deshabilitados
    * @return integer Devuelve el numero de registros encontrados
    */
    public static function countDepartamentos($descripcion, $disabled)
    {
        //Return integer
    }

    /**
    * Obtiene una lista de departamentos consultando a la BBDD
    * @param string $descDepartamento Parametro de busqueda con la descripcion del departamento
    * @param integer $firstReg Primer numero de de la lista de la base de datos (para la paginacion)
    * @param integer $lastReg Ultimo numero de de la lista de la base de datos (para la paginacion)
    * @param boolean $disabled Campo booleano para saber si mostramos tambien los departamentos deshabilitados
    * @return departamento[] Devuelve un array de departamentos
    */
    public static function listDepartamentos($descDepartamento, $firstReg, $lastReg, $disabled)
    {
        $matrizDepartamentos = [];
        // Si disabled es true devolvemos todos en caso contrario
        if($disabled)
        {
            $consultaDepartamentos = "select * from departamento where descDepartamento like ?";
        }else{
            $consultaDepartamentos = "select * from departamento where descDepartamento like ? and disabled is NULL";
        }
        $resultSet = DBPDO::ejecutarConsulta($consultaDepartamentos, ["%$descDepartamento%"]);

        if ($resultSet->rowCount()) {
            $matrizDepartamentos = $resultSet->fetchAll();
        }

        return $matrizDepartamentos;
        //Return matriz de departamentos
    }

    /**
    * Modifica un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @param string $descDepartamento Descripcion del departamento
    * @param float $volumenNegocio Volumen de Negocio
    * @param mixed $disabled Fecha en caso de baja logica o null
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function modifyDepartamento($codDepartamento, $descDepartamento, $volumenNegocio, $disabled)
    {
        $modificacionCorrecta = true;
        //update departamento set descDepartamento='analist' ,  volumenDeNegocio = 300 where codDepartamento = "ANA";
        if(is_null($disabled))
        {
            $disabled = 'NULL';
        }
        $query = "update departamento set descDepartamento = \"$descDepartamento\", volumenDeNegocio = \"$volumenNegocio\", disabled = $disabled where codDepartamento=?";
        //die($query);
        $resultSet = DBPDO::ejecutarConsulta($query, [$codDepartamento]);

        if (is_null($resultSet)) {
            $modificacionCorrecta = false;
        }
        return $modificacionCorrecta;
    }
    /**
    * Elimina definitivamente un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function removeDepartamento($codDepartamento)
    {
        $bajaCorrecta = true;
        $query = "delete from departamento where codDepartamento=?";
        $resultSet = DBPDO::ejecutarConsulta($query, [$codDepartamento]);

        if (!$resultSet->rowCount() != 1) {
            $bajaCorrecta = false;
        }
        return $bajaCorrecta;
        // Return boolean
    }

    /**
    * Baja logica en un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function disableDepartamento($codDepartamento)
    {
        $bajaCorrecta = true;
        $query = "update departamento set 'disabled' = now() where codDepartamento=?";
        $resultSet = DBPDO::ejecutarConsulta($query, [$codDepartamento]);

        if (!$resultSet->rowCount() != 1) {
            $bajaCorrecta = false;
        }
        return $bajaCorrecta;
        //Return boolean
    }

    /**
    * Quita la baja logica en un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function enableDepartamento($codDepartamento)
    {
        $altaCorrecta = true;
        $query = "update departamento set 'disabled' = NULL where codDepartamento=?";
        $resultSet = DBPDO::ejecutarConsulta($query, [$codDepartamento]);

        if (!$resultSet->rowCount() != 1) {
            $altaCorrecta = false;
        }
        return $altaCorrecta;
    }



}
