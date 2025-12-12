<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
  
    <nav class="navbar">
    <ul>
        <li><a href="catalogo.php">Catalogo</a></li>
        <li><a href="agregar.php">Agregar Pelicula</a></li>
        <li><a href="eliminar.php">Eliminar Pelicula</a></li>
        <li><a href="actualizar.php">Actualizar Info</a></li>
        <li><a href="iniciosesion.php">Salir</a></li>
    </ul>
    </nav>
 
   <main >
        <h2>Eliminacion de  Peliculas</h2>

        <?php
        include 'conn.php';
         $sql = "SELECT * FROM peliculas";
        $result = $conn->query($sql);
       
        if ($result->num_rows > 0) {

            echo "<div class='catalogo'>";

            while ($row = $result->fetch_assoc()) {
                 echo "<div class='tarjeta'>";
                              
          
                echo"<form action='eli.php' method='post'>";
                echo "<input type='hidden' name='id' value='".$row['id']."'>";
                echo "<img src='imagenes proy/" . $row['imagen'] . "' alt='" . $row['titulo'] . "'>";
                echo "<strong>" . $row['titulo'] . "</strong><br>";
                echo "Género: " . $row['genero'] . "<br>";
                echo "Año: " . $row['año'] . "<br>";
                echo "Director: " . $row['director'] . "<br>";
                echo "Disponibilidad: " . $row['stock'] . "<br>";
                echo "<input type='submit' value='Eliminar'>";
                echo "</form>";
              
                echo "</div>";
            }
             echo "</div>";
          } else {
            echo "<div class='tarjeta'>";
            echo "<p>No hay películas registradas.</p>";
            echo "</div>";
        }
        $conn->close();
        ?>
    </main>


</body>
</html>
