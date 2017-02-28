<!--<form action="index.php?location=modify" method="post" name="newDepartamento">-->
<?php $departamento=$_SESSION["departamento"]; ?>

    <div class="popup">
        <div class="popupTitulo">Detalle</div>
        <div class="popupContenido" style="text-align:center;">

        <div class="inputDescripcion">Codigo departamento</div>
        <input type="text" name="codDepartamento" required pattern="[A-Z]{3}" disabled placeholder="AAA" value="<?php echo $departamento->getCodDepartamento(); ?>">
        <br><br>
        <div class="inputDescripcion">Descripcion departamento</div>
        <input type="text" name="descDepartamento" required pattern="[A-Za-Z]{3}" disabled placeholder="Descripcion" value="<?php echo $departamento->getDescDepartamento(); ?>">
        <br><br>
        <div class="inputDescripcion">Volumen de negocio</div>
        <input type="text" name="volumenDeNegocio" required pattern="[0-9]+" disabled placeholder="700" value="<?php echo $departamento->getVolumenNegocio(); ?>">
        </div>
        <div class="popupBotones">
            <!--<button class="bggreen" name="GUARDAR" onclick="document.getElementById('newDepartamento').submit();">GUARDAR</button>-->
            <!--<input type="submit" name="GUARDAR" value="GUARDAR" class="bggreen">-->
            <button onclick="window.history.back();"class="bgred">VOLVER</button>
        </div>
    </div>

<!--</form>-->
