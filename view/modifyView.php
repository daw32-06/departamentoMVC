<form action="index.php?location=modify" method="post" name="newDepartamento">
<?php $departamento=$_SESSION["departamento"]; ?>


    <div class="popup">
        <div class="popupTitulo">Modificar</div>
        <div class="popupContenido" style="text-align:center;">
        <div><?php //echo "<p>".$_SESSION["error"]."</p>";?></div>
        <div class="inputDescripcion">Codigo departamento</div>
        <input type="text" name="codDepartamento" required pattern="[A-Z]{3}" readonly="true" placeholder="AAA" value="<?php echo $departamento->getCodDepartamento(); ?>">
        <br><br>
        <div class="inputDescripcion">Descripcion departamento</div>
        <input type="text" name="descDepartamento" required pattern="[A-Za-Z]{3}"  placeholder="Descripcion" value="<?php echo $departamento->getDescDepartamento(); ?>">
        <br><br>
        <div class="inputDescripcion">Volumen de negocio</div>
        <input type="text" name="volumenDeNegocio" required pattern="[0-9]+"  placeholder="700" value="<?php echo $departamento->getVolumenNegocio(); ?>">
        <br><br>
        <?php
            if($departamento->isDisabled())
            {
                $disabled = true;
            }else{
                $disabled = false;
            }

         ?>
        <div class="inputDescripcion"> Habilitado</div>

        <input type="checkbox" name="disabled" <?php if(!$disabled) {echo "checked";} ?> >
        </div>

        <div class="popupBotones">
            <!--<button class="bggreen" name="GUARDAR" onclick="document.getElementById('newDepartamento').submit();">GUARDAR</button>-->
            <input type="submit" name="GUARDAR" value="GUARDAR" class="bggreen">
            <button onclick="window.history.back();"class="bgred">VOLVER</button>
        </div>
    </div>

</form>
