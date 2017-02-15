<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/controles.css">
    <link rel="stylesheet" href="webroot/css/login.css">
    <link rel="stylesheet" href="webroot/css/fontello.css">

    <title>Login MVC</title>
</head>
<body>
    <div id="centrado">
    		<form action="index.php?location=login" method="post" name="formLogin">
    			<span class="icon-user-o icon"></span><input id="usuario" name="usuario" type="text" placeholder="Usuario">
    			<br>
    			<span class="icon-key icon"></span><input id="password" name="password" type="password" placeholder="Contraseña" >
    			<br>
                <!-- Aqui mostraremos los mensajes de error -->
    			<div id="msg"></div>

    			<input type="submit" name="enviar" value="ENVIAR" class="bgblue">

    		</form>
    	</div>

    </div>
</body>
</html>
