<?php
include_once("UsuarioPDO.php");

/**
* Clase Usuario
*
* Esta clase es la clase para instanciar Usuario
*
* @author Juan José Rubio Iglesias <admin@tallernt.es>
* Ultima Revision: 16/02/2017
* @property string $codUsuario Codigo del usuario
* @property string $descUsuario Descripcion del usuario
* @property string $password Contraseña del usuario
* @property string $disabled Fecha de la baja logica
* @property string $perfil Perfil del usuario
* @property date $ultimaConexion Fecha y hora de la ultima conexion
* @property integer $contadorAccesos Contador de los accesos desde la ultima conexion
**/

class Usuario {

  protected $codUsuario;
  protected $descUsuario;
  protected $password;
  protected $perfil;
  protected $ultimaConexion;
  protected $contadorAccesos;


  /**
  * Constructor de Usuario
  * @param string $codUsuario Codigo del Usuario.
  * @param string $pass Contraseña del usuario
  * @param string $descUsuario Descripcion del Usuario.
  * @param string $perfil Perfil del usuario
  * @param string $disabled Fecha de la baja logica
  * @param date $ultimaConexion Fecha y hora de la ultima conexion
  * @param integer $contadorAccesos Contador de los accesos desde la ultima conexion
  **/
  function __construct($codUsuario,$pass, $descUsuario, $perfil, $disabled, $ultimaConexion, $contadorAccesos) {
    $this->codUsuario = $codUsuario;
    $this->password = $pass;
    $this->descUsuario = $descUsuario;
    $this->perfil = $perfil;
    $this->disabled = $disabled;
    $this->ultimaConexion = $ultimaConexion;
    $this->contadorAccesos = $contadorAccesos;
    }

  /**
   * Destructor de la clase
   */
  public function __destruct()
  {

  }

  /**
  * Funcion que llama a UsuarioPDO para validar el usuario
  * @param String $codUsuario : Codigo del usuario
  * @param String $password : Contraseña del usuario
  * @return array[String] : Array del usuario
  **/
  public static function validarUsuario($codUsuario,$password)
  {
    //Inicializamos objUsuario
    $objUsuario = null;
    //Consultamos que el usuario existe
    $arrayUsuarios = UsuarioPDO::validarUsuario($codUsuario,$password);
    //Si el array de usuarios contiene algun usuario instancia el objUsuario;
    if($arrayUsuarios){

        $objUsuario = new Usuario($codUsuario,$password, $arrayUsuarios['descUsuario'], $arrayUsuarios['perfil'],$arrayUsuarios['ultimaConexion'],$arrayUsuarios['contadorAccesos']);

    }
    //Devolvemos el objeto usuario
    return $objUsuario;
    }

}
