<?php

$Proveedor = new proveedorCtrl('proveedor');

$proveedores = $Proveedor->getAll();


include('views/partials/proveedores.view.php');
