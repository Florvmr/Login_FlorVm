<?php
$servidor = "localhost";
$usuario ="root";
$password ?"";
$bd = "Phishing";
$conecta = mysqli_connect($servidor,$usuario,$password,$bd);
if ($conecta->connect_error){
  die('ERROR AL CONECTAR BASE DE DATOS'.$conecta->connect_error);
}
?>
