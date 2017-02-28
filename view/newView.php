<form action="index.php?location=new" method="post" name="newDepartamento">
    <div class="popup">
        <div class="popupTitulo">Nuevo departamento</div>
        <div class="popupContenido" style="text-align:center;">

        <div class="inputDescripcion">Codigo departamento</div>
        <input type="text" name="codDepartamento" required pattern="[A-Z]{3}" placeholder="AAA">
        <br><br>
        <div class="inputDescripcion">Descripcion departamento</div>
        <input type="text" name="descDepartamento" required pattern="[A-Za-Z]{3}" placeholder="Descripcion">
        <br><br>
        <div class="inputDescripcion">Volumen de negocio</div>
        <input type="text" name="volumenDeNegocio" required pattern="[0-9]+" placeholder="700">
        </div>
        <div class="popupBotones">
            <!--<button class="bggreen" name="GUARDAR" onclick="document.getElementById('newDepartamento').submit();">GUARDAR</button>-->
            <input type="submit" name="GUARDAR" value="GUARDAR" class="bggreen">
            <button onclick="window.history.back();"class="bgred">CANCELAR</button>
        </div>
    </div>

</form>
