<?php  

$url_base = "http://localhost/sistema/";

?>


<!doctype html>
<html lang="en">
    <head>
        <title>SYSTEMS¡NKL!</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"  />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <link rel="stylesheet" href="../estilos.css">
    </head>

    <body>
         
    <style>

    body{
      background: black;
    }

      .navbar {
          background: linear-gradient(to right, brown,navy);
      }

      .navbar-brand:hover {
        text-decoration:underline;
      }

      .nav-link:hover {
        text-decoration:underline;
      }

      .video {
        width: 100%;
      }

      

    </style>

    <nav  class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a style="color:whitesmoke;" class="navbar-brand fw-bold" href="<?php echo $url_base; ?>">SYSTEMS¡NKL!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color:whitesmoke;" class="nav-link fw-bold" aria-current="page" href="<?php echo $url_base; ?>portafolio">Nuestros servicios</a>
        </li>
        <li class="nav-item">
          <a style="color:whitesmoke;" class="nav-link fw-bold" href="<?php echo $url_base; ?>contactos">Registrar cliente</a>
        </li>

        <li class="nav-item">
          <a style="color:whitesmoke;" class="nav-link fw-bold" href="<?php echo $url_base; ?>contacto">Contacto</a>
        </li>
      </ul>

<center> 
         <div class="reloj me-3">
          <h6 style="color: whitesmoke;" class="fw-bold"><span id="tiempo">00 : 00 : 00</span></h6>
        </div>
</center>

      <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">

      <button type="button" class="btn btn-danger fw-bold" data-bs-toggle="modal" data-bs-target="#create">
         Salir
      </button>
      
      </form>
    </div>
  </div>
</nav>


<?php include("create.php"); ?>
          
<main class="contenedor">