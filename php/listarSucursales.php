<?php 

include 'conkarl.php';


$filas=array();
$log = mysqli_query($conection,"SELECT * FROM sucursal where sucActivo =1 order by sucLugar asc;");


while($row = mysqli_fetch_array($log, MYSQLI_ASSOC))
{
	echo '<option class="mayuscula" value="'.$row['idSucursal'].'">'.$row['sucNombre'].'</option>';
	
	
}

/* liberar la serie de resultados */
mysqli_free_result($log);

/* cerrar la conexi贸n */
mysqli_close($conection);

?>