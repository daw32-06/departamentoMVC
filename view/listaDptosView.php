<!-- Tabla de los departamentos -->
<!-- llamado por: mainController -->
<table class="tablaDepartamentos" border="0">
    <tr>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Volumen de Negocio</th>
        <th>Activo</th>
        <th>Opciones</th>
    </tr>

    <?php

    foreach ($departamentos as $departamento) {
    $codDepartamento = $departamento->getCodDepartamento();
    $descDepartamento = $departamento->getDescDepartamento();
    $volumenNegocio = $departamento->getVolumenNegocio();
    $bajaLogica = $departamento->isDisabled();
    $bajaLogica = "";
    print "<tr>";
    print "<td>";
    print  $codDepartamento;
    print "</td>";
    print "<td>";
    print $descDepartamento;
    print "</td>";
    print "<td>";
    print $volumenNegocio;
    print "</td>";
    print "<td>";
    if($bajaLogica){
        print "<img src='webroot/img/disabled.png'>";
    }else{
        print "<img src='webroot/img/enabled.png'>";
    }
    print "</td>";
    print "<td>";
    print "<a href='index.php?location=modificar&codDepartamento=$codDepartamento' style='margin-right:10px' name='editar'><img src='webroot/img/editar.png'></a>";
    print "<a href='index.php?location=borrar&codDepartamento=$codDepartamento' style='margin-right:10px' name='borrar'><img src='webroot/img/borrar.png'></a>";
    print "</td>";
    print "</tr>";

}
?>
<tr>
    <td colspan="5"><strong>Número de registros encontrados: <?php echo count($departamentos) ?></strong>
    </td>
</tr>
</tbody>
</table>
