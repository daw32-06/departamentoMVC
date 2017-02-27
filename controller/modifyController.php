<?php
// Cargamos la vista layout
require_once("view/layoutView.php");


// Incluimos el modelo Departamento
require_once("model/Departamento.php");
//Variable para indicar si se tiene que cargar el formulario
$cargarFormulario=true;
$errores = array();
//Si se ha pulsado el boton de guardar
if(isset($_POST['GUARDAR']))
{
    $cargarFormulario=false;
    if(isset($_POST['codDepartamento']) && isset($_POST['descDepartamento']) && isset($_POST['volumenDeNegocio']))
    {
        //Aqui comprobariamos con expresiones regulares todos los campos...

        $resultado=Departamento::addDepartamento($_POST['codDepartamento'],$_POST['descDepartamento'],$_POST['volumenDeNegocio']);

        //die(gettype($resultado));
        if(!$resultado)
        {
            $cargarFormulario=true;
            $_SESSION["error"]="Se ha producido un error";
        }else{
            $cargarFormulario=false;
            $_SESSION["error"]="";
        }
        //echo $_POST['codDepartamento']." ".$_POST['descDepartamento']." ".$_POST['volumenDeNegocio'];
    }else{
        //array_push($errores, "Introduce todos los campos");
        $cargarFormulario = true;
    }

}


if($cargarFormulario){
    include_once("view/newView.php");
}else{
    header('Location: index.php?location=main');
}
