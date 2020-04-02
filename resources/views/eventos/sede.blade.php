
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
      <h4>Información Congreso XX</h4>
    </div>
  </div>
</div>
<br>

<div class="container-fluid" style="width: 80%">
  <h5>Institución</h5>
  <p><img src="imagenes/ito.png" alt="" style="width:50px; heigth:50px;">       Tecnológico Nacional de México Campus Oaxaca</p>
  <h5>Sitio Web</h5>
  <p><a href="javascript:window.open('http://www.itoaxaca.edu.mx/',);void 0" style="color:black">www.itoaxaca.edu.mx</a></p>
    
  <h5>Ubicación</h5>
  <!--
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7627.788149864026!2d-96.74875169992444!3d17.077833193557247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c72206aa56bc19%3A0x134879e849e14789!2sInstituto%20Tecnol%C3%B3gico%20de%20Oaxaca!5e0!3m2!1ses!2smx!4v1585792266832!5m2!1ses!2smx" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  -->
  <p>Como llegar desde el areopuerto internacional de xoxocotlan</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d61035.025488748!2d-96.76063741348915!3d17.0389137516742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x85c722cf47ca76f7%3A0x8b5c2895ebdb39fc!2sAsur%20Aeropuerto%20Del%20Sureste%2C%20Santa%20Cruz%20Xoxocotl%C3%A1n%2C%20Oax.!3m2!1d17.0008786!2d-96.7218893!4m5!1s0x85c72206aa56bc19%3A0x134879e849e14789!2sInstituto%20Tecnol%C3%B3gico%20de%20Oaxaca%2C%20Francisco%20I.%20Madero%2C%20Instituto%20Tecnologico%20de%20Oaxaca%2C%2068030%20Oaxaca%20de%20Ju%C3%A1rez%2C%20Oax.!3m2!1d17.0778324!2d-96.74437479999999!5e0!3m2!1ses!2smx!4v1585792856861!5m2!1ses!2smx" width="1000" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<br>
<br>
  <h5>Lugares Turisticos en la Ciudad de Oaxaca</h5>
  <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal" >Centro de Oaxaca</button>
  <br>
  <br>
  <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal2" >Zona arqueológica Monte Albán</button>
  <br>
  <br>
  <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal3" >Cascadas petrificadas Hierve el agua</button>
  <br>
  <br>
  <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal4" >Zona arqueológica Mitla</button>
  <br>
  <br>
  <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal5" >Árbol del Tule</button>

</div>
         
<br>
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Centro de Oaxaca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" style="width:495px; height:300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro1.jpg" alt="First slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro2.jpg" alt="Second slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro3.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro4.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro5.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro6.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/centro/centro7.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <!-- -->
          <p style="font-size:12px;">En el centro de Oaxaca podrá visitar el Templo de Santo Domingo, El Centro Histórico, El teatro Macedonio Alcalá, Andador turístico, diferentes Museos, como también los diferentes mercados con su extensa gastronomia y mezcales.</p>
          
        </div>
      </div>
      <div class="modal-footer">
        <a href="javascript:window.open('https://www.tripadvisor.com.mx/Attraction_Review-g150801-d153226-Reviews-Andador_de_Macedonia_Alcala-Oaxaca_Southern_Mexico.html',);void 0"><button type="button" class="btn btn-outline-info">Más Información</button></a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->

<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Zona arqueológica Monte Albán</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- -->
          <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" style="width:495px; height:300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/turismo/monte/monte1.jpg" alt="First slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/monte/monte2.jpg" alt="Second slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/monte/monte3.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/monte/monte4.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/monte/monte5.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/monte/monte6.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <!-- -->

          <p style="font-size:10px">Monte Albán es la zona arqueoloógica más importante de la entidad oaxaqueña, de importancia regional única por el control religioso, político y económico que ejerció el estado zapoteco sobre la población del Valle de Oaxaca durante más de trece siglos. Ha sido nombrada por la UNESCO Patrimonio Cultural de la Humanidad junto con la ciudad de Oaxaca el 11 de diciembre de 1987.</p>
          <p style="font-size:10px"><label for="" style="width:bold;">Dirección: </label> Carretera a Monte Albán s/n, San Pedro Ixtlahuaca, Oaxaca, Oax.</p>

        </div>
      </div>
      <div class="modal-footer">
        <a href="javascript:window.open('https://www.oaxaca-mio.com/atractivos/montealban/',);void 0"><button type="button" class="btn btn-outline-info">Más Información</button></a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Cascadas petrificadas hierve el agua</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- -->
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" style="width:495px; height:300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/turismo/agua/agua1.jpg" alt="First slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/agua/agua2.png" alt="Second slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/agua/agua3.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/agua/agua4.jpeg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/agua/agua5.png" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/agua/agua6.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <!-- -->

          <p style="font-size:12px">Quieres convivir con la naturaleza y disfrutar de unos paisajes espectaculares para tomar unas excelentes fotos, visita está lugar llamado hierve el agua, donde el tiempo se detuvo en sus cascadas petrificadas, podrás entrar a sus cristalinas aguas y ver desde ahí cómo cae el agua convirtiéndose en un espectáculo único</p>

        </div>
      </div>
      <div class="modal-footer">
      <a href="javascript:window.open('https://www.tripadvisor.com.mx/Attraction_Review-g150801-d4523240-Reviews-Hierve_el_Agua-Oaxaca_Southern_Mexico.html',);void 0"><button type="button" class="btn btn-outline-info">Más Información</button></a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Zona arqueológica de Mitla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- -->
          <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" style="width:495px; height:300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/turismo/mitla/mitla1.jpg" alt="First slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/mitla/mitla2.jpg" alt="Second slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/mitla/mitla3.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/mitla/mitla4.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/mitla/mitla5.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/mitla/mitla6.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <!-- -->

          <p style="font-size:10px">Principal centro ceremonial después de Monte Albán, la palabra Mitla o Mictlán es de origen náhuatl y significa «Lugar de los Muertos» o «Inframundo» en zapoteco se llama «Lyobaa» que significa «Lugar de entierros», el cual ya en mexica quedó en Mitlan, «lugar de muertos» y ya españolizado sólo Mitla.</p>

        </div>
      </div>
      <div class="modal-footer">
      <a href="javascript:window.open('https://www.oaxaca-mio.com/atractivos/mitla/',);void 0"><button type="button" class="btn btn-outline-info">Más Información</button></a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->

<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Árbol del Tule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- -->
          <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" style="width:495px; height:300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/turismo/tule/tule1.jpg" alt="First slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/tule/tule2.jpg" alt="Second slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/tule/tule3.jpg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/tule/tule4.jpeg" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/tule/tule5.jfif" alt="Third slide" style="width:490px; height:300px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/turismo/tule/tule6.png" alt="Third slide" style="width:490px; height:300px;">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <!-- -->

          <p style="font-size:10px;">Entre las bellezas naturales de Oaxaca, una de las más extraordinarias es el gigantesco y singular sabino llamado “El Árbol del Tule”, el cual tiene una altura de 40 m., un diámetro de 52.58 m., un peso de 509 ton, y aproximadamente 2,000 años de antigüedad. Se localiza en la localidad de Santa María El Tule a tan solo 12 km de la la Ciudad de Oaxaca, donde existe tambien un pequeño templo del siglo XVIII con retablos barrocos.</p>
        </div>
      </div>
      <div class="modal-footer">
      <a href="javascript:window.open('https://www.tripadvisor.com.mx/Attraction_Review-g7158692-d155101-Reviews-Tule_Tree-Santa_Maria_del_Tule_Southern_Mexico.html',);void 0"><button type="button" class="btn btn-outline-info">Más Información</button></a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->

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