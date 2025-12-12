<?php 
include 'conn.php';
$titulo=$_POST['titulo'];
$año=$_POST['año'];
$director=$_POST['director'];
$genero = $_POST['genero'];
$dispo=$_POST['dispo'];
$imagen=$_FILES['imagen']['name'];
$temporal=$_FILES['imagen']['tmp_name'];
$ruta="imagenes proy/".$imagen;

if(empty($dispo) || !in_array($dispo,['stock','sin stock'])){
echo "<script>alert('Por favor, seleccione un tipo de disponibilidad.'); window.history.back();</script>";
  exit();
}

if (move_uploaded_file($temporal, $ruta)) {
    $sql = "INSERT INTO peliculas (titulo, genero, año, director, stock, imagen)
            VALUES ('$titulo', '$genero', '$año', '$director', '$dispo', '$imagen')";

    if ($conn->query($sql) === TRUE) {
        header("Location: catalogo.php");
        exit();
    } else {
        echo "Error al guardar en la base de datos: " . $conn->error;
    }
} else {

    if (empty($imagen)) {
    echo "<script>alert('Error al subir la imagen.'); window.history.back();</script>";
    exit();
}
    
}






$conn->close();
?>