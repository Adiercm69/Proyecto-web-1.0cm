<?php
	$servidor="localhost";
	$usuario="root";
	$contraseña="";
	$baseDeDatos="formulario1";

	$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="whatsapp.css">
    </head>
    <body>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=3164925606&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

	<header class="content">
      <div class="menu container">
        <a href="#" class="logo">LOGO</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="images/menu.png" class="menu-icono" alt="" />
        </label>
        <nav class="navbar">
		<ul>
            <li><a href=http://localhost/proyecto/php/index.php>Inicio</a></li>
            <li><a href=http://localhost/proyecto/php/servicios.php>Servicios</a></li>
            <li><a href=http://localhost/proyecto/php/nosotros.php>Nosotros</a></li>
            <li><a href=http://localhost/proyecto/php/contacto.php>Contactos</a></li>
            <li><a href=http://localhost/proyecto/php/informacion.php>Informacion</a></li>
          </ul>
        </nav>
      </div>

	<div class="contenedor">
		<form action="#" class="formulario" id="formulario1" name="formulario1" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="apellido" placeholder="Apellido">
				<input type="text" name="correo" placeholder="Correo">
				<input type="text" name="contraseña" placeholder="Contraseña">
				<input type="text" name="direccion" placeholder="Direccion">
				<input type="text" name="telefono" placeholder="Telefono">
				<input type="text" name="ciudad" placeholder="Ciudad">

				<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="hombre">
					<label class="label-radio hombre" for="hombre">Hombre</label>

					<input type="radio" name="sexo" id="mujer" value="mujer">
					<label class="label-radio mujer" for="mujer">Mujer</label>
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		<div class="tabla">
			<table>
				<tr>
					<th>Contraseña</th>
					<th>Nombre</th>
					<th>apellido</th>
					<th>Correo</th>
					
				</tr>
					<?php
						$consulta = "SELECT * FROM datos";
						$ejecutarConsulta = mysqli_query($enlace, $consulta);
						$verFilas = mysqli_num_rows($ejecutarConsulta);
						$fila = mysqli_fetch_array($ejecutarConsulta);

						if(!$ejecutarConsulta){
							echo"Error en la consulta";
						}else{
							if($verFilas<1){
								echo"<tr><td>Sin registros</td></tr>";
							}else{
								for($i=0; $i<=$fila; $i++){
									echo'
										<tr>
											<td>'.$fila[3].'</td>
											<td>'.$fila[0].'</td>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
										</tr>
									';
									$fila = mysqli_fetch_array($ejecutarConsulta);

								}

							}
						}


					?>
						
						
				
				
			</table>
		</div>
	</div>
	<script src="formulario1.js"></script>
</body>
</html>
<?php
	if(isset($_POST['registrarse'])){
		$nombre =$_POST["nombre"];
		$apellido =$_POST["apellido"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];
		$direccion=$_POST["direccion"];
		$telefono=$_POST["telefono"];
		$ciudad=$_POST["ciudad"];
		$sexo=$_POST["sexo"];
		$id= rand(1,50000);

		$insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                    '$apellido',		
													'$correo',
													'$contraseña',
													'$direccion',
													'$telefono',
													'$ciudad',
													'$sexo',
													'$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
