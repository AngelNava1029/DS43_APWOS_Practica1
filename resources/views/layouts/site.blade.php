<html>

<head>
    <link rel="stylesheet" href="Css.css" />
    <link rel="stylesheet" href="Stylesvs.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</head>

<body>
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light row">
        <!-- LOGOS-->
        <div class="col-3">
            <img src="1moto.png" />
            <a class="navbar-brand" href="#">RENEGANGEL</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <!-- LOGOS-->

        <!-- NAVEGACION-->
        <div class="collapse navbar-collapse " id="navbarNav">
            <div class="col-5">
                <ul class="navbar-nav ">
                    <li class="nav-item active ">
                        <a class="nav-link negras" href="#">HOME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link negras" href="#">MOTORCYCLES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link negras" href="#">ACCESSORIES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link negras" href="#">CONTACS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link negras" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link negras" href="#">NEWS</a>
                    </li> 
                </ul>
            </div>
          </div>  
            <!-- NAVEGACION-->

            <!-- BOTONES-->
            <div class="col-2 ">
                <div class="row">

                <a class="btn btn-danger col-4 ms-3" href="#">Login</a>
                <a class="btn btn-danger col-4 ms-3" href="#">SingUp</a>
                </div>
            </div>
            <!-- BOTONES-->

            <!-- ICONOS-->
            <div class="col-2 ms-3">
                <svg xmlns="http://www.w3.org/2000/svg " width="30" height="30" fill="currentColor" class="bi bi-search "
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat"
                    viewBox="0 0 16 16">
                    <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                    <path
                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div> 
            <!-- ICONOS-->      
    </nav>
    <!-- NAVBAR-->

    <!-- CARRUSEL-->
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

    <!-- FLUTER-->

    <div class="container-fluid fondo res2">
      
      <div class="feature-list fw-light negras">
          <h2 class="text-center">Nuestras Características Principales</h2>
          <ol>
              <li>Inventario Variado: Ofrecemos una amplia gama de motocicletas de marcas reconocidas, desde modelos clásicos hasta las últimas novedades en el mercado.</li>
              <li>Servicios de Mantenimiento: Nuestro equipo de mecánicos altamente capacitados garantiza un mantenimiento y reparación de calidad para mantener tu moto en óptimas condiciones.</li>
              <li>Financiamiento Personalizado: Facilitamos opciones de financiamiento flexibles para ayudarte a adquirir la moto de tus sueños sin complicaciones.</li>
              <li>Asesoramiento Profesional: Nuestros expertos en motocicletas están disponibles para brindarte asesoramiento personalizado y ayudarte a tomar la mejor decisión de compra.</li>
              <li>Comunidad Activa: Únete a nuestra comunidad de entusiastas de las motos para eventos, viajes y consejos útiles sobre mantenimiento y personalización de motocicletas.</li>
          </ol>
      </div><br><br>

    <div class="row negras fondo3 res2">
      <div class="col-6">
          <h2 >Contacto</h2>
          <p>
              <strong>Dirección:</strong> Avenida Pedro Ascencio, Hermosillo Sonora, Mexico <br>
              <strong>Teléfono:</strong> 6621002083 <br>
              <strong>Correo Electrónico:</strong> <a href="wonderbra1029@gmail.com" class="blancas">wonderbra1029@gmail.com</a> <br>
              <strong>Sitio Web:</strong> <a href="" class="blancas">www.motoagencia.com</a>
          </p>
      </div>

      <div class="col-6">
          <p>¡Visítanos hoy y descubre el mundo de las motocicletas con MotoAgencia! Síguenos en nuestras redes sociales para estar al tanto de nuestras últimas ofertas y eventos.</p>
          <ul>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg><a href="https://www.facebook.com/MotoAgencia" class="blancas">   Agencia RENEGANGEL</a></li>
              
              <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg><a href="https://www.instagram.com/MotoAgenciaOficial" class="blancas">   Agencia RENEGANGEL</a></li>

              <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg><a href="https://www.twitter.com/MotoAgenciaTW" class="blancas">   Agencia RENEGANGEL</a></li>
          </ul> 
        </div>
      </div>
    </div>
  </div>
    @yield('content')
</body>
</html>