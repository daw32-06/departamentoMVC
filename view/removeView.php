<div class="popup">
    <div class="popupTitulo">Atención</div>
    <div class="popupContenido">
        <form action="index.php?codDepartamento=<?php echo $_GET["codDepartamento"] ?>&location=remove" method="post" name="removeDpto">
            <div class="popupMensaje"><img src="webroot/img/garbage.png">¿Deseas eliminar el departamento <?php echo $_GET["codDepartamento"];?>?</div>
            <div class="popupBotones">
                <button name="ELIMINAR" onclick="document.getElementById('removeDpto').submit();" class="bggreen">ELIMINAR</button>
                <button onclick="window.history.back();"class="bgred">CANCELAR</button>
            </div>
        </form>
    </div>
</div>
