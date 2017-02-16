<?php

/**
* Clase Departamento
* @author Juan José Rubio Iglesias
* Ultima Revision: 16/02/2017
**/


class DepartamentoPDO {

    public static function getDepartamento($codDepartamento)
    {

        //Return Array del departamento
    }

    public static function addDepartamento($codDepartamento, $descDepartamento, $volNegocio)
    {

        //Return boolean
    }

    public static function countDepartamentos($descripcion)
    {
        //Return integer
    }

    public static function listDepartamentos($descripcion, $firstReg, $lastReg, $disabled)
    {

        //Return matriz de departamentos
    }


    public static function modifyDepartamento($codDepartamento, $descDepartamento, $volNegocio)
    {

        // Return boolean
    }

    public static function removeDepartamento($codDepartamento)
    {

        // Return boolean
    }

    // Baja logica
    public static function disableDepartamento($codDepartamento)
    {
        //Return boolean
    }

    // Alta logica
    public static function enableDepartamento($codDepartamento)
    {
        //Return Boolean
    }



}
