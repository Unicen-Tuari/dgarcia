<?php

include "./vistas/vistaMaquina.php";
include "./modelos/modeloMaquina.php";
// include "./vistas/vistaEvento.php";
// include "./modelos/modeloEvento.php";


$result = $_GET['q'];

$maquinas = new Maquina();
$m = $maquinas->load_ResParciales($result);
echo $m[0]['Cantidad'];

// $eventos = new Evento();
// $e = $eventos->load_ResParcialesE($result);



?>