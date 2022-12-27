<?php
if (!isset($_GET['id'])) {
    Funciones::Jsalert('', 'home');
}
$id = Validar::vlt_Int($_GET['id']);

$ProductosCtrl = new productosCtrl('productos');
$Proveedorctrl = new Proveedorctrl('proveedor');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos['nombre'] = Validar::vlt_String($_POST['name']);
    $datos['numLote'] = Validar::vlt_String($_POST['lote']);
    $datos['caducidad'] = $_POST['cadu'];
    $datos['id_proveedor'] = Validar::vlt_Int($_POST['provider']);

    if ($datos['nombre'] != '') {
        $productosctrl = new productosctrl('productos');

        if ($productosctrl->update($datos, $id)) {
            Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Proveedor Actualizado', 'text' => '', 'redirect' => 'productos'));
        } else {
            Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'No se pudo actualizar', 'text' => ''));
        }
    } else {
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Introduce un nombre', 'text' => ''));
    }
}



$producto = $ProductosCtrl->getById(array('id' => $id))[0];

include('views/partials/editproducto.view.php');
