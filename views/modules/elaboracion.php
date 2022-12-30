<?php

$productoCtrl = new productosCtrl('productos');
$proveedorCtrl = new proveedorCtrl('proveedor');
$elaboracionCtrl = new elaboracionCtrl('elaboracion');
$utilizadoCtrl = new utilizadoctrl('utilizado');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $datos['nombre'] = Validar::vlt_String($_POST['name']);
    $datos['cantidad'] = Validar::vlt_Int($_POST['cantidad']);
    $datos['elaboracion'] = $_POST['elaborado'];
    $datos['caducidad'] = $_POST['cadu'];

    $id = $elaboracionCtrl->insert(array_keys($datos), $datos);

    if ($id) {
        foreach ($_POST['producto'] as $key => $value) {
            $utilizadoCtrl->insert(array('id_elaboracion', 'id_producto'), array($id, $value));
        }
        Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Elaboracion guardada', 'text' => '', 'redirect' => 'elaboraciones'));
    } else {
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Elaboracion no guardada', 'text' => ''));
    }
}

include('views/partials/elaboracion.view.php');
