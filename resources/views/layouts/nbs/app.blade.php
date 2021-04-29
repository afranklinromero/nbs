<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.nbs.head')
<body>
    <div id="app">
        @include('layouts.nbs.nav')
        <main class="py-4">
            @yield('contenido')
        </main>
    </div>
    
    @include('layouts.nbs.script')
    
    @yield('scriptlocal')
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #388e3c;;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

     <!-- Grid column -->
     <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
       <h6 class="mb-0">Visita Nuestras Redes Sociales.</h6>
     </div>
     <!-- Grid column -->

     <!-- Grid column -->
     <div class="col-md-6 col-lg-7 text-center text-md-right">

       <!-- Facebook -->
       <a class="fb-ic" href="" target="_blank">
         <i class="fa fa-facebook text-white mr-4"> </i>
       </a>
      
       <!-- youtube +-->
       <a class="yt-ic" href="" target="_blank">
           
         <i class="fa fa-youtube text-white mr-4"> </i>
       </a>
       
       <!--Instagram-->
       <a class="ins-ic" href="" target="_blank">
         <i class="fa fa-instagram text-white"> </i>
       </a>
     </div>
     <!-- Grid column -->

   </div>
   <!-- Grid row-->

 </div>
    </div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

 <!-- Grid row -->
 <div class="row mt-3">

   <!-- Grid column -->
   <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

     <!-- Content -->
     <h6 class="text-uppercase font-weight-bold">SALUD</h6>
     <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: green;">
     <p>Esta herramienta fue desarrollada para que puedan Lorem,  elit.temporibus ullam veniam iste fuga quo praesentium recusandae veritatis labore facilis esse in dolorum, ea numquam rerum minus?</p>

   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

     <!-- Links -->
     <h6 class="text-uppercase font-weight-bold">ACESSO</h6>
     <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: green;">
     <p>
       <a href="#seccion1">Ministerio de Salud</a>
     </p>
     <p>
       <a href="#seccion1">Gobierno Municipal</a>
     </p>
     <p>
       <a href="#seccion1">Link2</a>
     </p>
     <p>
       <a href="#seccion1">Link3</a>
     </p>

   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

     <!-- Links -->
     <h6 class="text-uppercase font-weight-bold">BLog</h6>
     <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: green;">
     <p>
       <a href="#!">EL CANCER</a>
     </p>
     <p>
       <a href="#!">TU VIDA VALE</a>
     </p>
     <p>
       <a href="#!">NO LO HAGAS</a>
     </p>
     <p>
       <a href="#!">SALUD</a>
     </p>

   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

     <!-- Links -->
     <h6 class="text-uppercase font-weight-bold" id="contactos">Contactanos</h6>
     <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: green;">
     <p>
       <i class="fa fa-home mr-3"></i>Edificio Cubo II, 3er Piso Sobre Cuarto Anillo, entre Marriot Hotel y Beauty Plaza, Equipetrol</p>
     <p>
       <i class="fa fa-envelope mr-3"></i> info@salud.com</p>
     <p>
       <i class="fa fa-phone mr-3"></i> 7811346</p>
    

   </div>
   <!-- Grid column -->

 </div>
 <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
 <a href="https://www.sofcruz.com"> SofCruz.com</a>
</div>
<!-- Copyright -->

</footer>
</body>

</html>
