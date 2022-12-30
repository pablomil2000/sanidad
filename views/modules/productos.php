<?php

$ProductosCtrl = new productosCtrl('productos');
$proveedoresCtrl = new proveedorCtrl('proveedor');

$datos = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos = array('nombre' => '%' . $_POST['producto'] . '%');
}

$productos = $ProductosCtrl->getById($datos);

include('views/partials/productos.view.php');
