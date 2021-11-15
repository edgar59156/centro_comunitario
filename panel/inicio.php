<?php
require_once('../models/taller.class.php');
require_once('../models/evento.class.php');
$accion = null;
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
}
<<<<<<< HEAD
require_once('../views/headersinmenu1.php');
=======

require_once('../views/headersinmenu.php');
>>>>>>> fff534814c0bc7f3b7ddf99ad681114d26d28805
switch($accion){
    case 'recovery':
       
        break;

    default:
    $datos = $taller->read();
    $datosevento = $evento->read();
    require_once('../views/inicio/inicio2.php');
}
require_once('../views/footer.php');

?>