<?php
    /**
    * Clase Departamento
    * Modelo Departamento
    *
    * @uses DepartamentoPDO Utiliza la clase DepartamentoPDO para usar la base de datos con PDO
    **/
    include_once("DepartamentoPDO.php");

    /**
    * Clase Departamento
    *
    * Esta clase es la para instanciar Departamento
    *
    * @author Juan José Rubio Iglesias <admin@tallernt.es>
    * Ultima Revision: 16/02/2017
    * @property string $codDepartamento Codigo del departamento
    * @property string $descDepartamento Descripcion del departamento
    * @property float $volumenNegocio Volumen de negocio del departamento
    * @property string $disabled Fecha de la baja logica
    **/

    class Departamento
    {


        protected $codDepartamento;
        protected $descDepartamento;
        protected $volumenNegocio;
        protected $disabled; //Esto es la fecha o null


        /**
        * Constructor de Departamento
        * @param string $codDepartamento Codigo del departamento.
        * @param string $descDepartamento Descripcion del departamento.
        * @param float $volumenNegocio Volumen de negocio del departamento.
        **/
        function __construct($codDepartamento, $descDepartamento, $volumenNegocio, $disabled)
        {
            $this->codDepartamento = $codDepartamento;
            $this->descDepartamento = $descDepartamento;
            $this->volumenNegocio = $volumenNegocio;
            $this->disabled = $disabled;
        }

        /** Getters y setters de la clase **/

        /**
        * Devuelve el codigo del departamento
        * @return string Codigo del departamento
        **/
        public function getCodDepartamento()
        {
            return $this->codDepartamento;
        }

        /**
        * Devuelve el codigo del departamento
        * @return string Descripcion del departamento
        **/
        public function getDescDepartamento()
        {
            return $this->descDepartamento;
            //return $this->descDepartamento;
        }

        /**
        * Devuelve el Volumen de negocio del departamento
        * @return float Volumen de negocio del departamento
        **/
        public function getVolumenNegocio()
        {
            return $this->volumenNegocio;
        }

        /**
        * Devuelve si el departamento esta habilitado o deshabilitado
        * @return boolean Departamento Habilitado o Deshabilitado
        **/
        public function isDisabled()
        {
            if($this->disabled!=null){
                return true;
            }else{
                return false;
            }
        }

        /**
        * Devuelve la fecha de la baja logica del departamento
        * @return string Fecha de la baja logica o null si esta activo
        **/
        public function getDisabledDate()
        {
            return $this->disabled;
        }


        /** Metodos para el trabajo PDO de departamentos **/

        /**
        * Llama a la clase DepartamentoPDO y devuelve un objeto Departamento
        * @param string $codDepartamento Codigo del departamento
        * @return Departamento Devuelve el objeto departamento
        **/
        public static function getDepartamento($codDepartamento)
        {
            $departamento = null;
            $departamentos = DepartamentoPDO::getDepartamento($codDepartamento); //Array con la información del departamento
            if ($departamentos) {//Si el array contiene algo, se crea el objeto
                $departamento = new Departamento($codDepartamento, $departamentos['descDepartamento'], $departamentos['volumenDeNegocio']);
            }
            return $departamento;
        }

        /**
        * Llama a la clase DepartamentoPDO para añadir un departamento a la BBDD
        * @param string $codDepartamento Codigo del departamento
        * @param string $descDepartamento Descripcion del departamento
        * @param float $volumenNegocio Volumen de Negocio
        * @return boolean Devuelve verdadero o falso para saber si se ha creado correctamente
        **/
        public static function addDepartamento($codDepartamento, $descDepartamento, $volumenNegocio)
        {
            return DepartamentoPDO::addDepartamento($codDepartamento, $descDepartamento, $volumenNegocio);
        }

        /**
        * Llama a la clase departamentoPDO para obtener una matriz con la lista de departamentos
        * @param string $descDepartamento Parametro de busqueda con la descripcion del departamento
        * @param integer $firstReg Primer numero de de la lista de la base de datos (para la paginacion)
        * @param integer $lastReg Ultimo numero de de la lista de la base de datos (para la paginacion)
        * @param boolean $disabled Campo booleano para saber si mostramos tambien los departamentos deshabilitados
        * @return departamento[] Devuelve un array de departamentos
        */
        public static function listDepartamentos($descDepartamento,$firstReg, $lastReg, $showDisabled)
        {
            $matrizDepartamentos = DepartamentoPDO::listDepartamentos($descDepartamento,0,0,$showDisabled);
            $arrayDepartamentos = [];
            foreach ($matrizDepartamentos as $departamento) {
                $nuevoDep = new Departamento($departamento['codDepartamento'], $departamento['descDepartamento'], $departamento['volumenDeNegocio'], $departamento['disabled']);
                array_push($arrayDepartamentos, $nuevoDep);
            }
            return $arrayDepartamentos;
        }

        /**
        * LLama a la clase departamentoPDO para obtener el numero de departamentos (Para la paginacion)
        * @param string $descripcion Criterio de busqueda por descripcion
        * @param string $disabled Indica si debe contar tambien los departamentos deshabilitados
        * @return integer Devuelve el numero de registros encontrados
        */
        public static function countDepartamentos($descripcion, $disabled)
        {
            return DepartamentoPDO::countDepartamentos($descripcion, $disabled);
        }


        /**
        * Llama a la clase departamentoPDO para modificar un departamento en la BBDD
        * @param string $codDepartamento Codigo del departamento
        * @param string $descDepartamento Descripcion del departamento
        * @param float $volumenNegocio Volumen de Negocio
        * @param mixed $disabled Fecha en caso de baja logica o null
        * @return booolean Para comprobar si se ha ejecutado correctamente
        **/
        public static function modifyDepartamento($codDepartamento, $descDepartamento, $volumenNegocio, $disabled)
        {

        }

        /**
        * Llama a la clase departamentoPDO para eliminar definitivamente un departamento en la BBDD
        * @param string $codDepartamento Codigo del departamento
        * @return booolean Para comprobar si se ha ejecutado correctamente
        **/
        public static function removeDepartamento($codDepartamento)
        {
            return DepartamentoPDO::removeDepartamento($codDepartamento);
        }

        /**
        * Llama a la clase departamentoPDO para hacer baja logica en un departamento en la BBDD
        * @param string $codDepartamento Codigo del departamento
        * @return booolean Para comprobar si se ha ejecutado correctamente
        **/
        public static function disableDepartamento($codDepartamento)
        {
            return DepartamentoPDO::disableDepartament($codDepartamento);
        }

        /**
        * Llama a la clase departamentoPDO para hacer quitar la baja logica en un departamento en la BBDD
        * @param string $codDepartamento Codigo del departamento
        * @return booolean Para comprobar si se ha ejecutado correctamente
        **/
        public static function enableDepartamento($codDepartamento)
        {
            return DepartamentoPDO::enableDepartamento($codDepartamento);
        }

        /** Backups **/

        /**
        * Sirve para hacer un backup de la tabla Departamento en JSON
        **/
        public static function exportToJSON()
        {

        }
        /**
        * Sirve para cargar un backup de la tabla Departamento en JSON
        **/
        public static function importToJSON()
        {


        }

    }



 ?>
