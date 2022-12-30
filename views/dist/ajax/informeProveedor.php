<?php

// var_dump($_POST);
//? controllers
$ruta = $_SERVER['DOCUMENT_ROOT'] . "/sanidad/";
require_once($ruta . 'controllers/crud.controller.php');        //*Core

require_once($ruta . 'controllers/proveedor.controller.php');
require_once($ruta . 'controllers/productos.controller.php');


//? Modelos
require_once($ruta . 'models/crud.model.php');  //*Core
require_once($ruta . 'models/conexion.model.php');  //*Core


// echo json_encode($_POST);
$ProveedorCtrl = new proveedorCtrl('proveedor');

$proveedor = $ProveedorCtrl->getById(array('id' => $_POST['proveedor']));


echo json_encode($proveedor[0]);
