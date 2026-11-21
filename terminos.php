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
                                <li><a class="dropdown-item" href="colab.php">Nuestra Mision</a></li>
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
        <div class="container-fluid p-5 bg-warning text-white text-center">
            <h1>Terminos y Condiciones</h1>
            <p>Inserte texto.</p> 
        </div> 
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 text-center" style="color:white"><strong>MiEmpresa@2026</strong></div>
                <div class="col-4"></div>
            </div>
        </div>  
    </body>
</html>