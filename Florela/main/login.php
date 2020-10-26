<?php
session_start();
include 'conecta.php';

$usuario = ($_POST['usuario']);
$password = ($_POST ['password']);
$consulta = "SELECT * FROM Alumnos WHERE Usuario = '$usuario' and Password = ''$password' ";
if ($resultado = $conecta->query($consulta)) {
  while ($row = $resultado->fetch_array()) {
     $userok = $row['Usuario'];
     $passwordok = $row['Password'];
  }
  $resultado->close();
}
  $conecta->close();
  if (isset($usuario) && isset($password)) {
    if($usuario== $userok && $password == $passwordok){
      $_SESSION['login']=TRUE;
        $_SESSION['Usuario']=$usuario;
        header("location:../principal.php");
    }
    else{
      header("location:../principal.php");
  }
  }
  else{
    header("location:../Aplicacion.php");
}


?>
