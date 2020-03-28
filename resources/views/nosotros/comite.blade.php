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
  /*** 1090 */
  @media (max-width: 1000px) {
      h5{
        font-size:12px;
        
      }
      h6{
        font-size:12px;
      }
      p{
        font-size:10px;
      }
      .btn{
        font-size:10px;
      }
  }
  @media (max-width: 575px) {
    h5{
        font-size:20px;
        
      }
      h6{
        font-size:15px;
      }
      p{
        font-size:12px;
      }
      .btn{
        font-size:15px;
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
<br>

<!-- Codigo principal-->

<!-- Codigo para el comite academico-->
<!-- Comite academico de la SMH -->
<div align="center" style="margin-top: 20px;">
  <div class="row" style="width: 98%;">
    <div class="col-sm-3">
      <div align="center">
        <div id="presi" class="card" style="">
          <img id=" presidenta" src="../imagenes/presidenta.png" class="card-img-top" alt="..." style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Presidenta</h5>
           <h6 class="card-title">Dra. Beatriz Ruiz Camacho</h6>
           <p class="card-text"><small class="text-muted">beatrizruizcamacho@gmail.com</small></p>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal1">Información</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div align="center">
        <div class="card" style="">
          <img src="../imagenes/vice.jpg" class="card-img-top" alt="..." style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Vice Presidente</h5>
           <h6 class="card-title">Dr. Guadalupe Ramos-Sánchez</h6>
           <p class="card-text"><small class="text-muted">gramossa@conacyt.mx</small></p>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal2">Información</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div align="center">
        <div class="card" style="">
          <img src="../imagenes/tesorero.jpg" class="card-img-top" alt="..." style="height: 200px;">
          
          <div class="card-body">
          <h5 class="card-title">Tesorero</h5>
           <h6 class="card-title">Dr. Gliserio R. Barbosa Pool</h6>
           <p class="card-text"><small class="text-muted">romeli@uqroo.edu.mx</small></p>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal3">Información</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div align="center">
        <div class="card" style="">
          <img src="../imagenes/secretario.jpg" class="card-img-top" alt="..." style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Secretario</h5>
           <h6 class="card-title">Ing. Juan A. Gutiérrez Rodríguez</h6>
           <p class="card-text"><small class="text-muted">info@smhidrogeno.net</small></p>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal4">Información</button>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- Button trigger modal  -->
<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Presidenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <img src="../imagenes/presidenta.png" class="card-img-top" alt="..." style="height: 200px;">
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Dra. Beatriz Ruiz Camacho</h6>
            <p class="card-text" align="center"><small class="text-muted">beatrizruizcamacho@gmail.com</small></p>
              <div aling="justify">
              <p class="card-text" style="font-size: 13px" align="justify">Obtuvo el título de Ingeniero Químico y Maestra en Ciencias en Ingeniería de Materiales por la Universidad Autónoma Metropolitana – Azcapotzalco. Obtuvo su Doctorado en Ciencias en Ingeniería Química en el Instituto Politécnico Nacional en colaboración con la Universidad de Poitiers, Francia. Es miembro del Sistema Nacional de Investigadores (SIN nivel 1).</p>
              <p class="card-text" style="font-size: 13px" align="justify">La Dra. Ruiz realiza investigaciones en el desarrollo de nuevos electrodos para celdas de combustible, realiza la síntesis, caracterización y evaluación electroquímica de estos materiales.</p>
              <p class="card-text" style="font-size: 13px" align="justify">Ha participado y dirigido proyectos de investigación de varias organizaciones (ICyTDF, CONCYTEG y PROMEP) relacionadas con la ciencia de los nanomateriales y sus aplicaciones en energía. Ha publicado artículos en revistas internacionales (JCR) con alto factor de impacto. Sus áreas de investigación son: catálisis y materiales, energía limpia, pilas de combustible y electroquímica.</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Vice Presidente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <img src="../imagenes/vice.jpg" class="card-img-top" alt="..." style="height: 200px;">
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Dr. Guadalupe Ramos-Sánchez</h6>
            <p class="card-text" align="center"><small class="text-muted">gramossa@conacyt.mx</small></p>
              <div aling="justify">
              <p class="card-text" style="font-size: 12px" align="justify">Es Ingeniero Químico por la Universidad Autónoma Metopolitana – Azcapotzalco. Realizó sus estudios doctorales en el Centro de investigación y de Estudios Avanzados del IPN, desarrollando electrocatalizadores con aplicaciones en celdas de combustible. Posteriormente, realizó una estancia postdoctoral en la universidad Texas A&M realizando estudios sobre el modelado a primeros principios de materiales y procesos relacionados con energías limpias y transformaciones electroquímicas. Ha recibido importantes distinciones de organizaciones Nacionales e Internacionales y actualmente es arbitro de las revistas International Journal of Hydrogen Energy, Electrochimica Acta, Journal of the Taiwan Institute of Chemical Engineers and Journal of Brazilian Chemical Society. Ha publicado alrededor de 40 artículos científicos y tiene alrededor de 570 citas y un índice h=12.</p>
              <p class="card-text" style="font-size: 12px" align="justify">Actualmente, es catedrático Conacyt comisionado a la Universidad Autónoma Metropolitana – Iztapalapa, donde realiza investigación relacionada al desarrollo de materiales y procesos de conversión de energía por métodos electroquímicos, estudio de reacciones catalíticas y electrocatalíticas a nivel molecular y desarrollo de prototipos de baterías y celdas de combustible. Ha dirigido proyectos de licenciatura, maestría y doctorado, actualmente pertenece al Sistema Nacional de investigadores (SNI nivel I)</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- Modal -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Tesorero</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <img src="../imagenes/tesorero.jpg" class="card-img-top" alt="..." style="height: 200px;">
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Dr. Gliserio Romeli Barbosa Pool</h6>
            <p class="card-text" align="center"><small class="text-muted">romeli@uqroo.edu.mx</small></p>
              <div aling="justify">
              <p class="card-text" style="font-size: 14px" align="justify">Doctor en Ingeniería por el Centro de Investigación en Energía (CIE-UANM-2012), Maestro en Ingeniería por el mismo centro (2007) e Ingeniero en Sistemas de Energía por la Universidad de Quintana Roo (UQROO-2005). Actualmente es profesor de la Universidad de Quintana Roo. Sus áreas de interés son: diseño de electrodos de celdas de combustible, desarrollo de dispositivos para la generación de energía con alta densidad de potencia y diseño y simulación de sistemas
híbridos.</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Secretario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <img src="../imagenes/secretario.jpg" class="card-img-top" alt="..." style="height: 200px;">
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Ing. Juan Antonio Gutiérrez Rodríguez</h6>
            <p class="card-text" align="center"><small class="text-muted">info@smhidrogeno.net</small></p>
              <div aling="justify">
              <p class="card-text" style="font-size: 12px" align="justify">Juan Antonio es Desarrollador de Negocios y co-fundador de Hazwo SA de CV, empresa mexicana especializada en proveer soluciones de almacenamiento y gestión de la energía. Estudió la licenciatura en Ingeniería Química en la Universidad Nacional Autónoma de México, donde fue presidente del International Association for Hydrogen Energy – UNAM Student Chapter. Ha tomado múltiples cursos de actualización en torno a las tecnologías de hidrógeno entre los que destaca el de formación como Técnico Especialista en Vehículos de Celdas de Combustión del programa KnowHy de la Comisión Europea para el desarrollo de Celdas de Combustible e Hydrógeno (FCH-JU).</p>
              <p class="card-text" style="font-size: 12px" align="justify">Desde sus primeros años en el sector laboral, Juan Antonio ha participado en compañías relacionadas con la cadena de valor del hidrógeno tales como Leman Instruments donde fungió como especialista de producto de generadores de hidrógeno de alta pureza para aplicaciones analíticas.</p>
              <p class="card-text" style="font-size: 12px" align="justify">Juan Antonio es miembro de la Sociedad Mexicana del Hidrógeno desde 2014 y del California Hydrogen Business Council desde 2017 y participa activamente en foros nacionales e internacionales de discusión sobre el desarrollo de las tecnologías de hidrógeno. Durante 2018 fue parte del comité gestor de la participación de la Sociedad Mexicana del Hidrógeno en la Hannover Messe dentro del Pabellón Nacional de Energía de México como país invitado. </p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->

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