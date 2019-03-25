<?php
$usuario ="boni";
$contraseña ="tic2019";
$servidor ="192.168.0.43";
$conexion = mysqli_connect($servidor,$usuario,$contraseña) or die ("No se ha podido conectar al servidor de Base de Datos");
$basededatos="tics";
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );