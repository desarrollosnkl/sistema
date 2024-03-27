<?php include("../template/header.php"); ?>

<style>

body {
    background: black;
}

.d-block{
    width: 100%;
    height: 660px;
}

.parrafo {
    font-size: 20px;
}

@media screen and (max-width:550px) {
    
    .d-block {
        width: 100%;
        height: 450px;
    }

}

</style>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/img1.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <a href="../contactos/index.php" class="btn btn-danger fw-bold" role="button">Registrate para la Citas</a>
        <p style="font-weight: bold;" class="parrafo">Nuestro servicio son 100% Profesionales</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/img2.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a href="../contactos/index.php" class="btn btn-primary fw-bold" role="button">Registrate para la Citas</a>
        <p style="font-weight: bold;" class="parrafo">Nuestro servicio son 100% Profesionales</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/img3.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a href="../contactos/index.php" class="btn btn-info fw-bold" role="button">Registrate para la Citas</a>
        <p style="font-weight: bold;" class="parrafo">Nuestro servicio son 100% Profesionales</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php include("../template/footer.php"); ?>