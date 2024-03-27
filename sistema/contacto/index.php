<?php include("../template/header.php"); ?>

<style>

body {
    background: #1d2c3f;
}

.mapa {
   border-radius: 10px;
}

.contacto {
   color: whitesmoke;
   font-weight: bold;
}

@media screen and (max-width:800px) {
    
 .mapa {
    width: 100%;
 }

}

@media screen and (max-width:500px) {
    
    .mapa {
       width: 95%;
    }
   
   }
   

</style>

<div class="container text-center p-2">

<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.141090202573!2d-66.56605482589887!3d10.489542064421746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2baba18bcbce77%3A0x14fe8fa3f05dd5e4!2sLa%20Muralla!5e0!3m2!1ses-419!2sve!4v1711437277331!5m2!1ses-419!2sve" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="text-center">
<a class="contacto" href="">Contacto: <b>04126001614</b></a>   
</div>


<?php include("../template/footer.php"); ?>