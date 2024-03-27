<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM contactos");
$stm -> execute();
$contactos = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">N°</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">CEDULA</th>
                <th scope="col">CORREO</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">CONSULTA</th>
                <th scope="col">FECHA DE CITA</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($contactos as $contacto){ ?>
    <tr>
    <td scope="row"><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['cliente']; ?></td>
                <td><?php echo $contacto['cedula']; ?></td>
                <td><?php echo $contacto['correo']; ?></td>
                <td><?php echo $contacto['telefono']; ?></td>
                <td><?php echo $contacto['consulta']; ?></td>
                <td><?php echo $contacto['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>