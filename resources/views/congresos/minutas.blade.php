
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    .footer-copyright{
    background-color: #2FACFF;
    color:white;
  }
    </style>
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
        <a class="dropdown-item" href="{{ url('/talleres')}}">Temas</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/ponencias')}}">Ponencias</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/cursos')}}">Cursos</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/actividades')}}">Actividades</a>
          <div class="dropdown-divider" ></div>
          <a class="dropdown-item" href="{{ url('/sede')}}">Sede</a>
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
      <h4>Minutas</h4>
    </div>
    <div align="left" style="margin-top: 20px; margin-left: 40px;">
      <div class="row" style="width: 98%;">
        <!-- noticia-->
        <div class="colm-md-9">
        <div class="card mb-3" style="width: 80%;">
          <div class="row no-gutters">
          <div class="colm-md-1">
            <p style="font-size: 50px"><svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg></p>
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2018/01/MinutaAsamblea2017.pdf',);void 0"><h5 class="card-title" style="color: black">Minuta de la Reunión de Asamblea de la Sociedad de Mexicana del Hidrógeno.</h5></a>
                <p class="card-text" style="font-size: 12px" align="justify">21 de septiembre de 2017 en Guanajuato, México.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="colm-md-3">
      </div>
        <!-- -->
      </div>
      <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm row mmmmmmmmmmmmmmmm-->
      
    <div align="left" style="margin-top: 20px; ">
      <div class="row" style="width: 98%;">
        <!-- noticia-->
        <div class="colm-md-9">
        <div class="card mb-3" style="width: 80%;">
          <div class="row no-gutters">
            <div class="colm-md-1">
            <p style="font-size: 50px"><svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg></p>
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <a href="http://hidrogeno.org.mx/wp-content/uploads/2018/01/MinutaAsamblea2018.pdf',);void 0"><h5 class="card-title" style="color: black">Minuta de la Reunión de Asamblea de la Sociedad de Mexicana del Hidrógeno.</h5></a>
                
                <p class="card-text" style="font-size: 12px" align="justify">21 de septiembre de 2017 en Guanajuato, México.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="colm-md-3">
      </div>
        <!-- -->
      </div>
      <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->

      <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
    </div>
  </div>
</div>
<br>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmm    pie de pagina mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Footer -->
<div class="dropdown-divider" ></div>
<footer class="footer font-small ">

  <!-- Copyright -->
  
  <div class="row" style="margin-top:10px;">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-3">
    <br>
    <h6  align="center">Contacto</h6>
    <p></p>
    <p  align="center" style="font-size:10px"><img src="imagenes/iconos/telefono.png" alt="" style="width:10px; heigth:10px;">
    +52 (473) 7320006</p>
    <p  align="center" style="font-size:10px"><img src="imagenes/iconos/email.png" alt="" style="width:20px; heigth:20px;">
    Correo: contacto@smhidrogeno.net</p>
    <p  align="center" style="font-size:10px"><img src="imagenes/iconos/ubicacion.png" alt="" style="width:20px; heigth:20px;">
    Noria Alta s/n Noria Alta, 
          Guanajuato, Gto. Mexico. C. P. 36050</p>
    </div>
    <div class="col-sm-4">
    <p align="center"><img src="imagenes/smh.png" alt=" " class="img-responsive" width="120" heigth="100" align="center"></p>
    <h6  align="center" >Siguenos en nuestras redes sociales</h6>
    <p align="center">
    <img src="imagenes/iconos/facebook.png" alt="" style="width:40px; heigth:40px;">
    <img src="imagenes/iconos/twitter.png" alt="" style="width:40px; heigth:40px;">
    <img src="imagenes/iconos/instagram.png" alt="" style="width:50px; heigth:50px;">
    <img src="imagenes/iconos/youtube.png" alt="" style="width:40px; heigth:40px;">
    </p>
    </div>
    <div class="col-sm-3">
    <br>

    <h6  align="center">Información Sede Congreso</h6>
    <p></p>
    <p  align="center" style="font-size:10px"><img src="imagenes/ito.png" alt="" style="width:50px; heigth:50px;"></p>
    <p  align="center"><a href="javascript:window.open('http://www.itoaxaca.edu.mx/',);void 0" style="color:black">www.itoaxaca.edu.mx</a></p>
    <p align="center" style="font-size:12px">congresoxxsmh@gmail.com</p>
    </div>
    <div class="col-sm-1">
    </div>
  </div>
  <div class="footer-copyright text-center py-3" >© 2020 Copyright:
    <a href=""> <p style="color:white"> Sociedad Mexicana del Hidrogeno </p></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>