<?php

    /**
    * Libreria para gestionar las sesiones
    * @author Juan José Rubio Iglesias <admin@tallernt.es>
    */

    class SessionController{

        // Con este metodo comprobamos si la sesion esta iniciada
        public static function logueado()
        {
            if(isset($_SESSION['usuario']))
            {
                return true;
            }else{
                return false;
            }
        }
        // Con este metodo destruimos la sesion y volvemos al login
        public static function cerrarSesion()
        {
            session_destroy();
            header('Location: index.php?location=login');
        }
    }
