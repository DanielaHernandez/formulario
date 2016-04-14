<?php

include "conexion.php";

$nombre=$_POST["nomb"];
$apellidos=$_POST["apps"];
$Numerocontrol=$_POST["numC"];
$Edad=$_POST["Ed"];

$sql="INSERT INTO estudiantes (Nombre,Apellidos,Numero_control, Edad)VALUES('$nombre','$apellidos','$Numerocontrol',$Edad)";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron registrados satifactoriamente: ";
	echo " Nombre: ".$nombre." Apellidos: ".$apellidos." Num_ control: ".$Numerocontrol. "Edad: ".$Edad;

}else{
	echo "Se produjo un error en ele momento de resgistrar los datos:".mysql_error();

}
mysql_close($conexion);
?>
