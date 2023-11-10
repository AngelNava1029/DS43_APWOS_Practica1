@extends('layouts.site')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="garantia.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="novedad.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p> Harley Davidson FatBoy280 Fat Box by Box39</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100  img-fluid" src="reflexion.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100  img-fluid" src="loquenecesitassaber.png" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="descuento.png" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><br>

      
      <!-- CARRUSEL-->

      <!-- INFORMATIVO-->
      <div class="container">
        <div class="row">
          <div class="col-8  text-center"><br>
            <h4 class="fw-light">MOTORCYCLES AGENCY RENEGANGEL</h4><br>
            <img src="agencia.jpg"/>
          </div>
          <div class="col-4 text-center res fondogris">
            <h3 class="text-center fw-light ">READY TO FEEL THE POWER OF ONE OF OUR MOTORCYCLES IN YOUR HANDS?</h3>
            <p class="text-center fw-light ">WITH JUST A FEW CLICKS YOU CAN BOOK A TEST DRIVE IN
              A DATE AND TIME CONVENIENT FOR YOU. OUR TEAM OF EXPERTS WILL BE
              READY TO GUIDE YOU THROUGH THE EXPERIENCE AND ANSWER ANY
              QUESTION YOU MAY HAVE...</p>
            <button type="button" class="btn btn-danger">See More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg></button>
          </div>
        </div>
    </div><br></br>
    <!-- INFORMATIVO-->

    <!-- CARDS-->
    <div class="container-fluid fondogris">
      <div class="row">
        <!-- CARDS 1-->
        <div class="col-3 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="casco.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Predator Helmet</h5>
              <p class="card-text">Best Predator Custom Bobber Chopper Motorcycle Helmet Black Red Margin DOT/ECE Approved Style</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$5,172.41</li>
              <li class="list-group-item">Shipment MX$100.00</li>
              <li class="list-group-item">Size XS-S-M-L-XL</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Buy Now</button>
              <button type="button" class="btn btn-danger">Add To Cart</button>
            </div>
          </div>
        </div>
        <!-- CARDS1-->

        <!-- CARDS2-->
        <div class="col-3 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="moto.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Renegada250</h5>
              <p class="card-text">
                Maximum Speed: 125 KM/H
                 Fuel Efficiency: 24 KM/LT
                 Engine type: 4 STROKE 2 VAL. AIR COOLED SOHC
                 Transmission: STANDARD 6 SPEED, (RETURN TYPE)
                 Maximum power: 16.7 H.P
                 Displacement: 223 C.C</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$41,190.00</li>
              <li class="list-group-item">Shipment MX$150.00</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Buy Now</button>
              <button type="button" class="btn btn-danger">Add To Cart</button>
            </div>
          </div>    
        </div>
        <!-- CARDS2-->

        <!-- CARDS3-->
        <div class="col-3 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="chaqueta.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Motorcycle Leather Jacket</h5>
              <p class="card-text">
                Material: Polyester
                Details: Zipper
                Print: Solid Color
                Steep: No</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$590.50</li>
              <li class="list-group-item">Shipment MX$50.00</li>
              <li class="list-group-item">Size XS-S-M-L-XL</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Buy Now</button>
              <button type="button" class="btn btn-danger">Add To Cart</button>
            </div>
          </div>
        </div>
        <!-- CARDS3-->

        <!-- CARDS4-->
        <div class="col-3 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="coderas.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Elbow And Knee Pads</h5>
              <p class="card-text">Meryado Motorcycle Knee Pads, Adjustable Elbow Protectors, 
                 Motorcycle, Skating, Cycling, BMX, Skiing and a Wide Range of Sports,
                 4 Adult Elbow Pads, Knee Pads</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$455.00</li>
              <li class="list-group-item">Shipment MX$50.00</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Buy Now</button>
              <button type="button" class="btn btn-danger">Add To Cart</button>
            </div>
          </div>
        </div>
        <!-- CARDS4-->
      </div>
    </div>
    <!-- CARDS-->

     <!-- HERO1-->
      <div class="row">
       <div class="col-6 text-center"><br>
          <h1>¡Potencia tu Moto con Nuestros Servicios Especializados!</h1>
          <p>Descubre cómo mantener tu motocicleta en su mejor estado con nuestros servicios profesionales y piezas de alta calidad.</p>
          <button type="button" class="btn btn-danger">Explora Nuestros Servicios</button>
        </div>
        <div class="col-6 text-center"><br>
          <img src="servicios.jpg"/>
        </div>
      </div><br>
     <!-- HERO1-->

     <!-- HERO2-->
     <div class="row fondogris">
      <div class="col-6 text-center"><br>
         <img src="ninja.jpg"/>
       </div>
       <div class="col-6 text-center"><br>
         <h1>¡Pronto tendremos en nuestros inventarios la nueva moto KAWASAKI NINJA 1000SX 2023!</h1>
         <p>Haz tu apartado lo mas rapido posible</p>
         <button type="button" class="btn btn-danger">Apartar ya!</button>
       </div>
     </div><br>
    <!-- HERO2-->

    <!-- INFO-->
    <div class="row">
      <div class="col-4 text-center">
        <h2>Descubre la historia apasionante de nuestra agencia de motos.</h2>
        <p>Sumérgete en un viaje emocionante a través de décadas de pasión por las motocicletas.
        Explora cómo nuestra dedicación a la calidad y la excelencia ha definido nuestra trayectoria en la industria.</p>
        <p>¡Ven y descubre cómo hemos estado impulsando la emoción sobre ruedas desde hace años!</p>
      </div>
      <div class="col-2">
      </div>
      <div class="col-6">
        <img src="agencia2.jpg"/>
      </div>
     </div><br>
    <!-- INFO-->

    <!-- CTA-->
    <div class="container-fluid fondogris">
      <div class="row">
        <!-- CARDS 1-->
        <div class="col-4 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="ac1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SULAITE Chamarra de Protección</h5>
              <p class="card-text"> Armadura de Protección para Cuerpo Armor Motocross , Chaqueta Protectora de Motociclista Ciclismo</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$1000.00</li>
              <li class="list-group-item">Shipment MX$50.00</li>
              <li class="list-group-item">Size XS-S-M-L-XL</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Proximamente</button>
            </div>
          </div>
        </div>
        <!-- CARDS1-->

        <!-- CARDS2-->
        <div class="col-4 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="ac2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">DAHAN Guantes Motociclista</h5>
              <p class="card-text">
                Guantes Antideslizantes de Moto, Pantalla Táctil Dedo Completo Nudillo Duro Motocicleta Guantes, Protección Dedo Completo para Ciclismo, Motocicleta</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$600.00</li>
              <li class="list-group-item">Shipment MX$50.00</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Proximamente</button>
            </div>
          </div>    
        </div>
        <!-- CARDS2-->

        <!-- CARDS3-->
        <div class="col-4 text-center">
          <div class="card border-danger" style="width: 15rem;">
            <img src="ac3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">IRELIA - Máscara</h5>
              <p class="card-text">
                Forro polar suave. Asegúrate de pedir en la tienda "IRELIA" para garantizar el producto original.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">MX$290.50</li>
              <li class="list-group-item">Shipment MX$50.00</li>
              <li class="list-group-item">Size unitalla</li>
            </ul>
            <div class="card-body">
              <button type="button" class="btn btn-danger">Proximamente</button>
            </div>
          </div>
        </div>
      </div>  
        <!-- CARDS3-->
    <!-- CTA-->

    @endsection