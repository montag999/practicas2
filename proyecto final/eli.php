<?php 
include 'conn.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM peliculas WHERE id=$id";
 echo "<input type='hidden' name='id' value='".$row['id']."'>";
     if ($conn->query($sql) === TRUE) {
        header("Location: eliminar.php");
        exit();
    } else {
            echo "<div class='tarjeta'>";
            echo "Error al eliminar: " . $conn->error;;
            echo "</div>";
    }
} else {
    echo "<div class='tarjeta'>";
    echo "No se encontro el ID para eliminar.";
    echo "</div>";
}

?>