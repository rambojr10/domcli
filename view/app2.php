<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/iconodomcli.png">

    <title>Domcli</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Style for de home -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Step css -->
    <link rel="stylesheet" href="assets/css/steps.css">
    <!-- Fontawesome free -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <style>
      .display-4{
        color: #97979b;
      }
    </style>
  </head>

  <body>
    <!-- header -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm menu">
      <img src="assets/images/logodomcli.png" class="my-0 mr-md-auto font-weight-normal logo">
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> -->
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
      <a class="btn btn-color2" href="./view/pages/register.php">Registrarse</a>
    </div>
    <!-- section 2 -->
    <div class="box container-fluid">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4"">Domcli.com</h1>
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
      <!-- <p class="lead">Sugerencias: <span class="text-muted">Hamburguesas, Almuerzos, Tienda, Farmacia.</span></p> -->
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

    <!-- section 3 -->
    <div class="container-fluid fondocontenido">
      <div class="pricing-header pb-md-4 mx-auto text-center">
        <h2 class="masbuscados">Más buscados</h2>
      </div>

      <div class="container">
        <!-- <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Free</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Pro</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Enterprise</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>30 users included</li>
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
            </div>
          </div>
        </div> -->

        <!-- fila 1 de tarjeta -->
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- fila 2 de tarjeta -->
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>

    <!-- <hr> -->

    <!-- footer -->
    <div class="fondofooter container-fluid">
      <footer>
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="assets/images/iconodomcli.png" alt="LogoDomcli" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; Andrés Valencia 2020</small>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')</script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/holder.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
