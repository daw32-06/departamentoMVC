<?php
/**
* Controlador de la pagina inicial aqui es donde mostramos la primera tabla de departamentos y el campo de buscar
**/

// Incluimos la libreria del usuario
//require_once("model/usuario.php");

require_once("view/layoutView.php");


//Test
require_once("model/Departamento.php");

$departamentos=null;
if(isset($_GET['descDepartamento']))
{
    $departamentos = Departamento::listDepartamentos("$_GET[descDepartamento]",0,0,false);
}else{
    // Si no se introduce nada por GET se listan TODOS
    $departamentos = Departamento::listDepartamentos("",0,0,false);

}
//Enviamos el array de departamentos a la vista

include_once("view/listaDptosView.php");


/*
$dp=Departamento::getDepartamento("MAR");
//print_r($dp);
echo $dp->getDescDepartamento();
*/
