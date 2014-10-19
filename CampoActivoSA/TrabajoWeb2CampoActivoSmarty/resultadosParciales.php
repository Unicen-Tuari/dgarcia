<?php

include "./vistas/vistaMaquina.php";
include "./modelos/modeloMaquina.php";


$result = $_GET['q'];
$maquinas = new Maquina();
$m = $maquinas->load_ResParciales($result);
echo $m[0]['Cantidad'];

?>