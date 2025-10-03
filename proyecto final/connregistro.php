<?php 
include 'conn.php';
$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$nombre_usuario=$_POST['us'];
$email=$_POST['email'];
$fechanac=$_POST['fechanac'];
$rol=$_POST['rol'];
 $contraseña=password_hash($_POST['contraseña'], PASSWORD_DEFAULT); 

$sql = "INSERT INTO usuarios (nombre,apellido,nombre_usuario,email, fechanac,rol,contraseña) 
        VALUES ('$nombre','$apellido','$nombre_usuario','$email','$fechanac','$rol','$contraseña')"; 

if ($conn->query($sql) === TRUE) {
    header("Location:iniciosesion.php");
    exit();
} else {
    echo "error: ". $conn->error;
}
$conn->close();

 
?>