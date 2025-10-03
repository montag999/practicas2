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

if (move_uploaded_file($temporal, $ruta)) {
    $sql = "INSERT INTO peliculas (titulo, genero, año, director, stock, imagen)
            VALUES ('$titulo', '$genero', '$año', '$director', '$dispo', '$imagen')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al guardar en la base de datos: " . $conn->error;
    }
} else {
    echo "Error al subir la imagen.";
}






$conn->close();
?>