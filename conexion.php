<?php

$usuario="n260m_17864692";
$contrasena="dany2107";
$servidor="sql308.260mb.net";
$bd="n260m_17864692_itsl";

$conexion=mysql_connect($servidor,$usuario,$contrasena)or die("Error al conectarse al servidor de base de datos: ".mysql_error());
mysql_select_db($bd,$conexion);

?>
