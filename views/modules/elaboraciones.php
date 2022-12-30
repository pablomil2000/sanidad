<?php

$ProductosCtrl = new productosCtrl('productos');
$proveedoresCtrl  = new proveedorCtrl('proveedor');
$elaboracionCtrl = new elaboracionCtrl('elaboracion');
$utilizadoCtrl = new utilizadoctrl('utilizado');


$elaboraciones = $elaboracionCtrl->getall();

include('views/partials/elaboraciones.view.php');
