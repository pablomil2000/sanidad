<?php

$Proveedorctrl = new proveedorCtrl('proveedor');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // var_dump($_POST);

    $datos['nombre'] = Validar::vlt_String($_POST['name']);
    $datos['numLote'] = Validar::vlt_String($_POST['lote']);
    $datos['caducidad'] = $_POST['cadu'];
    $datos['id_proveedor'] = Validar::vlt_Int($_POST['provider']);

    if ($datos['nombre'] != '') {
        $productosctrl = new productosctrl('productos');

        if ($productosctrl->insert(array_keys($datos), $datos)) {
            Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Proveedor añadido', 'text' => '', 'redirect' => 'productos'));
        } else {
            Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'No se pudo añadir', 'text' => ''));
        }
    } else {
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Introduce un nombre', 'text' => ''));
    }

    var_dump($datos);
}

include('views/partials/newproducto.view.php');
