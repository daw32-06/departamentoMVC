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
    print "<a href='index.php?location=detail&codDepartamento=$codDepartamento'  title='Ver en detalle' style='margin-right:10px' name='detail'><img src='webroot/img/detail.png'></a>";
    print "<a href='index.php?location=modify&codDepartamento=$codDepartamento' title='Editar departamento' style='margin-right:10px' name='modify'><img src='webroot/img/editar.png'></a>";
    print "<a href='index.php?location=remove&codDepartamento=$codDepartamento' title='Borrar departamento' style='margin-right:10px' name='remove'><img src='webroot/img/borrar.png'></a>";
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
