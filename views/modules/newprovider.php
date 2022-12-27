<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // var_dump($_POST);

    $datos['nombre'] = Validar::vlt_String($_POST['name']);
    $datos['regSan'] = Validar::vlt_String($_POST['regSan']);
    $datos['tlf'] = Validar::vlt_String($_POST['tlf']);
    $datos['direccion'] = Validar::vlt_String($_POST['direc']);

    if ($datos['nombre'] != '') {
        $Proveedor = new proveedorCtrl('proveedor');

        if ($Proveedor->insert(array_keys($datos), $datos)) {
            Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Proveedor añadido', 'text' => '', 'redirect' => 'proveedores'));
        } else {
            Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'No se pudo añadir', 'text' => ''));
        }
    } else {
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Introduce un nombre', 'text' => ''));
    }

    var_dump($datos);
}

include('views/partials/newprovider.view.php');
