<?php
// Cargamos la vista layout
require_once("view/layoutView.php");


// Incluimos el modelo Departamento
require_once("model/Departamento.php");
if(isset($_GET['codDepartamento']))
{
    $departamento=Departamento::getDepartamento($_GET['codDepartamento']);
    $_SESSION["departamento"]=$departamento;

}else{
    $error="Error!";
}

include_once("view/viewDetail.php");
/*
if($cargarFormulario){
    include_once("view/newView.php");
}else{
    header('Location: index.php?location=main');
}
*/
