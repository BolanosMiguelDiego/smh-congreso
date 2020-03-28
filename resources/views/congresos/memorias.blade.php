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
<div align="center" style="margin-top: 20px; background-image: url(imagenes/lineas.png);">
    <div class="row" style="width: 100%;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6" style="width: 50%">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/memorias/memoria1.png" class="d-block w-100" alt="..." style="height: 250px;">
    </div>
    <div class="carousel-item">
      <img src="imagenes/memorias/memoria2.jpg" class="d-block w-100" alt="..." style="height: 250px;">
    </div>
    <div class="carousel-item">
      <img src="imagenes/memorias/memoria3.jpg" class="d-block w-100" alt="..." style="height: 250px;">
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
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
<!-- Codigo para el comite academico-->
<!-- Comite academico de la SMH -->
<div align="center" style="margin-top: 20px; background-image: url(imagenes/lineas.png);">
  <div class="row" style="width: 98%;">
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2019</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal1" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2018</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal2" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2017</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal3" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2016</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal4" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2015</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal5" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2014</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal6" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
  </div>
  <!-- termino de row-->
  <br>
  <div class="row" style="width: 98%;">
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2013</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal7" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2012</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal8" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2011</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal9" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2010</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal10" style="font-size:10px">Descargar archivos</button>
         </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div align="center">
        <div class="card border-info" >
          <div class="card-body">
          <h5 class="card-title" style="font-size:14px">Memorias 2009</h5>
           <button type="button" class="btn btn-outline-info" align="right" data-toggle="modal" data-target="#modal11" style="font-size:10px">Descargar archivos</button>
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
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2019</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="memorias2019">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XIX Congreso Internacional de la SHM. Morelia Michoacán. 2019.</p></a>
              <!-- window.open('http://ejemplo.com/archivo.pdf', '_blank');
              https://si.ua.es/es/documentos/documentacion/pdf-s/mozilla12-pdf.pdf-->
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>                                                
              ISSN-2448-7120 Año 6 Número</p></a>
              
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
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2018</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="memorias2018">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XIV Congreso Internacional de la SHM. Ciudad de México. 2018.</p></a>
              
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="ISSN-2448-71202018">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              ISSN-2448-7120 Año 5 Número 5</p></a>
              
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
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2017</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="memorias2017">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>

              XVII Congreso Internacional de la SHM. Guanajuato, Gto. 2017.</p></a>
              
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="ISSN-2448-71202017">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              ISSN-2448-7120 Año 4 Número 4</p></a>
              
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
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2016</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="ISSN-2448-71202016">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XVI Congreso Internacional de la SHM. Querétaro, Querétaro. 2016.</p></a>
              
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2016">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              ISSN 2448-7120 Año 3 Número 3</p></a>
              
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
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2015</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="ISSN-2448-71202015">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XV Congreso Internacional de la SMH. México, D. F. Del 22 al 25 de septiembre de 2015</p></a>
              
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2015">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              ISSN-2448-7120 Año 2 Número 2</p></a>
              
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Modal -->
<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2014</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="javascript:window.open('http://hidrogeno.org.mx/wp-content/uploads/2017/07/ISSN-2448-71202018.pdf',);void 0" download="ISSN-2448-71202014">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XIV Congreso Internacional de la SMH. 2014</p></a>
              
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2014">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              ISSN-2448-7120 Año 1 Número 1</p></a>
              
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Modal -->
<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2013</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2013">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XIII Congreso Internacional de la SMH. 2013</p></a>
              
              
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Modal -->
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2012</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2012">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XII Congreso Internacional de la SMH. Mérida, Yucatán. Del 9 al 13 de julio de 2012.</p></a>
              
              
              
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Modal -->
<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2011</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2011">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              XI Congreso Internacional del a SMH. Cuernavaca, Morelos. Del 20 al 23 de septiembre de 2011.</p></a>
              
              
              
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Modal -->
<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2010</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2010">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>         
                X Congreso Internacional de la SMH. Toluca, Edo. de México. septiembre de 2010.</p></a>
              
             
              
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- Modal -->
<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">
      <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Memorias 2009</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
          
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Archivos</h6>
              <div aling="justify">
              <a href="http://hidrogeno.org.mx/wp-content/uploads/2017/07/2013.zip" download="2009">
              <p style="color: black">
              <svg class="bi bi-file-earmark-arrow-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
              <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
              </svg>
              IX Congreso Internacional de la SMH. Saltillo, Coahuila. Del 21 al 25 de septiembre de 2009</p></a>
              
              
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