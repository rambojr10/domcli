<!doctype html>
  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/iconodomcli.png">
    <title>Domcli</title>
    <!-- Font Family -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Style for de home -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Step css -->
    <link rel="stylesheet" href="assets/css/steps.css">
    <!-- Fontawesome free -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Estilos propios del archivo -->
    <style>
      .dropdown-item:hover{
        color: #ff6d00;
      }
      a.p-2:hover{
        text-decoration: underline;
        text-decoration-color: #ff6d00;
      }

      /* .loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('images/pageLoader.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: .8;
        display: none;
      } */
    </style>
  </head>

  <body>
    <!-- <div class="loader"></div> -->
    <!-- header -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm menu">
      <img src="assets/images/logodomcli.png" class="my-0 mr-md-auto font-weight-normal logo">
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> -->
      <a class="mr-5 mx-auto">
        <div class="badge badge-info"><i class="fas fa-map-marker-alt"></i></div>
        <select class="js-example-basic-single custom-select" name="cmbLocation">
          <option>Elegir ubicación</option>
        </select>
      </a>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Nosotros</a>
        <a class="p-2 text-dark dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Categorías</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#"><i class="fas fa-hamburger"></i> Comidas rápidas</a>
          <a class="dropdown-item" href="#"><i class="fas fa-utensils"></i> Restaurantes</a>
          <a class="dropdown-item" href="#"><i class="fas fa-prescription-bottle-alt"></i> Droguerías</a>
          <a class="dropdown-item" href="#"><i class="fas fa-shopping-cart"></i> Supermercados</a>
          <div class="dropdown-divider"></div>
        </div>
        <a class="p-2 text-dark" href="./view/pages/login.php">Iniciar Sesión</a>
      </nav>
      <a class="btn btn-color2 sombra mr-2" href="./view/pages/register.php">Registrarse</a>
      
    </div>

    <!-- section 2 -->
    <div class="box container-fluid">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 animate__animated animate__backInLeft" id="lblTitulo">Domcli.com</h1>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="¿Qué pedirás hoy?" aria-label="Barra de búsqueda" aria-describedby="button-addon2">
          <!-- <div class="input-group-append">
            <button class="btn btn-color1" type="button" id="button-addon2">Buscar</button>
          </div> -->
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-color2">
              <input type="radio" name="options" id="btnBuscar"> Buscar
            </label>
            <label class="btn btn-color1">
              <input type="radio" name="options" id="btnVertodas"> Ver todas
            </label>
          </div>
        </div>
      </div>

      <!-- step -->
      <div class="md-stepper-horizontal orange">
        <div class="md-step active">
          <div class="md-step-circle"><span>1</span></div>
          <div class="md-step-title">Busca</div>
          <!-- <div class="md-step-optional col">lo que quieras pedir</div> -->
          <div class="md-step-bar-left"></div>
          <div class="md-step-bar-right"></div>
        </div>
        <div class="md-step active">
          <div class="md-step-circle"><span>2</span></div>
          <div class="md-step-title">Comunicate</div>
          <!-- <div class="md-step-optional col">con el proveedor</div> -->
          <div class="md-step-bar-left"></div>
          <div class="md-step-bar-right"></div>
        </div>
        <div class="md-step active">
          <div class="md-step-circle"><span>3</span></div>
          <div class="md-step-title">Recibe</div>
          <!-- <div class="md-step-optional col">desde la comodidad de tu hogar</div> -->
          <div class="md-step-bar-left"></div>
          <div class="md-step-bar-right"></div>
        </div>
      </div>
      <br>
    </div> 

    <br>

    <!-- section 3  & contenido principal-->
    <div class="container-fluid fondocontenido">
      <div class="pricing-header pb-md-4 mx-auto text-center row">
        <h2 class="masbuscados">Más buscados</h2>
        <h2 class="mejorpuntuacion">Mejor puntuación</h2>
      </div>

      <!-- Contenedor de tarjetas -->
      <div class="container">
        <!-- fila 1 de tarjeta -->
        <h4>Negocios</h4><hr>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img src="assets/images/tarjeta1x1.png" alt="Tarjeta1">
              <div class="card-body">
                <h6>Company Name</h6>
                <p class="card-text mb-1">Productos destacados</p>
                <ul>
                  <li>Alcohol</li>
                  <li>Hamburguesas</li>
                  <li>Jugos Naturales</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img src="assets/images/tarjeta2x1.png" alt="Tarjeta2">
              <div class="card-body">
                <h6>Company Name</h6>
                <p class="card-text mb-1">Productos destacados</p>
                <ul>
                  <li>Alcohol</li>
                  <li>Hamburguesas</li>
                  <li>Jugos Naturales</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="assets/images/tarjeta3x1.png" alt="Tarjeta3">
              <!-- poner las 2 tarjetas y intercambiar la prop hidden entre ellas de acuerdo al estatus -->
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <div class="card-body">
                <h6>Company Name</h6>
                <p class="card-text mb-1">Productos destacados</p>
                <ul>
                  <li>Alcohol</li>
                  <li>Hamburguesas</li>
                  <li>Jugos Naturales</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- fila 2 de tarjeta -->
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img src="assets/images/tarjeta4x1.png" alt="Tarjeta4">
              <div class="card-body">
                <h6>Company Name</h6>
                <p class="card-text mb-1">Resumen de productos</p>
                <ul>
                  <li>Alcohol</li>
                  <li>Hamburguesas</li>
                  <li>Jugos Naturales</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted"><i class="fas fa-circle" style="color: red;"></i> Cerrado</small>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img src="assets/images/tarjeta5x1.png" alt="Tarjeta5">
              <div class="card-body">
                <h6>Company Name</h6>
                <p class="card-text mb-1">This is a wider card</p>
                <ul>
                  <li>Alcohol</li>
                  <li>Hamburguesas</li>
                  <li>Jugos Naturales</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section 4 slider publicitario -->
    <div class="container">
      <h4>Espacio publicitario</h4><hr>
      <div class="row">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/fondoinicio1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/fondoinicio2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/publicidad4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- section 5 productos individuales -->
    <div class="container mt-3">
      <h4>Productos individuales</h4><hr>
      <div class="row">
        <div class="card-group mb-3" style="padding: 1em;">
          <div class="card">
            <img src="assets/images/publisher/publicidad1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img src="assets/images/publisher/publicidad1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img src="assets/images/publisher/publicidad1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Last button -->
    <div class="container">
      <div class="pb-md-4 mx-auto row justify-content-center">
          <button class="btn btn-color2 sombra btn-lg" id="btnMoreProducts">Ver más</button>
      </div>
    </div>
    <!-- footer -->
    <div class="fondofooter container-fluid">
      <br>
      <footer>
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="assets/images/iconodomcli.png" alt="LogoDomcli" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; Andrés Valencia 2022</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <script>window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')</script>
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/holder.js"></script>

        <!-- Wow JS -->
        <script src="assets/plugins/wow/wow.min.js"></script>
        <!-- Select2 -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!--Scripts propios  -->
        <script type="text/javascript" src="./controller/jscontroller/inicioController.js"></script>
        <!-- Fin scripts propios -->

        <script>
          Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
          });
        </script>
      </body>
      </html>
