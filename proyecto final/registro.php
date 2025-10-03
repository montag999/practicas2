<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de usuario</title>
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="funciones.js"></script>

</head>
<body>
   <nav class="navbar">
    <ul>
        <li><a href="">Catalogo</a></li>
        <li><a href="agregar.php">Agregar Pelicula</a></li>
        <li><a href="">Eliminar Pelicula</a></li>
        <li><a href="">Actualizar Info</a></li>
    </ul>
    </nav>



    <form action="connregistro.php" method="post">
        
    <div class="container-formu">
      <h1>Registro de usuarios</h1>
       <label class="ade">Nombre:</label>
       <input type="text" name="nom" required>
        <br>
        <br>
        <label class="ade">Apellido:</label>
        <input type="text" name="ape" required> 
        <br>
        <br>
        <label class="ade">usuario:</label>
        <input type="text" name="us" required>
        <br>
        <br>
        <label class="ade">correo electronico:</label>
        <input type="text"name="email">
        <br>
        <br>
        <label class="ade">fecha de nacimento:</label>
        <input type="date" name="fechanac">
        <br>
        <br>
        <label class="ade">rol: selecione una opcion</label>
        <br>
        <br>
        <label class="ade">*gerente</label>
         <input type="radio" name="rol" value="gerente">
         <br>
         <br>
        <label class="ade">*empleado</label>
         <input type="radio" name="rol" value="empleado">
        <br>
        <br>
        <label class="atras">Contraseña</label>
         <input type="password" name="contraseña" id="contraseña">
          <a href="javascript:ver()">ver contraseña </a>
        <div class="ade">
            <input type="submit" value="registrar">
        </div>
    
</div>
 
            

    </form>  
</body>
</html>