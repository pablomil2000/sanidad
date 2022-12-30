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
$ProductosCtrl = new productosCtrl('productos');


$proveedor = $ProductosCtrl->getById(array('id_proveedor' => $_POST['proveedor']));


echo json_encode($proveedor);
