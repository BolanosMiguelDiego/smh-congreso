
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

  #int{
    max-width: 1200px; 
    height: 200px; 
  }
  #his{
    max-width: 1200px; 
    height: 350px;
  }

  @media (max-width: 767px) {
    #introduccion{
      width:20%;
    }
    #int{
      height:340px;
    }
    #historia{
      width:40%;
    }
    #his{
      height:800px;
    }
  }
  @media (max-width: 520px) {
    #introduccion{
      width:20%;
    }
    #int{
      height:360px;
    }
    #historia{
      width:40%;
    }

    
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

<!-- Codigo para la informacion de introduccion-->


<br>
<div align="center" style="margin-top=50px;">
  <div id="int" class="card mb-3">
  <div class="row no-gutters" >
  <div class="col-md-2">
    
      <img id="introduccion" src="imagenes/introduccion.jpg" class="card-img" alt="..." style="margin-top: 10px; max-width: 95%;">
    </div>
  <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title">Introducción</h5>
        <p class="card-text" style="font-size: 12px" align="justify">Hoy en día, existe una gran oportunidad para el aumento de las energías alternativas y en específico para las tecnologías del hidrógeno en México. La investigación que a lo largo de los años se ha llevado a cabo en nuestro país relacionada a las tecnologías del hidrógeno está actualmente en condiciones de poderse aplicar en las diversas necesidades energéticas del país. La energía es el motor del desarrollo económico y social del mundo, por lo tanto, el suministro continuo de todas las formas de energía es de importancia crucial para todas las naciones, y México como país no es la excepción. El hidrógeno se ha convertido en uno de los portadores de energía alternativa más prometedores del país, con la finalidad de descentralizar la actual producción de energía a partir del petróleo.</p>
      </div>
    </div>
  </div>
</div>


<div id="his"class="card mb-3" >
  <div class="row no-gutters">
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title">Nuestra historia</h5>
        <p class="card-text" style="font-size: 12px" align="justify">La Sociedad Mexicana del Hidrógeno (SMH) fue fundada en 1999 por un entusiasta grupo de investigadores, académicos y empresarios, con el objetivo de promover la investigación, el desarrollo, la formación de recursos humanos, así como el establecimiento de normas de seguridad para el uso del hidrógeno como energía limpia. Además, sirve como una conexión entre la comunidad científica, la industria y el gobierno para la promoción y difusión de las Tecnologías del Hidrógeno y para participar en proyectos relacionados con el hidrógeno y sus aplicaciones de celdas de combustible. Desde su fundación, nuestra Sociedad ha organizado 14 encuentros nacionales e internacionales, siempre con la participación de reconocidos expertos internacionales en el campo del hidrógeno. En el Primer Congreso SMH se realizó en 1999.</p>
        <p class="card-text" style="font-size: 12px" align="justify">En nuestro último XIV Congreso Internacional de la SMH (celebrado en Querétaro 2016) se presentaron 7 conferencias plenarias, 82 presentaciones orales y 64 trabajos como carteles, sumando un total de 153 trabajos, estos números nos dan hoy una idea clara del progreso, la importancia y el crecimiento del Congreso Internacional de la SMH.</p>
        <p class="card-text" style="font-size: 12px" align="justify">Además, la SMH ha organizado 9 cursos nacionales sobre tecnologías del hidrógeno, 6 foros de discusión sobre la inserción del hidrógeno en el sector energético mexicano, 4 concursos para estudiantes sobre prototipos de energías alternativas, 6 talleres teórico-prácticos sobre tecnologías de hidrógeno y sistemas híbridos con: integración de sistemas de energía renovable-hidrógeno, transferencia de tecnología entre la investigación-industria y sistemas de producción y almacenamiento de hidrógeno.</p>
      </div>
    </div>
    <div class="col-md-2">
    <br>
    <br>
    <br>
      <img id="historia" src="imagenes/historia.jpg" class="card-img" alt="..." style="max-height: 100%; max-width: 95%;">
    </div>
  </div>
</div>
</div>

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
    <br>
    <h6  align="center">Información Sede Congreso</h6>
    <p></p>
    <p  align="center" style="font-size:10px"><img src="imagenes/ito.png" alt="" style="width:50px; heigth:50px;"></p>
    <p  align="center"><a href="javascript:window.open('http://www.itoaxaca.edu.mx/',);void 0" style="color:black">www.itoaxaca.edu.mx</a></p>
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