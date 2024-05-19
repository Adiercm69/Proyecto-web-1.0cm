<?php 

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtnombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtID."<br/>";
echo $txtNombre."<br/>";
echo $txtImagen."<br/>";
echo $accion."<br/>";

switch($accion){
case"Agregar";
echo "Presionado boton agregar";
break;

case"Modificar";
echo "Presionado boton modificar";
break;

case"Cancelar";
echo "Presionado boton cancelar";
break;

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php $url= "http://" .$_SERVER['HTTP_HOST']."/proyecto"?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/configuracion/inicio.php">Inicio</a>
        <a class="nav-item nav-link" href="http://localhost/proyecto/configuracion/modificar.php">Contenidos</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/configuracion/cerrar.php">Cerrar</a>
        <a class="nav-item nav-link" href="http://localhost/proyecto/php/index.php">Ver sitio web</a>
    </div>
</nav>
  <div class="container">
    <div class="row">
        <div class="col-md-5">
    <div class="card">
        <div class="card-header">Datos del contenido</div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID"> 
  </div>

  <div class="mb-3">
    <label for="txtNombre">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre"> 
  </div>

  <div class="mb-3">
    <label for="txtNombre">Imagen:</label>
    <input type="file" class="form-control" name="txtImagen" id="txtNombre" placeholder="Nombre"> 
  </div>

<div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="submit" name="accion" value="Agregar"
        class="btn btn-success"
    >
        Agregar
    </button>
    <button
        type="submit" name="accion" value="Modificar"
        class="btn btn-warning"
    >
        Modificar
    </button>
    <button
        type="submit" name="accion" value="Cancelar"
        class="btn btn-info"
    >
        Cancelar
    </button>
</div>  
</form>         
   
     </div>
     </div>
     </div>
        <div class="col-md-7">

<div> <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Aprende</td>
            <td>Imagen.jgp</td>
            <td>Seleccionar | Borrar </td>
        </tr>
       
    </tbody>
  </table>
  </body>
</html>









