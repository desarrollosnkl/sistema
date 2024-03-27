<?php

include("../db.php");

if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $nkl = $conexion -> prepare("SELECT * FROM contactos WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();

    $registro = $nkl -> fetch(PDO::FETCH_LAZY);
    $cliente = $registro['cliente'];
    $cedula = $registro['cedula'];
    $correo = $registro['correo'];
    $telefono = $registro['telefono'];
    $consulta = $registro['consulta'];
    $fecha = $registro['fecha'];


if($_POST) {


    $txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
    $cliente = (isset($_POST['cliente'])?$_POST['cliente']:"");
    $cedula = (isset($_POST['cedula'])?$_POST['cedula']:"");
    $correo = (isset($_POST['correo'])?$_POST['correo']:"");
    $telefono = (isset($_POST['telefono'])?$_POST['telefono']:"");
    $consulta = (isset($_POST['consulta'])?$_POST['consulta']:"");
    $fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");


    $stm = $conexion -> prepare("UPDATE contactos SET cliente=:cliente,cedula=:cedula,correo=:correo,telefono=:telefono,consulta=:consulta,fecha=:fecha WHERE id=:txtid");

 $stm -> bindParam(":cliente",$cliente);
 $stm -> bindParam(":cedula",$cedula);
 $stm -> bindParam(":correo",$correo);
 $stm -> bindParam(":telefono",$telefono);
 $stm -> bindParam(":consulta",$consulta);
 $stm -> bindParam(":fecha",$fecha);
 $stm -> bindParam(":txtid",$txtid);

 $stm -> execute();

 header("location:index.php");

}

}
?>

<!doctype html>
<html lang="es
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

.btn {
    font-weight: bold;
}

	</style>
 
  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                    <br><br>
                            
                    <h3 style="font-weight: bold;" class="text-center text-white">Modificar Tabla:</h3>
                        
              <form action="" method="post">

             
               <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="ingrese su nombre">

               <div class="form-group">
              <label style="font-weight: bold;" for="nombre" class="text-white">Cliente:</label>
               <input type="text" class="form-control" name="cliente" value="<?php echo $cliente; ?>" placeholder="ingrese su cliente">
              </div>

             <div class="form-group">
              <label style="font-weight: bold;" for="cedula" class="text-white">Cedula:</label>
               <input type="text" class="form-control" name="cedula" value="<?php echo $cedula; ?>" placeholder="ingrese su cedula">
            </div>

            <div class="form-group"> 
              <label style="font-weight: bold;" for="correo" class="text-white">Correo:</label>
               <input type="email" class="form-control" name="correo" value="<?php echo $correo; ?>" placeholder="ingrese su correo">
            </div>

            <div class="form-group">
               <label style="font-weight: bold;" for="direccion" class="text-white">Telefono:</label>
               <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="ingrese su telefono">
            </div>

            <div class="form-group">
               <label style="font-weight: bold;" for="direccion" class="text-white">Consulta:</label>
               <input type="text" class="form-control" name="consulta" value="<?php echo $consulta; ?>" placeholder="ingrese su consulta">
            </div>
 
            <div class="form-group">
              <label style="font-weight: bold;" for="fecha" class="text-white">Fecha:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">
            </div>

             <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Actualizar</button>
              <a href="index.php" class="btn btn-danger">Cerrar</a>
            </div>

              </form>
                    
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
          
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
