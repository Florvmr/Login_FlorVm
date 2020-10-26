<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "informatica";
$conecta = mysqli_connect($servidor, $usuario, $password, $base);
if ($conecta->connect_error){
  die('ERROR AL CONECTAR BASE DE DATOS'.$conecta->connect_error);
}

?>
