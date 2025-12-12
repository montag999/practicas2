<?php
session_start();
include 'conn.php';

$us=$_POST['usuario'];
$contra=$_POST['contraseña'];


if (empty($us)) {
    echo "<script>alert('Por favor, ingrese su usuario correctamente.'); window.history.back();</script>";
    exit();
}

if (empty($contra)) {
    echo "<script>alert('Por favor, ingrese su contraseña correctamente.'); window.history.back();</script>";
    exit();
}



$sql ="SELECT * FROM usuarios WHERE nombre_usuario='$us'";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contra, $row['contraseña'])) {
        $_SESSION['usuario'] = $row['nombre_usuario'];
        $_SESSION['rol'] = $row['rol'];
        header("Location: catalogo.php");
        exit();
    } else {
        echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
        exit();
    }
    } else {
    echo "<script>alert('Usuario no encontrado.'); window.history.back();</script>";
    exit();
   }

?>
