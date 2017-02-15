<?php
/**
* @todo Clase Usuario
* @author Juan José Rubio Iglesias
* @author Santiago Huerga
* @author Pablo mora
**/

 include_once("UsuarioPDO.php");

class Usuario {

  protected $codUsuario;
  protected $descUsuario;
  protected $password;
  protected $perfil;
  protected $ultimaConexion;
  protected $contadorAccesos;



  function __construct($codUsuario,$pass, $descUsuario, $perfil, $ultimaConexion, $contadorAccesos) {
    $this->codUsuario = $codUsuario;
    $this->password = $pass;
    $this->descUsuario = $descUsuario;
    $this->perfil = $perfil;
    $this->ultimaConexion = $ultimaConexion;
    $this->contadorAccesos = $contadorAccesos;
    }

  public function __destruct()
  {

  }

  /**
  *  @method Usuario validarUsuario(string $codUsuario, string $password)
  *  @param String $codUsuario : Codigo del usuario
  *  @param String $password : Contraseña del usuario
  *  @return array[String] : Array del usuario
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
