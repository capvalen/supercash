<?php 

header('Content-Type: text/html; charset=utf8');
include 'conkarl.php';


$filas=array();
$log = mysqli_query($conection,"call updateFinalizarSucursal(".$_POST['idSuc'].");");

/* cerrar la conexión */
mysqli_close($conection);

echo 1;
?>