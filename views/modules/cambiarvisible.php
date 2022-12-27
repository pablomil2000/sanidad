<?php

if (!isset($_GET['id'])) {
    Funciones::Jsalert('', 'productos');
}

$id = Validar::vlt_Int($_GET['id']);

$productoCtrl = new productosCtrl('productos');
$producto = $productoCtrl->getById(array('id' => $id));

var_dump($producto);

if ($producto[0]['visible'] == 0) {
    $datos['visible'] = 1;
} else {
    $datos['visible'] = 0;
}

if ($productoCtrl->update($datos, $id)) {
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Visibilidad cambiada', 'text' => '', 'redirect' => 'productos'));
}
