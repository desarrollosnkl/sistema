<?php 
include("../db.php");

$stm = $conexion -> prepare("SELECT * FROM contactos");
$stm -> execute();
$contactos = $stm -> fetchAll(PDO::FETCH_ASSOC);

// ! ELIMINAR DE LA BASE DE DATOS...

if(isset($_GET['id'])) {

  $txtid = (isset($_GET['id'])?$_GET['id']:"");

  $stm = $conexion -> prepare("DELETE FROM contactos WHERE id=:txtid");
  $stm -> bindParam(":txtid",$txtid);
  $stm -> execute();

  header("location:index.php");


}
?>


<?php include("../template/header.php"); ?>

<style>

body {
    background: whitesmoke;
}

</style>

<br>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Registro:</h2>

<a style="background: brown;" class="btn text-white fw-bold" href="agregar.php">Nuevo Cliente
<i class="bi bi-person-check"></i></i> 
</a>

<a style="background: navy;" class="btn text-white fw-bold" href="excel.php">Excel
<i class='bx bxs-grid'></i> </a>

<br>
<br>

<div class="table-responsive">
<table class="table table-bordered table-dark table_id">
  <thead class="table table-dark">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">CEDULA</th>
                <th scope="col">CORREO</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">CONSULTA</th>
                <th scope="col">FECHA DE CITA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($contactos as $contacto) { ?>

            <tr class="">
                <td scope="row"><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['cliente']; ?></td>
                <td><?php echo $contacto['cedula']; ?></td>
                <td><?php echo $contacto['correo']; ?></td>
                <td><?php echo $contacto['telefono']; ?></td>
                <td><?php echo $contacto['consulta']; ?></td>
                <td><?php echo $contacto['fecha']; ?></td>

             <td>
               <a href="editar.php?id=<?php echo $contacto['id']; ?>" class="btn btn-warning fw-bold" role="button"><img src="../img/editar.svg" alt=""></a> 

               <a href="javascript:borrar(<?php echo $contacto['id']; ?>);" class="btn btn-danger fw-bold" role="button"><img src="../img/eliminar.svg" alt=""></a> 
             </td>

            </tr>

     <?php } ?>

        </tbody>
    </table>
</div>
</div>


<script>

function borrar(id) {

Swal.fire({
title: '¿Deseas Borrar el registro?',
showCancelButton: true,
confirmButtonText: 'Si, Borrar',
}).then((result) => {
if (result.isConfirmed) {

window.location ="index.php?id="+id;

} else if (result.isDenied) {
  Swal.fire('Changes are not saved', '', 'info')
}
})
}
</script>

<footer style="margin: 30px;" class="sticky-footer bg-white">
    <div class="container my-auto">
        <div style="color: gray;" class="copyright text-center my-auto">
            <span>Copyright &copy; Derechos Reservados <a href="../../NKL/index.php"><b>"SYSTEMS¡NKL!"</b></span></a>
        </div>
    </div>
</footer>


<?php include("../template/footer.php"); ?>