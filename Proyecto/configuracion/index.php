<?php
if($_POST){
  header("Location:inicio.php");
}
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Proyecto</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
  </head>
  <body>

   

<div class="container">
<div class="row">
  <div class="col-md-4">

<div class="card">
  <div class="card-header">Login</div>
  <div class="card-body">
    
  <form method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
    <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contraseña">
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar al administrador</button>
</form>






</from>


  
  </div>

</div>


  </div>
</div>


</div>





    
 
