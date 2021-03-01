<?php
$conexion=mysqli_connect("localhost","hizarese_root","j0oDa@tYHid8","hizarese_bdhiza");

$idSeccion  = filter_input(INPUT_POST, 'inputSeccion'); 

$lista=mysqli_query($conexion,"
			SELECT idColonia, nombreColonia FROM colonia c WHERE idSeccion = '$idSeccion'")  or 
	  	die (mysqli_error($conexion));
	  	echo '<option selected> </option> ';
	  	while ($list=mysqli_fetch_array($lista)){
	  		echo '<option value="'.$list['idColonia'].'">'.$list['nombreColonia'].'</option>';
	  	}

?>
