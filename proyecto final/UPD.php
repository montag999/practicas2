<?php 
include 'conn.php';

$id      = $_POST['id'];
$titulo  = $_POST['titulo'];
$año     = $_POST['año'];
$director= $_POST['director'];
$genero  = $_POST['genero'];
$dispo   = $_POST['dispo'];
$imagen   = $_FILES['imagen']['name'];
$temporal = $_FILES['imagen']['tmp_name'];
$ruta     = "imagenes proy/" . $imagen;

 
if(empty($dispo) || !in_array($dispo,['stock','sin stock'])){
echo "<script>alert('Por favor, seleccione un tipo de disponibilidad.'); window.history.back();</script>";
  exit();
}



if (!empty($imagen)) {
    if (move_uploaded_file($temporal, $ruta)) {
        $sql = "UPDATE peliculas 
                SET titulo='$titulo', genero='$genero', año='$año', director='$director', stock='$dispo', imagen='$imagen'
                WHERE id=$id";
    } else {
        die("Error al subir la nueva imagen.");
    }
} else {
     $sql = "UPDATE peliculas 
            SET titulo='$titulo', genero='$genero', año='$año', director='$director', stock='$dispo'
            WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: actualizar.php");
    exit();
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();
?>
