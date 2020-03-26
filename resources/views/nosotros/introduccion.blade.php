
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

<!-- Codigo para la informacion de introduccion-->


<br>
<div align="center" style="margin-top=50px;">
  <div class="card mb-3" style="max-width: 1200px; max-height: 200px; ">
  <div class="row no-gutters">
  <div class="col-md-2">
    
      <img src="imagenes/introduccion.jpg" class="card-img" alt="..." style="margin-top: 10px; max-width: 95%;">
    </div>
  <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title">Introducción</h5>
        <p class="card-text" style="font-size: 12px" align="justify">Hoy en día, existe una gran oportunidad para el aumento de las energías alternativas y en específico para las tecnologías del hidrógeno en México. La investigación que a lo largo de los años se ha llevado a cabo en nuestro país relacionada a las tecnologías del hidrógeno está actualmente en condiciones de poderse aplicar en las diversas necesidades energéticas del país. La energía es el motor del desarrollo económico y social del mundo, por lo tanto, el suministro continuo de todas las formas de energía es de importancia crucial para todas las naciones, y México como país no es la excepción. El hidrógeno se ha convertido en uno de los portadores de energía alternativa más prometedores del país, con la finalidad de descentralizar la actual producción de energía a partir del petróleo.</p>
      </div>
    </div>
  </div>
</div>
<br>

<div class="card mb-3" style="max-width: 1200px; max-height: 350px;">
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
      <img src="imagenes/historia.jpg" class="card-img" alt="..." style="max-height: 100%; max-width: 95%;">
    </div>
  </div>
</div>
</div>

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