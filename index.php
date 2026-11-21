<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Primera pagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="container-fluid"> 
                <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="colab.php">Quienes Somos</a></li>
                                <li><a class="dropdown-item" href="colab.php">Nuestra mision</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contacto.php">Contacto</a>
                        </li>                                                 
                    </ul>
                </div>  
                <button type="button" class="btn btn-danger text-white shadow" data-bs-toggle="modal" data-bs-target="#myModal">Acceder</button>               
            </div>
        </nav>
        <div class="container my-5">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/images.jpeg" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                    <img src="img/4194jnB9iJL._AC_US750_.jpg" alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                    <img src="img/images (1).jpeg" alt="New York" class="d-block w-100">
                    </div>
                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <!-- Container -->
        <div class="row justify-content-center my-5 gap-4">
            <div class="col-6 col-md-10 col-lg-3">
                <div class="p-5 bg-white text-dark rounded shadow">
                    <h1>Quienes somos?</h1>
                    <a>Somos... inserte texto</a><br>
                    <a href="colab.php">Mas Informacion+</a><br>
                </div>
            </div>
            <div class="col-6 col-md-10 col-lg-3">
                <div class="p-5 bg-white text-dark rounded shadow">
                    <h1>Mision</h1>
                    <a>Nuestra... inserte texto</a><br>
                    <a href="colab.php">Mas Informacion+</a><br>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-1 gap-4">
            <div class="col-6 col-md-10 col-lg-3">
                <div class="p-5 bg-white text-dark rounded shadow">
                    <h1>Servicios</h1>
                    <a>Tenemos... inserte texto</a><br>
                    <a href="servicios.php">Mas Informacion+</a><br>
                </div>
            </div>
            <div class="col-6 col-md-10 col-lg-3">
                <div class="p-5 bg-white text-dark rounded shadow">
                    <h1>Contacto</h1>
                    <a>Contactanos al... inserte texto</a><br>
                    <a href="contacto.php">Mas Informacion+</a><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="row bg-secondary p-5">
            <div class="col-12 col-md-4">
                <h1>Enlaces rapidos</h1>
                <a href="terminos.php">Terminos y Condiciones</a><br><br>
                <a href="preguntas.php">Preguntas Frecuentes</a><br><br>
                <a href="cambios.php">Cambios y Devoluciones</a><br><br>
            </div>
            <div class="col-12 col-md-4">
                <h1>Sucursales y horario</h1>
            </div>
            <div class="col-12 col-md-4">
                <h1>Contacto</h1>
                <a>WhatsApp: +56 9 1234 5678</a>
                <h1>Redes Sociales</h1>
                <i class="fa fa-instagram fa-3x"></i>
                <i class="fa fa-facebook-official fa-3x"></i>

            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 text-center" style="color:white"><strong>MiEmpresa@2026</strong></div>
                <div class="col-4"></div>
            </div>
        </div>
        <!-- Modal -->     
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Autenticación</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="empresa.php">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>