<?php
    function head()
    {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9fd6213240.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lato">
    <style>
      body{
            font-family: 'Lucida Bright';
        }
    </style>

    <title>Blog X</title>
</head>
<body>
    <div id="app" class="container-fluid p-0">
        <header class="row m-0 bg-light">
            <div class="col-9">
                <h1 class="ml-3 mt-2">
                    Blog UdeC
                </h1>
            </div>
            <div class="col-3">
                <img src="/resources/img/udec.png"  style="height:50px" alt="Logo UdeC">
            </div>  
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Ultimas Publicaciones</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Nueva Publicacion</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" id="buscar-palabra" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="button" onclick="app.buscarpalabra()"><i class="bi bi-search"></i></button>
                </form>
                </div>
    </div>
</nav>
    </div>
<?php 
    }

    function foot(){
?>
<script src="/resources/js/bootstrap.bundle.min.js"></script>  
<script src="/resources/js/jquery.min.js"></script>

</body>
</html>
<?php } 