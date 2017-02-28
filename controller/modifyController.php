<?php
// Cargamos la vista layout
require_once("view/layoutView.php");


// Incluimos el modelo Departamento
require_once("model/Departamento.php");

// Comprobamos el codigo del departamento
if(isset($_GET['codDepartamento']))
{
    $departamento=Departamento::getDepartamento($_GET['codDepartamento']);
    $_SESSION["departamento"]=$departamento;

}else{
    $error="Error!";
}
$cargarFormulario=true;
if(isset($_POST['GUARDAR']))
{
    $cargarFormulario=false;
    if(isset($_POST['descDepartamento']) && isset($_POST['volumenDeNegocio']))
    {
        //Aqui comprobariamos con expresiones regulares todos los campos...
        if(isset($_POST['disabled']))
        {
            $disabled = null;
        }else{
            $disabled = "now()";
        }

        $resultado=Departamento::modifyDepartamento($_POST['codDepartamento'],$_POST['descDepartamento'],$_POST['volumenDeNegocio'],$disabled);

        //die(gettype($resultado));
        if(!$resultado)
        {
            $cargarFormulario=true ;
            $_SESSION["error"]="Se ha producido un error";
        }else{
            $cargarFormulario=false;
            $_SESSION["error"]="";
        }
        //echo $_POST['codDepartamento']." ".$_POST['descDepartamento']." ".$_POST['volumenDeNegocio'];
    }else{
        //array_push($errores, "Introduce todos los campos");
        //$cargarFormulario = true;
    }

}
if($cargarFormulario){
    include_once("view/modifyView.php");
}else{
    header('Location: index.php?location=main');
}


/*
if($cargarFormulario){
    include_once("view/newView.php");
}else{
    header('Location: index.php?location=main');
}
*/
