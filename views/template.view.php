<!-- Header start -->
<?php include('views/modules/cabecera.php'); ?>
<!-- Header end -->

<!-- Site wrapper -->
<?php
// var_dump($_SESSION);


include('views/modules/menu.php');

//<!-- Content start -->
PlantillaCtr::whiteList(array('newprovider', 'proveedores', 'editprovider', 'newproductos', 'productos', 'editproducto', 'informesProveedor', 'cambiarvisible', 'elaboracion', 'elaboraciones', 'editelaboracion'));
?>
<!-- Content end -->

<!-- footer start -->
<?php

include('views/modules/footer.php');

?>

<!-- footer end -->