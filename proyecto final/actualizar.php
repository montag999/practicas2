<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Catálogo</a></li>
            <li><a href="agregar.php">Agregar Película</a></li>
            <li><a href="">Eliminar Película</a></li>
            <li><a href="actualizar.php">Actualizar Info</a></li>
        </ul>
    </nav>

    <main>
        <h2>Actualización de información de películas</h2>
        <?php
        $sql = "SELECT * FROM peliculas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div class='catalogo'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='tarjeta'>";
                echo "<img src='imagenes proy/" . $row['imagen'] . "' alt='" . $row['titulo'] . "'>";
                echo "<strong>" . $row['titulo'] . "</strong><br>";
                echo "Género: " . $row['genero'] . "<br>";
                echo "Año: " . $row['año'] . "<br>";
                echo "Director: " . $row['director'] . "<br>";
                echo "Disponibilidad: " . $row['stock'] . "<br>";
                echo "<a href='act.php?id=" . $row['id'] . "'><button class='act'>Actualizar</button></a>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No hay películas registradas.</p>";
        }
        $conn->close();
        ?>
    </main>
</body>
</html>