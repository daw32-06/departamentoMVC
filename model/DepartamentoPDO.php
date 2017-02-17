<?php

/**
* Clase Departamento
* @author Juan José Rubio Iglesias <admin@tallernt.es>
* Ultima Revision: 16/02/2017
**/


class DepartamentoPDO {

    /**
    * Consulta a la BBDD un departamento segun su codigo de departamento
    * @param string $codDepartamento Codigo del departamento
    * @return Departamento Devuelve el objeto departamento
    **/
    public static function getDepartamento($codDepartamento)
    {

        //Return Array del departamento
    }

    /**
    * Añade un departamento a la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @param string $descDepartamento Descripcion del departamento
    * @param float $volumenNegocio Volumen de Negocio
    * @return boolean Devuelve verdadero o falso para saber si se ha creado correctamente
    **/
    public static function addDepartamento($codDepartamento, $descDepartamento, $volumenNegocio)
    {

        //Return boolean
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

        // Return boolean
    }
    /**
    * Elimina definitivamente un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function removeDepartamento($codDepartamento)
    {

        // Return boolean
    }

    /**
    * Baja logica en un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function disableDepartamento($codDepartamento)
    {
        //Return boolean
    }

    /**
    * Quita la baja logica en un departamento en la BBDD
    * @param string $codDepartamento Codigo del departamento
    * @return booolean Para comprobar si se ha ejecutado correctamente
    **/
    public static function enableDepartamento($codDepartamento)
    {
        //Return Boolean
    }



}
