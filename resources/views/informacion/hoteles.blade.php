
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white">
    <span class="navbar-toggler-icon" style=""></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{ url('/')}}" style="color: white; font-size: 25px; font-weight: bold;">Hidrogeno.org.mx.</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Nosotros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/introduccion')}}">Introducción</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/mvo')}}">Objetivo, Mision y Vision </a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/comite')}}">Comite Directivo</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/contacto')}}">Contacto</a>
        </div>
      </li>
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Información
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/costos')}}">Costos</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/hoteles')}}">Hoteles</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/patrocinadores')}}">Patrocinadores</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/noticias')}}">Noticias y Eventos</a>
        </div>
      </li>
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Congresos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/biografia')}}">Biografias</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/memorias')}}">Memorias</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/minutas')}}">Minutas</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/congresos_anteriores')}}">Congresos Anteriores</a>
        </div>
      </li>
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Eventos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/cursos')}}">Cursos</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/ponencias')}}">Ponencias</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/talleres')}}">Talleres</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/actividades')}}">Actividades</a>
        </div>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-light">Iniciar Session</button>
  </div>
</nav>


<!-- Codigo principal-->

<!-- Codigo para el encabezado de la pagina-->

<!-- Costos -->
<br>
<div align="center">
  <div class="card" style="width: 98%">
  <div class="card-header">
    <h4>Hoteles</h4>
  </div>
  <div align="center" style="margin-top: 20px;">
    <div class="row" style="width: 98%;">
      <div class="col-sm-4">
        <div class="card" style="width: 100%;">
            <img src="imagenes/hoteles/olivos.png" class="card-img-top" alt="..." style="width: 50%; height=50%;">
            <div class="card-body">
                <h5 class="card-title">Hotel los olivos spa</h5>
                <p class="card-text" style="font-size: 12px" align="justify">El Hotel Los Olivos se encuentra en Oaxaca, entre grandes jardines tropicales, y ofrece una gran piscina al aire libre y un spa. Las habitaciones, tranquilas y sencillas, tienen TV por cable, baño privado y ventilador.</p>
                <p class="card-text" style="font-size: 12px" align="justify">El Hotel Los Olivos Spa está justo enfrente del Instituto Tecnológico de Oaxaca y a solo 200 metros de la autopista internacional.</p>
                <div align="right">
                <a href="#" class="btn btn-primary">Mas información</a>
                </div>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="card" style="width: 100%;">
            <img src="imagenes/hoteles/victoria.png" class="card-img-top" alt="..." style="width: 50%; height: 105px;">
            <div class="card-body">
                <h5 class="card-title">Hotel los olivos spa</h5>
                <p class="card-text" style="font-size: 12px" align="justify">El Hotel Los Olivos se encuentra en Oaxaca, entre grandes jardines tropicales, y ofrece una gran piscina al aire libre y un spa. Las habitaciones, tranquilas y sencillas, tienen TV por cable, baño privado y ventilador.</p>
                <p class="card-text" style="font-size: 12px" align="justify">El Hotel Los Olivos Spa está justo enfrente del Instituto Tecnológico de Oaxaca y a solo 200 metros de la autopista internacional.</p>
                <div align="right">
                <a href="#" class="btn btn-primary">Mas información</a>
                </div>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="card" style="width: 100%;">
            <img src="imagenes/hoteles/fortin.png" class="card-img-top" alt="..." style="width: 70%; height=155px;">
            <div class="card-body">
                <h5 class="card-title">Hotel los olivos spa</h5>
                <p class="card-text" style="font-size: 12px" align="justify">El Hotel Los Olivos se encuentra en Oaxaca, entre grandes jardines tropicales, y ofrece una gran piscina al aire libre y un spa. Las habitaciones, tranquilas y sencillas, tienen TV por cable, baño privado y ventilador.</p>
                <p class="card-text" style="font-size: 12px" align="justify">El Hotel Los Olivos Spa está justo enfrente del Instituto Tecnológico de Oaxaca y a solo 200 metros de la autopista internacional.</p>
                <div align="right">
                <a href="#" class="btn btn-primary">Mas información</a>
                </div>
            </div>
        </div>
      </div>
      
    </div>
    <br>
  </div>
</div>
</div>

<br>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmm    pie de pagina mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<div class="card text-white bg-primary mb-3" style="max-width: 100%; height: 112px">
  <div class="card-body">
    <h5 class="card-title">Informacion</h5>
    <table width="100%">
      <tr>
          <td><p class="card-text">Telefono: +52 (473) 7320006</p></td>  
          <td><p class="card-text">Correo: contacto@smhidrogeno.net</p></td>
          <td><p class="card-text"><p>Ubicacion:  Noria Alta s/n Noria Alta, 
          Guanajuato, Gto. Mexico. 
          C. P. 36050</p></td> 
          <td><a href="http://www.itoaxaca.edu.mx/" style="color:white"><p>www.itoaxaca.edu.mx</p></a></td>  
      </tr>
    </table>
    
  </div>
</div>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>