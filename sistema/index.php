<?php include("template/header.php"); ?>

<style>

:root {
  --jumbotron-padding-y: 3rem;
}

.jumbotron {
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  background-color: navy;
  
}

.jumbotron-heading{
  text-decoration: underline;
}


@media (min-width: 768px) {
  .jumbotron {
    padding-top: calc(var(--jumbotron-padding-y) * 2);
    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
  }
}


.card:hover {
       border: 3px solid white;
       cursor: pointer;
      opacity: .8;
      
    }

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}

/* galeria */

.contenedor-galeria{
  padding: 30px 0;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-wrap: wrap;
}

.subtitulo {
  color: white;
  text-align: center;
  font-weight: bold;
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  text-decoration:underline;
}

.img-galeria{
  object-fit: cover;
  width: 30%;
  height: 250px;
  display: block;
  margin-bottom: 15px;
  cursor: pointer;
  border-radius: 10px;
 
}

.img-galeria:hover {
  opacity: .9;
  border: 3px solid white;
}



.imagen-light{
  position: fixed;
  background: hsla(348, 83%, 47%, 0.152);
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  display: flex;
  justify-content: center;
  transform: translate(100%);
  align-items: center;
  transition: transform .3s ease-in-out;

}

.show{
  transform: translate(0);
}

.agregar-imagen{
  object-fit: cover;
  width: 75%;
  border-radius: 10px;
  transform: translate(1);
  transition: transform .3s .2s ;
  border: 2px solid whitesmoke;
}



.close{
  position: absolute;
  top: 15px;
  right: 40px;
  width: 40px;
  cursor: pointer;
 
}

.close:hover {
  border: 2px solid whitesmoke;
  border-radius: 60%;
}

.titulo {
  text-decoration: underline;
}

/* footer */

footer {
  background: linear-gradient(to left, brown, navy);
  background-repeat: no-repeat;
  background-size: cover;
  padding: 40px 0 30px 0;
  margin: auto;
  overflow: hidden;
}

.contenedor-footer {
  display: flex;
  width: 100%;
  justify-content: space-evenly;
  margin: auto;
  padding-bottom: 40px;
  border-bottom: 1px solid whitesmoke;
}

.contenido-foo {
  text-align: center;
  

}

.contenido-foo h4 {
  color: whitesmoke;
  cursor: pointer;
 padding-bottom: 2px;
 margin-bottom: 10px;
  
}

.contenido-foo h4:hover {
  color: wheat;
 
}

.contenido-foo p {
  color: wheat;
}

.logotipo {
  color: white;
  text-align: center;
  margin: 20px 0 0 0 ;
  font-weight: bold;
}

.icono {
  cursor: pointer;
}

.icono:hover {
  background: hsla(348, 83%, 47%, 0.704);
  border-radius: 7px;
  border: 2px solid whitesmoke;
}

@media screen and (max-width:550px) {
.contenedor-footer {
    flex-direction: column;
 
  }
  .contenido-foo {
    margin-bottom: 20px;
    text-align: center;
  }
}

@media screen and (max-width:800px) {
  .img-galeria {
    width: 45%;
   }

   .agregar-imagen {
    width: 90%;
   }
}

@media screen and (max-width:500px) {
  .img-galeria {
    width: 90%;
  }
}



</style>

<video data-aos="zoom-in" class="video" controls>

   <source src="img/servicios.mp4" type="video/mp4">

</video>
<br><br>
    <main role="main">

      <section data-aos="zoom-in" class="jumbotron text-center">
        <div class="container">
          <h1 style="color: white;" class="jumbotron-heading fw-bold">Nuestros servicios:</h1>
          <p style="color: white;" class="lead fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae hic esse, architecto explicabo provident quo odit perspiciatis quidem eos harum vitae debitis sit in inventore accusamus ut praesentium sapiente.</p>
          <p>
          <a href="../sistema/contactos/index.php" class="btn btn-danger fw-bold" role="button">Registrate</a>
          <a href="" class="btn btn-warning fw-bold" role="button">Contactanos</a>
          </p>
        </div>
      </section>
<br>
      <div data-aos="zoom-in" class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4">
                <img class="card-img-top" src="img/img1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../sistema/contactos/index.php" class="btn btn-danger fw-bold" role="button">Aparta tu cita</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/img2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../sistema/contactos/index.php" class="btn btn-primary fw-bold" role="button">Aparta tu cita</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/img3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../sistema/contactos/index.php" class="btn btn-warning fw-bold" role="button">Aparta tu cita</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/img4.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../sistema/contactos/index.php" class="btn btn-danger fw-bold" role="button">Aparta tu cita</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/img5.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../sistema/contactos/index.php" class="btn btn-primary fw-bold" role="button">Aparta tu cita</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/img6.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../sistema/contactos/index.php" class="btn btn-warning fw-bold" role="button">Aparta tu cita</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section data-aos="zoom-in" class="galeria" id="Portafolio">
    <div class="contenedor">
        <h2 class="subtitulo">Portafolio:</h2>
          <div class="contenedor-galeria">
            <img src="img/img1.jpg" alt="" class="img-galeria">
            <img src="img/img2.jpg" alt="" class="img-galeria">
            <img src="img/img3.jpg" alt="" class="img-galeria">
            <img src="img/img4.jpg" alt="" class="img-galeria">
            <img src="img/img5.jpg" alt="" class="img-galeria">
            <img src="img/img6.jpg" alt="" class="img-galeria"> 
          </div>
    </div>
</section>

<section class="imagen-light">
   <img src="img/close.svg" alt="" class="close">
   <img src="#" alt="" class="agregar-imagen"> 
</section>

  <br><br>

<h2 data-aos="zoom-in" style="color: white;" class="titulo text-center fw-bold">Nuestro trabajo:</h2>

<hr class="featurette-divider">

<div class="contenedor p-3 bg-light">
<div data-aos="zoom-in" class="row featurette">
  <div class="col-md-7">
    <h2 style="color: brown;" class="featurette-heading">Operaciones: <span class="text-muted">100% Porfesionales</span> <a style="background: brown;" class="btn text-white fw-bold" href="../sistema/contactos/index.php" role="button">Registrar</a></h2>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo magnam enim non? Aliquid eaque harum veritatis ratione! Animi id excepturi necessitatibus quia, facere assumenda nemo provident totam unde sequi corrupti perferendis odit temporibus quos dicta. Accusantium aut amet, corporis itaque quo voluptatem atque culpa velit consectetur tempora eos expedita molestias quas nostrum. Dolores nulla minima expedita illo labore sapiente corrupti repellat, provident odit possimus dolorum.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="img/img1.jpg">
  </div>
</div>

<hr class="featurette-divider">

<div data-aos="zoom-in" class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 style="color: navy;"  class="featurette-heading">Medicina G: <span class="text-muted">100% Profesionales</span> <a style="background: navy;" class="btn text-white fw-bold" href="../sistema/contactos/index.php" role="button">Registrar</a></h2>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo magnam enim non? Aliquid eaque harum veritatis ratione! Animi id excepturi necessitatibus quia, facere assumenda nemo provident totam unde sequi corrupti perferendis odit temporibus quos dicta. Accusantium aut amet, corporis itaque quo voluptatem atque culpa velit consectetur tempora eos expedita molestias quas nostrum. Dolores nulla minima expedita illo labore sapiente corrupti repellat, provident odit possimus dolorum.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" src="img/img3.jpg">
  </div>
</div>

<hr class="featurette-divider">

<div data-aos="zoom-in" class="row featurette">
  <div class="col-md-7">
    <h2 style="color: blue;"  class="featurette-heading">Atencion: <span class="text-muted">100% Profesionales</span> <a style="background: #1d2c3f;" class="btn text-white fw-bold" href="../sistema/contactos/index.php" role="button">Registrar</a></h2>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo magnam enim non? Aliquid eaque harum veritatis ratione! Animi id excepturi necessitatibus quia, facere assumenda nemo provident totam unde sequi corrupti perferendis odit temporibus quos dicta. Accusantium aut amet, corporis itaque quo voluptatem atque culpa velit consectetur tempora eos expedita molestias quas nostrum. Dolores nulla minima expedita illo labore sapiente corrupti repellat, provident odit possimus dolorum./p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="img/img6.jpg">
  </div>
</div>
</div>
<hr class="featurette-divider">
</div>
<br>
    </main>

    <h2 data-aos="zoom-in" style="color: white;" class="titulo text-center fw-bold">Contactos:<h2>
  <footer data-aos="zoom-in">

  <div class="contenedor-footer" id="Contactos">
    <div class="contenido-foo">
      <h4>Instagram<h4>
        <img src="img/instagran.svg" class="icono" alt="">
      <p>Leni30hidalgo@gmail.com</p>
    </div>

    <div class="contenido-foo">
      <h4>Telefono<h4>
        <img src="img/telefono.svg" class="icono" alt="">
      <p>04126001614</p>
    </div>

    <div class="contenido-foo">
      <h4>facebook<h4>
        <img src="img/face.svg" class="icono" alt="">
      <p>Leni30hidalgo@gmail.com</p>
    </div>
  </div>
  <h2 class="logotipo">SYSTEMS¡NKL!</h2>
</footer>





<?php include("template/footer.php"); ?>


