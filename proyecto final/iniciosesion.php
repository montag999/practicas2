<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio sesion</title>
    <link rel="stylesheet" href="estilo.css">
     <script type="text/javascript" src="funciones.js"></script>


</head>
<body>
<form action="conninicio.php" method="post">
    <div class="container">
        <h1>Ingreso de Usuario</h1>
        
        <div class="user">
        <label>usuario</label>
        <input type="text" name="usuario" required>
        </div>
       
        <div class="password">
        <label>contraseña</label>
        <input type="password" name="contraseña" id="contraseña" > 
        <a href="javascript:ver()">ver contraseña </a>
          </div>
         <div class="links">   
                <a href="registro.php">crear un nuevo usuario</a>
        </div>
        <div>
            <input type="submit" value="ingresar">
        </div>

 </div>

</form> 

</body>
</html>