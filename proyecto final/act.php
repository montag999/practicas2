<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
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

<?php
include 'conn.php';

 
if (!isset($_GET['id'])) {
    die("ID  no encontrado");
}
$id = $_GET['id'];

 
$sql = "SELECT * FROM peliculas WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Película no encontrada");
}

$pelicula = $result->fetch_assoc();
?>

  

      <form action="UPD.php" method="post" enctype="multipart/form-data" class="forma">
        <div class="container">
            <h1>Actualizar Pelicula</h1>
            <input type="hidden" name="id" value="<?php echo $pelicula['id']; ?>">

            <label>Título :</label>
            <input type="text" name="titulo" value="<?php echo $pelicula['titulo']; ?>" required>
            <br>
            <br>
            <label>Género :</label>
            <!--<input type="text" name="genero" value="">-->
                    <select name="genero" required>
            <option value=""></option>           
            <option value="Acción" <?php if($pelicula['genero']=='Acción') echo 'selected'; ?>>Acción</option>
            <option value="Comedia" <?php if($pelicula['genero']=='Comedia') echo 'selected'; ?>>Comedia</option>
            <option value="Drama" <?php if($pelicula['genero']=='Drama') echo 'selected'; ?>>Drama</option>
            <option value="Terror" <?php if($pelicula['genero']=='Terror') echo 'selected'; ?>>Terror</option>
            <option value="SCI FI" <?php if($pelicula['genero']=='SCI FI') echo 'selected'; ?>>SCI FI</option>
        </select>
            
            
            <br>
            <br>
            <label>Año :</label>
            <input type="text" name="año" value="<?php echo $pelicula['año']; ?>"required>
            <br>
            <br>
            <label>Director :</label>
            <input type="text" name="director" value="<?php echo $pelicula['director']; ?>"required>
            <br>
            <br>
            <label>Disponibilidad:Selecione una Opcion</label><br>
            <br>
            <label >*En Stock</label>
            <input type="radio" name="dispo" value="stock" <?php if($pelicula['stock']=='stock') echo 'checked'; ?>> 
            <br>
            <label >*Sin Stock</label>
            <input type="radio" name="dispo" value="sin stock" <?php if($pelicula['stock']=='no stock') echo 'checked'; ?>> 
            <br>
            <br>
            <label>Imagen actual:</label><br>
            <img src="imagenes proy/<?php echo $pelicula['imagen']; ?> "class="mini"><br><br>
            <label>Subir nueva imagen:</label>
            <input type="file" name="imagen" accept="image/*"><br><br>

            <div>
                <input type="submit" value="Actualizar">
            </div>
        </div>
    </form>
    
</body>
</html>