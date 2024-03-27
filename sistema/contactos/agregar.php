<?php  
$conexion = mysqli_connect("localhost","root","","sistema");

if(isset($_POST['registrar'])) {


  if(strlen($_POST['cliente']) 
  >= 1 && strlen($_POST['cedula']) 
>= 1 && strlen($_POST['correo']) 
>= 1 && strlen($_POST['telefono']) 
>= 1 && strlen($_POST['consulta']) 
>= 1 && strlen($_POST['fecha']) >= 1) {


  $cliente = trim($_POST['cliente']);
  $cedula = trim($_POST['cedula']);
  $correo = trim($_POST['correo']);
  $telefono = trim($_POST['telefono']);
  $consulta = trim($_POST['consulta']);
  $fecha = trim($_POST['fecha']);

 
  $consulta = "INSERT INTO contactos (cliente,cedula,correo,telefono,consulta,fecha) VALUES('$cliente','$cedula','$correo','$telefono','$consulta','$fecha')";

  mysqli_query($conexion,$consulta);
  mysqli_close($conexion);

header("location:index.php");

  }

}

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SYSTEMS¡NKL!</title>
    
  </head>
  <body>

	<style>

body {
	background:linear-gradient(to right, brown,navy);
}

	</style>

  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br><br>
                          
                            <h2 style="font-weight: bold;" class="text-center text-white">Registrar cliente:</h2>
                            <div class="form-group">

                            <label style="font-weight: bold;" for="cliente" class="form-label text-white">Cliente:</label>
                            <input type="text"  id="cliente" name="cliente" class="form-control" placeholder="ingrese su cliente" required>
                            </div>

                            <div class="form-group">
                            <label style="font-weight: bold;" for="correo" class="text-white">Cedula:</label><br>
                                <input type="cedula" name="cedula" id="cedula" class="form-control" placeholder="ingrese su cedula" required>
                            </div>

                            <div class="form-group">
                            <label style="font-weight: bold;" for="correo" class="text-white">Correo:</label><br>
                                <input type="correo" name="correo" id="correo" class="form-control" placeholder="ingrese su correo" required>
                                 
                            </div>

                            <div class="form-group">
                                  <label style="font-weight: bold;" for="telefono" class="form-label text-white">Telefono:</label>
                                <input type="text"  id="telefono" name="telefono" class="form-control" placeholder="ingrese su telefono" required>
                                 
                           </div>

                           <div class="form-group">
                                  <label style="font-weight: bold;" for="consulta" class="form-label text-white">Consulta:</label>
                                <input type="text"  id="consulta" name="consulta" class="form-control" placeholder="ingrese su consulta" required>
                                 
                           </div>

                            <div class="form-group">
                                  <label style="font-weight: bold;" for="fecha" class="form-label text-white">Fecha:</label>
                                <input type="date"  id="fecha" name="fecha" class="form-control" placeholder="ingrese su fecha" required>
                                
                           </div>
                        
                                <div class="mb-3">
                                    
                               <input style="font-weight: bold;" type="submit" value="Agregar"class="btn btn-warning" 
                               name="registrar">

                               <a style="font-weight: bold;" href="index.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>