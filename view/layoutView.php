<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/controles.css">
    <link rel="stylesheet" href="webroot/css/fontello.css">
    <link rel="stylesheet" href="webroot/css/main_style.min.css">
    <link rel="shortcut icon" type="image/png" href="webroot/favicon.png"/>

    <title>DepartamentoMVC</title>
</head>
<body>

    <header>
        <h1 style="min-width:630px;">Mantenimiento Departamento Multicapa - Juan José Rubio Iglesias</h1><span style="width:250px;"><a href="https://github.com/daw32-06/departamentoMVC"><img style="margin:0 15px" src="webroot/img/code.png"> Ver el codigo fuente</a></span><a  href="index.php?location=logoff"><span class="icon-logout icon"></span><span>Cerrar Sesion</span></a>
    </header>
    <?php
    /**
    *    Cargamos la vista dependiendo de la localizacion en caso de no encontrar la vista va a la pagina principal
    **/
        if(isset($_GET['location']))
        {
            $vista = $_GET['location']."View.php";

            if(!file_exists($vista)){
                $vista = "mainView.php";
            }
        }else{
            $vista = "mainView.php";
        }
        include ($vista);
    ?>

</body>
</html>
