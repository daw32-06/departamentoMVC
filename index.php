<?php
    /**
    *   @todo Enrutador principal que carga los controladores dependiendo de la sesion
    *         o llama al controlador dependiendo del parametro "location" de la url
    *   @author Juan José Rubio Iglesias
    */

    // Iniciamos la sesion
    session_start();

    // Incluimos la libreria que controla las sesiones
    include_once("controller/sessionController.php");

    /**
    * Comprobamos si la session esta iniciada llamando al SessionController::logueado
    * si devuelve verdadero es que la sesion esta iniciada y nos carga el controlador
    * principal o en funcion del parametro 'location'
    **/

    if(SessionController::logueado())
    {
        if(isset($_GET['location']))
        {
            // Concatenamos la la localizacion con Controller.php. por ejemplo loqueseaController.php

            $location = $_GET['location']."Controller.php";
            $controlador = "controller/$location";

            // Logoff
            if($_GET['location'] == "logoff")
            {
                echo "logoff";
                sessionController::cerrarSesion();
                $controlador = "controller/loginController.php";
            }

            // Comprobamos si NO existe el controlador existe el controlador principal sera el principal
            if(!file_exists($controlador)){
                $controlador = "controller/mainController.php";
            }
        }else{
            // Si no se ha indicado ninguna localizacion seleccionara el controlador principal
            $controlador = "controller/mainController.php";
        }
    }else{
        // Si no hemos iniciado sesion indicamos que el controlador sera  el login
        $controlador = "controller/loginController.php";
    }

    // Cargamos el controlador
    include $controlador;

?>
