<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
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

  
      <form action="instagregar.php" method="post" enctype="multipart/form-data" class="forma">
    <div class="container">
        <h1>Agregar Pelicula</h1>
    <label class="ade">Titulo :</label>
     <input type="text" name="titulo" required>
     <br>
     <br>
   <label class="ade">Genero :</label>
     <!--<input type="text" name="genero" required>-->
     <select name="genero" required>
        <option value=""></option>
        <option value="Acción">Acción</option>
        <option value="Comedia">Comedia</option>
        <option value="Drama">Drama</option>
        <option value="Terror">Terror</option>
       <option value="SCI FI">SCI FI</option>
    </select>
     <br>
     <br>
    <label class="ade">Año :</label>
     <input type="text" name="año" required> 
     <br>
     <br>
     <label class="ade">Director :</label>
    <input type="text"name="director" required>
     <br>
     <br>
        <label class="ade">Disponibilidad: Selecione una Opcion</label>
        <br>
        <br>
        <label class="ade">*En Stock</label>
         <input type="radio" name="dispo" value="stock">
         <br>
         <br>
        <label class="ade">*Sin Stock</label>
         <input type="radio" name="dispo" value="sin stock">
         <br>
         <br>
         <label >insertar su imagen:</label>
         <input type="file" name="imagen" accept="imag/*" >
        <div>
            <input type="submit" value="Agregar">
        </div>
 </div>

</form> 



</body>
</html>
