<?php
session_start();
include 'conn.php';

$us=$_POST['usuario'];
$contra=$_POST['contraseña'];

$sql ="SELECT * FROM usuarios WHERE nombre_usuario='$us'";
$result=$conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
if (password_verify($contra,$row['contraseña'])) {
 $_SESSION['usuario']= $row['nombre_usuario'];
  $_SESSION['rol']= $row['rol'];
header("Location:index.php");
 exit();
}else {
    echo"contraseña incorrecta";}
}else {
     echo"usuario incorrecto";

 }
?>
