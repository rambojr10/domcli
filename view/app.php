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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css" />
    <!-- Style for de home -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- Step css -->
    <link rel="stylesheet" href="assets/css/steps.css" />
    <!-- Fontawesome free -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- Selectize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap4.min.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/plugins/owl-carousel/assets/owl.carousel.min.css">


    <!-- Estilos propios del archivo -->
    <style>
        .dropdown-item:hover {
            color: #ff6d00;
        }

        a.p-2:hover {
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

<body class="bg-light">

    <!-- <div class="loader"></div> -->

    <!-- header -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom menu bg-main" style="border:1px solid #011731 !important;">
        <!-- <img src="assets/images/logodomcli.png" class="my-0 mr-md-auto logo"> -->
        <h2 class="my-0 mr-md-auto font-weight-bold text-white">Domcli.com</h2>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="#">Nosotros</a>
            <!-- <a class="p-2 text-dark dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Categorías</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fas fa-hamburger"></i> Comidas rápidas</a>
                <a class="dropdown-item" href="#"><i class="fas fa-utensils"></i> Restaurantes</a>
                <a class="dropdown-item" href="#"><i class="fas fa-prescription-bottle-alt"></i> Droguerías</a>
                <a class="dropdown-item" href="#"><i class="fas fa-shopping-cart"></i> Supermercados</a>
                <div class="dropdown-divider"></div>
            </div> -->
            <a class="p-2 text-white" href="./view/pages/login.php">Iniciar Sesión</a>
        </nav>
        <a class="btn btn-color2 sombra mr-2" href="./view/pages/register.php">Registrarse</a>
    </div>
    <!-- end header -->

    <!-- section 2 - bar search -->
    <div class="box container-fluid">
        <div class="px-3 py-3 pt-md-5 pb-md-4 text-center">
            <h1 class="display-4 animate__animated animate__backInLeft" id="lblTitulo">Domcli.com</h1>
            <div class="col-lg-7 col-xl-6 col-md-8 col-sm-10 mx-auto p-0">
                <div class="input-group mb-3 border border-info rounded">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <select id="select-beast" required class="demo-default form-control" placeholder="Your city" name="cmbLocation">
                    <option value="">Your city</option>
                </select>
                <input type="text" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                    <button class="btn btn-color3">Buscar</button>
                </div>
                <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-color2">
                        <input type="radio" name="options" id="btnBuscar"> Buscar
                    </label>
                    <label class="btn btn-color1">
                        <input type="radio" name="options" id="btnVertodas"> Ver todas
                    </label>
                </div> -->
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
    <!-- end section 2 -->

    <!-- main container -->
    <div id="main" class="col-lg-11 mx-auto col-sm-11 col-11">

        <!-- categories -->
        <div class="mt-4">
            <div>
                <h4>Categorías</h4>
                <div class="owl-carousel home-categories mt-3">
                    <a href="#" class="home-category category-color1 text-right">
                        <span>Comidas rápidas</span>
                        <svg enable-background="new 0 0 512.001 512.001" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="m247.76 216.1c-1.053-1.136-2.532-1.783-4.083-1.783h-209.25c-1.55 0-3.03 0.646-4.083 1.783-1.053 1.136-1.585 2.661-1.466 4.206l21.7 284.13c0.221 2.902 2.64 5.141 5.549 5.141h70.314 0.022 98.347v-117.88c2.909 0 8.312 33.883 8.535 30.983l15.879-202.37c0.118-1.547-0.413-3.07-1.467-4.207zm-168.76 218.68c-4.169-6.156-6.61-13.567-6.61-21.524 0-7.982 2.439-15.405 6.61-21.562v43.086z" fill="#FBAE2E" />
                            <g fill="#202020" opacity=".15">
                                <path d="m97.931 434.78v-43.086c-4.172 6.157-6.61 13.58-6.61 21.562 0 7.957 2.441 15.368 6.61 21.524z" />
                                <path d="m69.507 504.44-21.7-284.13c-0.118-1.546 0.413-3.07 1.466-4.206s2.532-1.783 4.083-1.783h-18.922c-1.55 0-3.03 0.646-4.083 1.783-1.053 1.136-1.585 2.661-1.466 4.206l21.7 284.13c0.222 2.902 2.64 5.141 5.549 5.141h18.922c-2.909 2e-3 -5.327-2.239-5.549-5.141z" />
                            </g>
                            <path d="m239.89 8.826-17.756-6.101c-1.396-0.481-2.925-0.386-4.252 0.263-1.327 0.648-2.341 1.795-2.82 3.191l-43.263 125.93c-0.584 1.701-0.312 3.578 0.733 5.042 1.044 1.463 2.731 2.332 4.529 2.332h19.853c2.376 0 4.491-1.509 5.264-3.757l41.166-119.83c0.999-2.908-0.547-6.073-3.454-7.072z" fill="#DCE0E2" />
                            <path d="m250.56 136.14h-223c-3.074 0-5.565 2.491-5.565 5.565v41.722c0 3.074 2.491 5.565 5.565 5.565h223c3.073 0 5.565-2.491 5.565-5.565v-41.722c0-3.074-2.492-5.565-5.566-5.565z" fill="#F7BF6D" />
                            <path d="m40.913 183.43v-41.722c0-3.074 2.491-5.565 5.565-5.565h-18.921c-3.074 0-5.565 2.491-5.565 5.565v41.722c0 3.074 2.491 5.565 5.565 5.565h18.922c-3.075 1e-3 -5.566-2.49-5.566-5.565z" enable-background="new" fill="#202020" opacity=".15" />
                            <g fill="#F7BF6D">
                                <polygon points="30.488 241.3 247.63 241.3 249.69 214.32 28.428 214.32" />
                                <polygon points="30.488 241.3 247.63 241.3 251.72 193.27 26.605 193.27" />
                            </g>
                            <path d="m473.46 374.72h-362.52c-21.285 0-38.538 17.257-38.538 38.54 0 21.278 17.253 38.536 38.538 38.536h362.52c21.283 0 38.541-17.258 38.541-38.536-2e-3 -21.283-17.26-38.54-38.543-38.54z" fill="#E95353" />
                            <path d="m278.12 190.26c0-9.961-8.076-18.039-18.039-18.039h-242.04c-9.964 0-18.04 8.078-18.04 18.039v6.013c0 9.964 8.076 18.041 18.04 18.041h242.04c9.963 0 18.039-8.077 18.039-18.041v-6.013z" fill="#8C5549" />
                            <g fill="#202020">
                                <polygon points="28.428 214.32 30.488 241.3 49.411 241.3 47.35 214.32" enable-background="new" opacity=".15" />
                                <path d="m18.922 196.28v-6.013c0-9.961 8.076-18.039 18.04-18.039h-18.922c-9.964 0-18.04 8.078-18.04 18.039v6.013c0 9.964 8.076 18.041 18.04 18.041h18.922c-9.964 0-18.04-8.077-18.04-18.041z" enable-background="new" opacity=".15" />
                            </g>
                            <g fill="#F96969">
                                <path d="m168.22 374.72-8.05 8.259c-3.219 3.302-3.151 8.587 0.151 11.805 1.623 1.582 3.725 2.37 5.826 2.37 2.172 0 4.342-0.843 5.978-2.521l17.665-18.124c0.533-0.547 0.967-1.152 1.32-1.789h-22.89z" />
                                <path d="m224.4 374.72-8.05 8.26c-3.219 3.301-3.151 8.586 0.151 11.804 1.623 1.582 3.725 2.37 5.826 2.37 2.172 0 4.342-0.843 5.978-2.522l17.665-18.124c0.533-0.547 0.966-1.151 1.32-1.788h-22.89z" />
                                <path d="m280.57 374.72-8.049 8.26c-3.218 3.301-3.15 8.586 0.152 11.804 1.624 1.582 3.726 2.37 5.826 2.37 2.172 0 4.343-0.843 5.978-2.522l17.665-18.124c0.533-0.547 0.965-1.151 1.32-1.788h-22.892z" />
                                <path d="m336.74 374.72-8.048 8.259c-3.218 3.302-3.15 8.587 0.151 11.805 1.623 1.582 3.725 2.37 5.826 2.37 2.173 0 4.342-0.843 5.979-2.521l17.665-18.124c0.533-0.547 0.966-1.152 1.32-1.789h-22.893z" />
                                <path d="m392.92 374.72-8.048 8.259c-3.218 3.302-3.15 8.587 0.151 11.805 1.623 1.582 3.725 2.37 5.826 2.37 2.173 0 4.342-0.843 5.979-2.521l17.665-18.124c0.533-0.547 0.966-1.152 1.32-1.789h-22.893z" />
                            </g>
                            <g opacity=".15">
                                <path d="m91.321 413.26c0-21.284 17.253-38.54 38.538-38.54h-18.922c-21.285 0-38.538 17.257-38.538 38.54 0 21.278 17.253 38.536 38.538 38.536h5.314c0.03-0.81 0.092-1.614 0.171-2.412-14.658-5.455-25.101-19.57-25.101-36.124z" fill="#202020" />
                            </g>
                            <path d="m428.11 413.26h-271.83c-22.133 0-40.074 17.94-40.074 40.074v16.175c0 22.133 17.941 40.073 40.074 40.073h271.83c22.131 0 40.074-17.94 40.074-40.073v-16.175c-2e-3 -22.134-17.945-40.074-40.076-40.074z" fill="#F7BD63" />
                            <path d="m135.14 469.5v-16.175c0-22.134 17.941-40.074 40.073-40.074h-18.923c-22.133 0-40.074 17.94-40.074 40.074v16.175c0 22.133 17.941 40.073 40.074 40.073h18.923c-22.132 0-40.073-17.942-40.073-40.073z" enable-background="new" fill="#202020" opacity=".15" />
                        </svg>
                    </a>
                    <a href="#" class="home-category category-color2">
                        <span>Restaurantes</span>
                        <svg enable-background="new 0 0 480 480" version="1.1" viewBox="0 0 480 480" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="M472,240v16c0,8.8-7.328,16-16.28,16H24.28C15.328,272,8,264.8,8,256v-16H472z" fill="#BD852D" />
                            <path d="m40 256v-16h-32v16c0 8.8 7.2 16 16 16h32c-8.8 0-16-7.2-16-16z" fill="#CA9D57" />
                            <path d="M455.72,280H24.28C10.888,280,0,269.232,0,256v-16c0-4.424,3.576-8,8-8h464c4.424,0,8,3.576,8,8v16  C480,269.232,469.112,280,455.72,280z M16,248v8c0,4.416,3.72,8,8.28,8h431.44c4.56,0,8.28-3.584,8.28-8v-8H16z" fill="#132C47" />
                            <rect x="176" y="392" width="144" height="80" fill="#BB5B64" />
                            <rect x="176" y="392" width="24" height="80" fill="#C97C83" />
                            <path d="M360,272v16c0,8.8-7.2,16-16,16h-8l-32,48v40H192v-40l-24-32l-68.56-20.56  C92.64,297.36,88,291.2,88,284.08V272l92,0.96l43.36,36.16c3.04,2.48,6.8,3.84,10.64,3.76l31.6-0.72c4.08-0.08,8-1.76,10.96-4.72  L312,272H360z" fill="#FEDDE0" />
                            <path d="m427.28 172.72c2.96 2.88 4.72 6.88 4.72 11.28 0 8.8-7.2 16-16 16h-24l-16.4 40h-262.96l-24.64-40h-24c-8.8 0-16-7.2-16-16s7.2-16 16-16h352c4.4 0 8.4 1.76 11.28 4.72z" fill="#DBEDF1" />
                            <path d="M96,200c-8.8,0-16-7.2-16-16s7.2-16,16-16H64c-8.8,0-16,7.2-16,16s7.2,16,16,16h24l24.64,40h32  L120,200H96z" fill="#E4F1F4" />
                            <path d="m408 164h-192c0-53.04 42.96-96 96-96s96 42.96 96 96z" fill="#FCB23C" />
                            <path d="m312 100c43.296 0 79.848 28 91.832 68h4.168c0-56-42.96-96-96-96s-96 40-96 96h4.168c11.984-40 48.536-68 91.832-68z" fill="#FDC163" />
                            <path d="m360 8v24c0 4.4-3.6 8-8 8h-40v-24c0-4.4 3.6-8 8-8h40z" fill="#F85766" />
                            <path d="M320,60.408V48h32c8.824,0,16-7.176,16-16V8c0-4.424-3.576-8-8-8h-40c-8.824,0-16,7.176-16,16v16v8  v20.408C250.392,64.52,208,111.36,208,166c0,4.424,3.576,10,8,10h192c4.424,0,8-5.576,8-10C416,111.36,373.608,64.52,320,60.408z   M320,16h31.992l-0.016,16H320V16z M224.36,160c4.056-48,41.808-80,87.64-80s83.584,32,87.64,80H224.36z" fill="#132C47" />
                            <g fill="#FEF0D8">
                                <circle cx="296" cy="128" r="8" />
                                <circle cx="328" cy="104" r="8" />
                            </g>
                            <g fill="#132C47">
                                <path d="m433.02 167.14c-4.488-4.616-10.52-7.144-17.016-7.144h-352c-13.232 0-24 10.768-24 24s10.768 24 24 24h19.528l22.296 36.192c1.464 2.368 4.04 3.808 6.816 3.808h262.96c3.248 0 6.168-1.96 7.4-4.968l14.368-35.032h18.632c13.232 0 24-10.768 24-24 0-6.496-2.528-12.528-6.984-16.856zm-17.016 24.856h-24c-3.248 0-6.168 1.96-7.4 4.968l-14.368 35.032h-253.12l-14.784-24h33.672c4.424 0 8-3.576 8-8s-3.576-8-8-8h-72c-4.416 0-8-3.584-8-8s3.584-8 8-8h352c2.136 0 4.112 0.824 5.704 2.456 1.472 1.432 2.296 3.408 2.296 5.544 0 4.416-3.584 8-8 8z" />
                                <path d="m184 192h-16c-4.424 0-8 3.576-8 8s3.576 8 8 8h16c4.424 0 8-3.576 8-8s-3.576-8-8-8z" />
                            </g>
                            <path d="m248 164h-168c0-46.4 37.6-84 84-84s84 37.6 84 84z" fill="#FEDDE0" />
                            <path d="M180,98c19.12,0,36.68,5.456,50.792,16.208C215.448,94.064,191.28,82.504,164,82.504  C117.6,82.496,80,120,80,168h17.56C105.04,128,139.08,98,180,98z" fill="#FEEBEC" />
                            <path d="m208 164h-88c0-24.32 19.68-44 44-44s44 19.68 44 44z" fill="#F85766" />
                            <g fill="#132C47">
                                <path d="m164 72c-50.728 0-92 43.272-92 94 0 4.424 3.576 10 8 10h168c4.424 0 8-5.576 8-10 0-50.728-41.272-94-92-94zm-35.104 88c3.648-24 18-28 35.104-28s31.456 4 35.104 28h-70.208zm86.424 0c-3.872-32-25.376-44-51.32-44s-47.448 12-51.32 44h-24.256c4.008-40 36.376-68 75.576-68s71.568 28 75.576 68h-24.256z" />
                                <path d="m360 264h-48c-2.128 0-4.16 0.84-5.656 2.344l-35.44 35.44c-1.496 1.496-3.432 2.336-5.496 2.376l-31.576 0.728c-1.96-0.056-3.832-0.656-5.352-1.904l-43.36-36.16c-1.416-1.184-3.192-1.832-5.04-1.856l-91.992-0.968c-2.016 0.088-4.184 0.808-5.712 2.312s-2.376 3.552-2.376 5.688v12.08c0 10.632 6.872 19.88 17.144 23.024l66.04 19.808 20.816 27.752v29.336h-8c-4.424 0-8 3.576-8 8v80c0 4.424 3.576 8 8 8h144c4.424 0 8-3.576 8-8v-80c0-4.424-3.576-8-8-8h-8v-29.576l28.28-42.424h3.72c13.232 0 24-10.768 24-24v-16c0-4.424-3.576-8-8-8zm-48 200h-128v-64h32v24c0 4.424 3.576 8 8 8s8-3.576 8-8v-24h32v24c0 4.424 3.576 8 8 8s8-3.576 8-8v-24h32v64zm40-176c0 4.416-3.584 8-8 8h-8c-2.672 0-5.168 1.336-6.656 3.56l-32 48c-0.872 1.312-1.344 2.864-1.344 4.44v32h-96v-32c0-1.736-0.56-3.416-1.6-4.8l-24-32c-1.024-1.376-2.464-2.376-4.104-2.864l-68.52-20.544c-3.456-1.056-5.776-4.16-5.776-7.712v-3.992l81.064 0.84 41.232 34.384c4.536 3.712 10.24 5.544 15.888 5.568l31.568-0.728c6.176-0.12 12.024-2.624 16.464-7.064l33.096-33.088h36.688v8z" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="home-category category-color3">
                        <span>Farmacias</span>
                        <svg enable-background="new 0 0 58 58" version="1.1" viewBox="0 0 58 58" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <polygon points="38 45.5 38 10.5 11 10.5 11 56.5 32 56.5 32 45.5" fill="#F77400" />
                            <rect x="17" y="10.5" width="7" height="46" fill="#F98630" />
                            <rect x="32" y="45.5" width="26" height="11" fill="#E7ECED" />
                            <g fill="#C1C4C9">
                                <rect x="54" y="45.5" width="2" height="7" />
                                <rect x="50" y="45.5" width="2" height="7" />
                                <rect x="46" y="45.5" width="2" height="7" />
                                <rect x="42" y="45.5" width="2" height="7" />
                                <rect x="38" y="45.5" width="2" height="7" />
                                <rect x="34" y="45.5" width="2" height="7" />
                            </g>
                            <rect x="13" y="1.5" width="23" height="9" fill="#C1C4C9" />
                            <path d="m38 8.5h-4c-0.553 0-1-0.448-1-1s0.447-1 1-1h4c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m38 5.5h-4c-0.553 0-1-0.448-1-1s0.447-1 1-1h4c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m15 8.5h-4c-0.553 0-1-0.448-1-1s0.447-1 1-1h4c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m15 5.5h-4c-0.553 0-1-0.448-1-1s0.447-1 1-1h4c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m19 8.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m19 5.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m23 8.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m23 5.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m27 8.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m27 5.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m31 8.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <path d="m31 5.5h-1c-0.553 0-1-0.448-1-1s0.447-1 1-1h1c0.553 0 1 0.448 1 1s-0.447 1-1 1z" fill="#E7ECED" />
                            <rect x="34" y="18.5" width="4" height="27" fill="#F2ECBF" />
                            <rect x="11" y="18.5" width="12" height="30" fill="#F2ECBF" />
                            <g fill="#C9BE7D">
                                <rect x="11" y="30.5" width="9" height="2" />
                                <rect x="11" y="34.5" width="9" height="2" />
                                <rect x="11" y="22.5" width="9" height="2" />
                                <rect x="11" y="26.5" width="9" height="2" />
                                <rect x="11" y="38.5" width="9" height="2" />
                                <rect x="11" y="42.5" width="9" height="2" />
                            </g>
                            <path d="m18 56.5h-14c-2.2 0-4-1.8-4-4s1.8-4 4-4h14c2.2 0 4 1.8 4 4s-1.8 4-4 4z" fill="#3B8DD3" />
                            <path d="m11 48.5h-7c-2.2 0-4 1.8-4 4s1.8 4 4 4h7v-8z" fill="#EBBA16" />
                        </svg>
                    </a>
                    <a href="#" class="home-category category-color4">
                        <span>Licoreras</span>
                        <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="m347.79 397.82v-40.554h41.905c9.504 0 17.236-7.732 17.236-17.236v-110.4c0-9.504-7.732-17.236-17.236-17.236h-41.905v-40.554h41.905c31.916 0 57.79 25.874 57.79 57.79v110.4c0 31.915-25.874 57.79-57.79 57.79l-41.905-1e-3z" fill="#FFE285" />
                            <path d="m202.94 105.82h-40.207v81.137c0 13.365-10.835 24.2-24.199 24.2-13.365 0-24.199-10.836-24.199-24.2v-81.137h-49.821v398.57h283.27v-398.57h-124.56" fill="#F6A230" />
                            <g fill="#FFE285">
                                <path d="m347.79 504.4v-72.427c0-19.556-15.854-35.409-35.409-35.409s-35.409 15.853-35.409 35.409v72.427h70.818z" />
                                <path d="m206.15 504.4v-72.427c0-19.556-15.854-35.409-35.409-35.409s-35.409 15.853-35.409 35.409v72.427h70.818z" />
                                <path d="m276.97 504.4v-72.427c0-19.556-15.854-35.409-35.409-35.409-19.554 0-35.409 15.853-35.409 35.409v72.427h70.818z" />
                                <path d="m135.33 504.4v-72.427c0-19.556-15.853-35.409-35.409-35.409-19.555 0-35.409 15.853-35.409 35.409v72.427h70.818z" />
                            </g>
                            <path d="m389.69 164.24h-34.301v-66.019h-0.138c-1.712-23.047-20.999-41.279-44.476-41.279h-12.771c-3.772-32.02-31.079-56.94-64.096-56.94-25.786 0-48.09 15.203-58.42 37.113-8.398-11.284-21.835-18.607-36.951-18.607-23.08 0-42.248 17.07-45.539 39.249-19.639 3.76-34.474 20.217-35.954 40.463h-0.132v413.78h298.48v-106.58h34.301c36.058 0 65.394-29.336 65.394-65.394v-110.4c-3e-3 -36.058-29.338-65.394-65.397-65.394zm-251.15 54.525c17.537 0 31.803-14.267 31.803-31.804v-73.533h32.604v-15.208h-47.811v88.741c0 9.151-7.445 16.596-16.595 16.596s-16.595-7.445-16.595-16.596v-88.741h-49.639c1.597-14.309 13.36-25.483 28.086-26.041l7.317-0.277-1e-3 -7.616c0.14-16.881 13.915-30.571 30.829-30.571 16.999 0 30.828 13.83 30.828 30.829h15.208c0-27.204 22.131-49.335 49.335-49.335s49.335 22.131 49.335 49.335v7.604h27.532c15.087 0 27.558 11.421 29.217 26.071h-116.77v15.208h116.96v285.76c-7.504-6.375-17.21-10.233-27.805-10.233-14.671 0-27.643 7.387-35.409 18.632-7.766-11.245-20.738-18.632-35.409-18.632s-27.643 7.387-35.409 18.632c-7.766-11.245-20.738-18.632-35.409-18.632s-27.643 7.387-35.409 18.632c-7.766-11.245-20.738-18.632-35.409-18.632-10.595 0-20.3 3.858-27.805 10.233v-285.76h34.614v73.533c3e-3 17.537 14.27 31.804 31.807 31.804zm216.85 1.237h34.301c5.311 0 9.632 4.321 9.632 9.632v110.4c0 5.311-4.321 9.632-9.632 9.632h-34.301v-129.66zm-283.27 276.79v-64.823c0-15.332 12.473-27.805 27.805-27.805s27.805 12.473 27.805 27.805v64.823h-55.61zm70.817 0v-64.823c0-15.332 12.473-27.805 27.805-27.805s27.805 12.473 27.805 27.805v64.823h-55.61zm70.818 0v-64.823c0-15.332 12.473-27.805 27.805-27.805s27.805 12.473 27.805 27.805v64.823h-55.61zm126.43 0h-55.61v-64.823c0-15.332 12.474-27.805 27.805-27.805 15.332 0 27.805 12.473 27.805 27.805v64.823zm99.694-156.76c0 27.672-22.514 50.186-50.186 50.186h-34.301v-25.346h34.301c13.697 0 24.84-11.143 24.84-24.84v-110.4c0-13.696-11.142-24.84-24.84-24.84h-34.301v-25.346h34.301c27.672 0 50.186 22.514 50.186 50.186v110.4z" fill="#53180F" />
                        </svg>
                    </a>
                    <a href="#" class="home-category category-color5">
                        <span>Supermercados</span>
                        <svg enable-background="new 0 0 511.999 511.999" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="m191.33 299.12v183.24c0 12.167-10.079 21.98-22.344 21.544-11.682-0.415-20.772-10.372-20.772-22.06v-96.494c0-11.906-9.651-21.558-21.558-21.558-11.906 0-21.558 9.651-21.558 21.558v97.011c0 12.167-10.079 21.98-22.344 21.544-11.682-0.415-20.772-10.372-20.772-22.06v-182.73h129.35z" fill="#5B7A7F" />
                            <path d="m223.66 191.33v107.79h-194.02v-107.79c0-35.718 28.955-64.674 64.674-64.674h64.674c35.717 1e-3 64.673 28.956 64.673 64.674z" fill="#D199D1" />
                            <path d="m126.65 299.12h-97.01v-107.79c0-35.718 28.955-64.674 64.674-64.674h32.337v172.46z" fill="#AF7AAE" />
                            <path d="m169.77 51.2c0 23.812-19.304 43.116-43.116 43.116s-43.116-19.304-43.116-43.116 19.304-43.116 43.116-43.116 43.116 19.304 43.116 43.116zm21.558 161.68c-5.953 0-10.779 4.826-10.779 10.779v64.674c0 11.906 9.651 21.558 21.558 21.558s21.558-9.651 21.558-21.558v-75.453h-32.337z" fill="#F4C064" />
                            <path d="m126.65 8.084v86.232c-23.812 0-43.116-19.304-43.116-43.116s19.304-43.116 43.116-43.116z" fill="#F4AB53" />
                            <path d="m428.46 246.91c0 30.695-24.883 55.579-55.579 55.579-9.266 0-17.993-2.28-25.674-6.29-8.342 10.017-20.903 16.395-34.957 16.395-25.115 0-45.474-20.359-45.474-45.474s20.359-45.474 45.474-45.474c3.617 0 7.13 0.435 10.504 1.233 8.963-18.664 28.04-31.549 50.128-31.549 30.694 0 55.578 24.884 55.578 55.58z" fill="#6BAF6E" />
                            <path d="m383.66 245.9c-9.266 0-17.993-2.28-25.674-6.29-8.342 10.017-20.903 16.395-34.957 16.395-17.247 0-32.252-9.603-39.96-23.754 7.898-6.616 18.072-10.604 29.181-10.604 3.617 0 7.13 0.435 10.504 1.233 8.963-18.664 28.04-31.549 50.128-31.549 23.866 0 44.212 15.045 52.087 36.166-10.175 11.297-24.911 18.403-41.309 18.403z" fill="#84D88B" />
                            <path d="m371.95 317.49 47.365-143.28c5.605-16.956 23.896-26.158 40.852-20.553s26.158 23.896 20.553 40.852l-47.365 143.28c-5.605 16.956-23.896 26.158-40.852 20.553-16.957-5.605-26.159-23.895-20.553-40.852z" fill="#FFC248" />
                            <path d="m375.62 345.38c-5.223-7.966-6.901-18.149-3.679-27.895l47.365-143.28c4.376-13.24 16.486-21.751 29.657-22.179 5.222 7.966 6.901 18.149 3.679 27.895l-47.365 143.28c-4.377 13.24-16.487 21.753-29.657 22.179z" fill="#FFE77C" />
                            <path d="m229.2 446.81-59.427-158.47h291.03l-19.197 153.58c-1.348 10.789-10.519 18.884-21.392 18.884h-170.83c-8.986-1e-3 -17.03-5.575-20.186-13.99z" fill="#FFA669" />
                            <path d="m417.69 476.97c0 14.882-12.065 26.947-26.947 26.947s-26.947-12.065-26.947-26.947c0-14.883 12.065-26.947 26.947-26.947s26.947 12.065 26.947 26.947zm-123.96-26.947c-14.883 0-26.947 12.065-26.947 26.947s12.065 26.947 26.947 26.947 26.947-12.065 26.947-26.947-12.065-26.947-26.947-26.947zm167.07-172.46h-334.15c-11.906 0-21.558 9.651-21.558 21.558 0 11.906 9.651 21.558 21.558 21.558h334.15c11.906 0 21.558-9.651 21.558-21.558s-9.651-21.558-21.558-21.558z" fill="#E55D30" />
                            <path d="m148.21 299.12c0 11.906-9.651 21.558-21.558 21.558h-75.453c-11.906 0-21.558-9.651-21.558-21.558v-86.232h32.337c5.953 0 10.779 4.826 10.779 10.779v53.895h53.895c11.906 0 21.558 9.651 21.558 21.558z" fill="#F4C064" />
                            <path d="m188.63 212.88v37.008c0 4.466-3.62 8.084-8.084 8.084-4.465 0-8.084-3.618-8.084-8.084v-37.008c0-4.466 3.62-8.084 8.084-8.084s8.084 3.618 8.084 8.084zm-113.18-161.68c0-28.231 22.968-51.2 51.199-51.2s51.199 22.969 51.199 51.2-22.969 51.2-51.199 51.2-51.199-22.969-51.199-51.2zm16.167 0c0 19.317 15.715 35.032 35.03 35.032s35.031-15.715 35.031-35.032-15.714-35.032-35.029-35.032-35.032 15.715-35.032 35.032zm180.54 312.59v43.116c0 4.466 3.62 8.084 8.084 8.084 4.465 0 8.084-3.618 8.084-8.084v-43.116c0-4.466-3.62-8.084-8.084-8.084s-8.084 3.62-8.084 8.084zm168.58-134.24-10.234-3.384c-4.243-1.398-8.812 0.9-10.213 5.138-1.401 4.24 0.899 8.813 5.138 10.214l10.234 3.383c0.843 0.278 1.698 0.411 2.538 0.411 3.392 0 6.551-2.153 7.675-5.549 1.4-4.239-0.9-8.812-5.138-10.213zm-114.68 134.24v43.116c0 4.466 3.62 8.084 8.084 8.084s8.084-3.618 8.084-8.084v-43.116c0-4.466-3.62-8.084-8.084-8.084s-8.084 3.62-8.084 8.084zm61.977-8.084c-4.465 0-8.084 3.618-8.084 8.084v43.116c0 4.466 3.62 8.084 8.084 8.084 4.465 0 8.084-3.618 8.084-8.084v-43.116c0-4.464-3.62-8.084-8.084-8.084zm102.4-56.589c0 15.293-11.64 27.919-26.527 29.48l-14.29 114.32c-1.659 13.276-12.002 23.625-24.881 25.618 0.67 2.702 1.026 5.525 1.026 8.431 0 19.317-15.715 35.032-35.031 35.032s-35.03-15.715-35.03-35.032c0-2.781 0.326-5.489 0.942-8.084h-28.829c0.616 2.596 0.942 5.303 0.942 8.084 0 19.317-15.715 35.032-35.03 35.032s-35.03-15.715-35.03-35.032c0-2.781 0.326-5.489 0.942-8.084h-10.254c-12.287 0-23.44-7.73-27.754-19.234l-45.334-120.89h-6.523c-4.465 0-8.084-3.618-8.084-8.084s3.62-8.084 8.084-8.084h11.938c0.124-2e-3 0.249-2e-3 0.374 0h214.04c4.465 0 8.084 3.618 8.084 8.084s-3.62 8.084-8.084 8.084h-202.56l43.204 115.21c1.961 5.23 7.031 8.743 12.616 8.743h19.088c6.379-6.64 15.343-10.779 25.256-10.779s18.877 4.139 25.256 10.779h46.497c6.379-6.64 15.343-10.779 25.256-10.779s18.877 4.139 25.256 10.779h4.218c6.781 0 12.528-5.074 13.37-11.802l14.019-112.16h-19.141c-4.465 0-8.084-3.618-8.084-8.084s3.62-8.084 8.084-8.084h28.168c0.078-1e-3 0.155-1e-3 0.233 0h3.935c7.429 0 13.474-6.044 13.474-13.474s-6.044-13.474-13.474-13.474h-7.35c-0.125 2e-3 -0.249 2e-3 -0.374 0h-67.74c-0.125 2e-3 -0.249 2e-3 -0.374 0h-231.9c2.073 4.044 3.243 8.625 3.243 13.474 0 16.344-13.297 29.642-29.641 29.642h-56.589v153.08c0 7.455 5.821 13.727 12.975 13.982 3.712 0.103 7.2-1.207 9.853-3.768 2.656-2.563 4.119-6.007 4.119-9.697v-97.011c0-16.344 13.297-29.642 29.641-29.642s29.641 13.298 29.641 29.642v96.493c0 7.455 5.821 13.727 12.975 13.982 3.709 0.103 7.2-1.207 9.853-3.768 2.656-2.563 4.119-6.007 4.119-9.697v-64.674c0-4.466 3.62-8.084 8.084-8.084 4.465 0 8.084 3.618 8.084 8.084v64.674c0 8.118-3.218 15.693-9.059 21.33-5.578 5.383-12.846 8.312-20.566 8.313-0.362 0-0.725-8e-3 -1.09-0.021-16.02-0.57-28.569-13.809-28.569-30.14v-96.493c0-7.43-6.044-13.474-13.474-13.474-7.429 0-13.474 6.044-13.474 13.474v97.011c0 8.118-3.218 15.693-9.059 21.33-5.84 5.635-13.542 8.573-21.656 8.292-16.02-0.57-28.569-13.809-28.569-30.14v-153.08h-2.695c-16.344 0-29.641-13.298-29.641-29.642v-107.79c0-40.119 32.639-72.758 72.756-72.758h64.672c40.118 0 72.756 32.639 72.756 72.758v78.147h26.998c-0.034-0.786-0.052-1.572-0.052-2.357 0-29.531 24.025-53.557 53.556-53.557 2.059 0 4.122 0.121 6.177 0.36 11.452-18.814 32.201-30.675 54.456-30.675 11.335 0 22.393 3.025 32.062 8.66l6.686-20.23c6.996-21.161 29.905-32.684 51.064-25.691 10.251 3.389 18.569 10.568 23.42 20.212 4.853 9.645 5.658 20.602 2.269 30.854l-24.013 72.64c14.67 1.772 26.07 14.293 26.07 29.428zm-274.86-107.79c0-31.203-25.385-56.589-56.588-56.589h-64.672c-31.203 0-56.587 25.385-56.587 56.589v107.79c0 7.43 6.044 13.474 13.474 13.474h75.45c7.429 0 13.474-6.044 13.474-13.474s-6.044-13.474-13.474-13.474h-53.894c-4.465 0-8.084-3.618-8.084-8.084v-64.674c0-4.466 3.62-8.084 8.084-8.084s8.084 3.618 8.084 8.084v56.589h134.73v-78.147h-1e-3zm184.14 16.389c-7.861-5.385-17.213-8.304-26.834-8.304-18.157 0-34.972 10.584-42.84 26.965-1.645 3.424-5.451 5.239-9.148 4.368-2.849-0.674-5.756-1.015-8.643-1.015-20.616 0-37.389 16.773-37.389 37.389 0 0.786 0.024 1.574 0.073 2.357h104.36l20.417-61.76zm73.317-15.744c2.034-6.149 1.55-12.725-1.361-18.511-2.911-5.787-7.902-10.094-14.053-12.127-12.699-4.202-26.442 2.717-30.639 15.415l-10.075 30.476c-0.028 0.092-0.058 0.182-0.089 0.273l-20.488 61.976h51.086l25.619-77.502zm-160.45 285c0-10.401-8.461-18.863-18.863-18.863s-18.863 8.463-18.863 18.863 8.461 18.863 18.863 18.863 18.863-8.462 18.863-18.863zm97.009 0c0-10.401-8.461-18.863-18.863-18.863s-18.863 8.463-18.863 18.863 8.461 18.863 18.863 18.863 18.863-8.462 18.863-18.863zm41.299-278.12-10.234-3.384c-4.242-1.398-8.812 0.901-10.213 5.138-1.401 4.24 0.899 8.813 5.138 10.214l10.234 3.384c0.843 0.278 1.698 0.411 2.538 0.411 3.392 0 6.551-2.153 7.675-5.549 1.402-4.241-0.899-8.813-5.138-10.214z" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- <div class="mt-4">
                <div class="d-flex justify-content-between">
                    <h2 class="masbuscados">Más buscados</h2>
                    <h2 class="masbuscados">Más buscados</h2>
                    <h2 class="mejorpuntuacion">Mejor puntuación</h2>
                    <h2 class="mejorpuntuacion">Mejor puntuación</h2>
                </div>
            </div> -->
        </div>
        <!-- end categories -->

        <!-- business -->
        <div class="mt-4">
            <div class="d-flex justify-content-between mb-3">
                <h4>Negocios</h4>
                <a href="#" class="align-self-center text-muted">Ver todos</a>
            </div>
            <!-- row 1 business -->
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta1x1.png" alt="Tarjeta1" />
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta2x1.png" alt="Tarjeta2" />
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta3x1.png" alt="Tarjeta3" />
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta1x1.png" alt="Tarjeta1" />
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta2x1.png" alt="Tarjeta2" />
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <img src="assets/images/tarjeta3x1.png" alt="Tarjeta3">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- row 2 business -->
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta1x1.png" alt="Tarjeta1">
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta2x1.png" alt="Tarjeta2">
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <img src="assets/images/tarjeta3x1.png" alt="Tarjeta3">
                        <!-- poner las 2 tarjetas y intercambiar la prop hidden entre ellas de acuerdo al estatus -->
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta1x1.png" alt="Tarjeta1">
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <img src="assets/images/tarjeta2x1.png" alt="Tarjeta2">
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card mb-4 shadow-lg">
                        <img src="assets/images/tarjeta3x1.png" alt="Tarjeta3">
                        <!-- poner las 2 tarjetas y intercambiar la prop hidden entre ellas de acuerdo al estatus -->
                        <div class="badge-star">
                            <span class="stars"><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                        <div class="card-body">
                            <h6>Company Name</h6>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Ver</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-muted"><i class="fas fa-circle" style="color: green;"></i> Abierto</small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end business -->

        <!-- slider publicitario -->
        <!-- <div class="mt-4">
            <h4>Espacio publicitario</h4>
            <hr>
            <div class="container">
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
        </div> -->
        <!-- slider publicitario -->

        <!-- featured products -->
        <div class="mt-4">
            <div class="d-flex justify-content-between mb-3">
                <h4>Productos destacados</h4>
                <a href="#" class="text-muted align-self-center">Ver más</a>
            </div>
            <div class="card-group owl-carousel featured-products">
                <div class="card border-0">
                    <img src="assets/images/publisher/publicidad1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text small-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text text-muted small-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="assets/images/publisher/publicidad1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text small-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text text-muted small-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="assets/images/publisher/publicidad1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text small-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text text-muted small-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Last button -->
        <!-- <div class="container">
            <div class="pb-md-4 mx-auto row justify-content-center">
                <button class="btn btn-color2 sombra btn-lg" id="btnMoreProducts">Ver más</button>
            </div>
        </div> -->
        <!-- end last button -->
    </div>
    <!-- end main container -->

    <!-- footer -->
    <div class="fondofooter container-fluid mt-4">
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
    <!-- end footer -->

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <script>
        window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')
    </script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/holder.js"></script> -->

    <!-- Wow JS -->
    <script src="assets/plugins/wow/wow.min.js"></script>
    <!-- Selectize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!--Scripts propios  -->
    <script type="text/javascript" src="./controller/jscontroller/inicioController.js"></script>
    <!-- Fin scripts propios -->

    <script>
        $(document).ready(() => {

            $('.home-categories').owlCarousel({
                loop: false,
                margin: 10,
                responsiveClass: true,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 2
                    },
                    550: {
                        items: 3,
                    },
                    750: {
                        items: 4,
                    },
                    900: {
                        items: 5,
                    },
                }
            })

            $('.featured-products').owlCarousel({
                loop: true,
                margin: 12,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                center: true,
                dots: false,
                nav: false,
                // responsive: {
                //     0: {
                //         items: 2
                //     },
                //     550: {
                //         items: 3,
                //     },
                //     750: {
                //         items: 4,
                //     },
                //     900: {
                //         items: 5,
                //     },
                // }
            })
        })

        // Holder.addTheme('thumb', {
        //     bg: '#55595c',
        //     fg: '#eceeef',
        //     text: 'Thumbnail'
        // });
    </script>
</body>

</html>