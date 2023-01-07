<?php

$productosCtrl = new productosCtrl('productos');
$usadoCtrl = new utilizadoCtrl('utilizado');
$elaboracionCtrl = new elaboracionCtrl('elaboracion');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = Validar::vlt_Int($_POST['id']);
} elseif (isset($_GET['id'])) {
    $id = Validar::vlt_Int($_GET['id']);
} else {
    Funciones::Jsalert('', 'productos');
}

$producto = $productosCtrl->getById(array('id' => $id))[0];

$usadoEn = $usadoCtrl->getById(array('id_producto' => $id));

require_once('views/partials/detalleProducto.view.php');
