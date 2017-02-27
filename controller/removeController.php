<?php
    require_once("view/layoutView.php");
    include ("model/Departamento.php");

    // Si se pulsa el boton de eliminar eliminamos el registro de la base de datos
    if(isset($_POST["ELIMINAR"])){
        if(!Departamento::removeDepartamento($_GET['codDepartamento'])){
            header ("Location: index.php");
        }else{
            echo "error al borrar el departamento";
        }

    }else{
        require_once("view/removeView.php");
    }

?>
