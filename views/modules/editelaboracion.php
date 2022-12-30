<?php

$productoCtrl = new productosCtrl('productos');
$proveedorCtrl = new proveedorCtrl('proveedor');
$elaboracionCtrl = new elaboracionCtrl('elaboracion');
$utilizadoCtrl = new utilizadoctrl('utilizado');

if (!isset($_GET['id'])) {
    Funciones::Jsalert('', 'elaboraciones');
}

$id = Validar::vlt_Int($_GET['id']);

$elaboracion = $elaboracionCtrl->getById(array('id' => $id));
$utilizados = $utilizadoCtrl->getById(array('id_elaboracion' => $id));

$util = array();

foreach ($utilizados as $key => $value) {
    $util[] = $value['id_producto'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $datos['nombre'] = Validar::vlt_String($_POST['name']);
    $datos['cantidad'] = Validar::vlt_Int($_POST['cantidad']);
    $datos['elaboracion'] = $_POST['elaborado'];
    $datos['caducidad'] = $_POST['cadu'];

    $modificar = $elaboracionCtrl->update($datos, $id);
    var_dump($modificar);

    if (!empty($_POST['producto'])) {
        $utilizadoCtrl->delete($id, 'id_elaboracion');
        foreach ($_POST['producto'] as $key => $value) {
            $utilizadoCtrl->insert(array('id_elaboracion', 'id_producto'), array($id, $value));
        }
        $modificar = 1;
    }


    if ($modificar) {
        Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Elaboracion guardada', 'text' => '', 'redirect' => 'elaboraciones'));
    } else {
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Elaboracion no guardada', 'text' => ''));
    }
}


include('views/partials/editelaboracion.view.php');
