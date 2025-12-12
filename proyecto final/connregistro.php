<?php 
include 'conn.php';
$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$nombre_usuario=$_POST['us'];
$email=$_POST['email'];
$fechanac=$_POST['fechanac'];
$rol=$_POST['rol'];
 $contraseña=password_hash($_POST['contraseña'], PASSWORD_DEFAULT); 


 if(empty($email)){
echo "<script>alert('Por favor, ingrese su correo electrónico.'); window.history.back();</script>";
  exit();
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo "<script>alert('El formato usado no es valido,recuerde incluir el @ y poner su dominio completo.'); window.history.back();</script>";
  exit();
}

 if(empty($rol) || !in_array($rol,['gerente','empleado'])){
echo "<script>alert('Por favor, seleccione un rol.'); window.history.back();</script>";
  exit();
}

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