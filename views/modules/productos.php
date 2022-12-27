<?php

$ProductosCtrl = new productosCtrl('productos');
$proveedoresCtrl = new proveedorCtrl('proveedor');
$productos = $ProductosCtrl->getAll();


include('views/partials/productos.view.php');
