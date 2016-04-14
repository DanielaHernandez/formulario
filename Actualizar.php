<?php

include "conexion.php";

$nombre=$_POST["Nombre"];
$apellidos=$_POST["App"];
$NC=$_POST["NC"];
$Edad=$_POST["Edad"];

$sql="UPDATE estudiantes SET Nombre='$nombre',Apellidos='$apellidos', Edad=$Edad WHERE Numero_control=$NC";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron actualizados satifactoriamente: ";
	echo " Nombre: ".$nombre." Apellidos: ".$apellidos." Num_ control: ".$Numerocontrol. "Edad: ".$Edad;

}else{
	echo "Se produjo un error en ele momento de resgistrar los datos:".mysql_error();

}
mysql_close($conexion);
?>
