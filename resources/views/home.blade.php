<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio-2-Segundo-Computo</title>
    <link rel="icon" href="{{ asset('img/icon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('home.css') }}">

    
</head>

<body>
   <!-- Navbar -->
  <div class="container p-2 mt-4">
      <nav class="navbar bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Indice</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">about</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
      </nav>
    </div>
    <!-- fin del Navbar -->
    
    @if (Request::is('/'))
    <div class="fondo">
    <!-- Contenedor principal -->
    <div class="container mt-5">
        <!-- Contenido -->
        <div class="container w-25 border p-4 mt-4"> 
            Empleos UGB
        </div>
        
        <div class="container w-25 border p-4 mt-4"> 
            <p>
              ¿Cuál es uno de los principales problemas de los estudiantes egresados de la Universidad? Para nosotros es la falta
              de oportunidades en el mercado laboral. Muchos hemos escuchado, o conocemos casos de jovenes que terminan su carrera
              pero que luego no son capaces de ejercer su profesión, en ocasiones hasta dentro de unos cuantos años o en casos extremos
              tal vez nunca.
            </p>

            <p>
              En vista de la problemática hemos decidido crear un espacio que sirva como puente entre los estudiantes de la Universidad Gerardo Barrios
              y el mercado laboral. Los estudiantes tendrán la oportunidad de mostrar sus capacidades a posibles empleadores de su Área, y al mismo tiempo
              los empleadores tendrán un espacio para buscar nuevos prospectos capacitados para ejercer sus labores.
            </p>

            <p> 
            Esperamos que el proyecto alcance a cubrir todas las facultades, carreras y modalidades de la Universidad Gerardo Barrios, sin embargo, por el 
            momento estará focalizado en la carrera de ingeniería en sistemas y su posible mercado laboral.
            </p>
        </div>
      </div>
    </div>
        @endif
    
    
    @yield('content')
    <!-- Incluye el contenido dinámico aquí -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
