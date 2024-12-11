<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function descuento($precio, $cantidad) {
    if ($cantidad < 20) $porc = 0;
    elseif ($cantidad >= 20 && $cantidad < 50) $porc = 5;
    elseif ($cantidad >= 50 && $cantidad < 100) $porc = 10;
    elseif ($cantidad >= 100) $porc = 15;
    $precio_producto = $cantidad * $precio;
    $descuento = (($cantidad * $precio) * $porc) / 100;
    $precio_descuento = $precio_producto - $descuento;
    return array($precio_producto, $descuento, $precio_descuento);
}

$pt_lapices = 0;
$pt_borradores = 0;
$pt_reglas = 0;
$ds_lapices = 0;
$ds_borradores = 0;
$ds_reglas = 0;

if (isset($_POST['lapices']) && isset($_POST['cant_lapices'])) {
    $resultado = descuento($_POST['lapices'], $_POST['cant_lapices']);
    $pt_lapices = $resultado[0];
    $ds_lapices = $resultado[1];
    $precio_descuento_lapices = $resultado[2];
}

if (isset($_POST['borradores']) && isset($_POST['cant_borradores'])) {
    $resultado = descuento($_POST['borradores'], $_POST['cant_borradores']);
    $pt_borradores = $resultado[0];
    $ds_borradores = $resultado[1];
    $precio_descuento_borradores = $resultado[2];
}

if (isset($_POST['reglas']) && isset($_POST['cant_reglas'])) {
    $resultado = descuento($_POST['reglas'], $_POST['cant_reglas']);
    $pt_reglas = $resultado[0];
    $ds_reglas = $resultado[1];
    $precio_descuento_reglas = $resultado[2];
}
?>

<form action="" method="post">
    <table border="1" cellpadding="6">
        <tr>
            <td colspan="3"><b>Orden de Compra</b></td>
        </tr>
        <tr>
            <td><b>Productos</b></td>
            <td><b>Cantidad</b></td>
            <td><b>Precio</b></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="lapices" value="1200" />Lapices</td>
            <td><input type="text" name="cant_lapices" size="4" value="<?php echo @$_POST['cant_lapices'];?>"/></td>
            <td><?php if(isset($_POST['cant_lapices']) && isset($_POST['lapices'])) { echo $resultado[2]; } ?></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="borradores" value="1600" />Borradores</td>
            <td><input type="text" name="cant_borradores" size="4" value="<?php echo @$_POST['cant_borradores'];?>"/></td>
            <td><?php if(isset($_POST['cant_borradores']) && isset($_POST['borradores'])) { echo $resultado[2]; } ?></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="reglas" value="2100" />Reglas</td>
            <td><input type="text" name="cant_reglas" size="4" value="<?php echo @$_POST['cant_reglas'];?>"/></td>
            <td><?php if(isset($_POST['cant_reglas']) && isset($_POST['reglas'])) { echo $resultado[2]; } ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Enviar">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="reset" value="Borrar">
            </td>
        </tr>
    </table>
</form>
Por cada 20 unidades 5% de descuento<br />
Por cada 50 unidades 10% de descuento<br />
Por cada 100 unidades 15% de descuento<br />
<table border="1" cellpadding="6">
    <tr>
        <td>Total</td>
        <td><?php echo $total = $pt_lapices + $pt_borradores + $pt_reglas; ?></td>
    </tr>