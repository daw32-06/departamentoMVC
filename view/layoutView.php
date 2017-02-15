<html>
<head>
    <meta charset="UTF-8">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="webroot/css/controles.css">
    <link rel="stylesheet" href="webroot/css/login.css">
    <style>
        body{
            background-color:#ccc;
            padding: 0;
            margin:0;
        }

        #viewCode{
            position: fixed;
            background-color:#0f0;
            border:solid 1px #070;
            opacity:0.7;
            padding:20px;
            border-radius: 8px;
            bottom:20px;
            right:20px;
            font-family: roboto;
        }
        #viewCode a {
            text-decoration: none;
            color:#070;
        }


    </style>
</head>
<body>
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
    <div id="viewCode"><a href="mostrarCodigo.php">Ver el codigo fuente</a></div>
</body>
</html>
