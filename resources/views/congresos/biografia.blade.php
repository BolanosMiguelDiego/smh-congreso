
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

<br>
<div align="center">
  <div class="card" style="width: 98%">
  <div class="card-header">
    <h3>Biografias Homenajeados</h3>
  </div>
  <div align="center" style="margin-top: 20px;">
      <div align="center">
      <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
      <div class="row" style="width: 98%;">
    <div class="col-sm-6">
      <div class="card" style="width: 18rem;">
        <img src="imagenes/perla_balbuena.jpg" class="card-img-top" alt="..." style="height: 200px; width:200px;">
        <div class="card-body">
          <h5 class="card-title">Perla Balbuena</h5>
          <p class="card-text" align="justify" style="font-size:10px;">Perla B. Balbuena es profesora eminente de ingeniería química de TEES y tiene nombramientos conjuntos en el Departamento de Ciencia e Ingeniería de Materiales y en el Departamento de Química de la Universidad Texas A&M desde 2004.</p>
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal1">Mas Información</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card" style="width: 18rem;">
        <img src="imagenes/arturo_f.jpg" class="card-img-top" alt="..." style="height: 200px; width:200px;">
        <div class="card-body">
          <h6 class="card-title" style="font-size:17px;">Dr. Arturo Fernández  Madrigal.</h6>
          <p class="card-text" align="justify" style="font-size:11px;">Elaboracion de celdas solares mediante pelicuals delgadas de diselenuro de cobre indio y galio
          Preparacion y caracterizacion de electrodos basados en semiconductores para la fotoelectrolisis del agua</p>
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal2">Mas información</a>
        </div>
      </div>
    </div>
  </div>
      <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
</div>
</div>
<br>



<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- Button trigger modal  -->
<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Homenajeado 2020</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <img src="../imagenes/perla_balbuena.jpg" class="card-img-top" alt="..." style="height: 200px;">
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Perla Balbuena</h6>
              <div aling="justify">
              <p class="card-text" style="font-size: 13px" align="justify">Catalysis on metal nanoparticles for fuel cell electrocatalysts
Catalyzed growth of single-walled carbon nanotubes
Gas separation and storage in metal organic frameworks
Solid-electrolyte interphase layer nucleation and growth in Si and carbon anodes of Li-ion batteries
Materials for photocatalysis: Oxygen evolution in doped oxides
Materials for solar cells and hydrogen production: Hydrogen evolution on coated semiconductors covered by co-catalysts
Shale gas thermodynamics: Phase behavior of hydrocarbon + water mixtures in confined media
</p>

<!--
              <p class="card-text" style="font-size: 13px" align="justify">La Dra. Ruiz realiza investigaciones en el desarrollo de nuevos electrodos para celdas de combustible, realiza la síntesis, caracterización y evaluación electroquímica de estos materiales.</p>
          -->    <p class="card-text" style="font-size: 13px" align="justify">Awards & Honors
NSF/POWRE award, 1997
NSF/CAREER award, 1999
GPSA Professorship, 2005
AAAS Fellow, 2013
TEES Senior Fellow, 2013</p>
             
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
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<!-- Button trigger modal  -->
<!-- Modal -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Homenajeado 2019</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <img src="../imagenes/arturo_f.jpg" class="card-img-top" alt="..." style="height: 200px;">
          </div>
          <div class="col-md-9">
            <div aling="center">
            <h6 class="card-title" align="center">Dr. Arturo Fernández  Madrigal.</h6>
              <div aling="justify">
              <p class="card-text" style="font-size: 13px" align="justify">
              Líneas de investigación
Elaboracion de celdas solares mediante pelicuals delgadas de diselenuro de cbore indio y galio
Preparacion y caracterizacion de electrodos basados en semiconductores para la fotoelectrolisis del agua
Caracterizacion de electrocatalizadores para celdas de combustibles
Elaboracion de celdas solares mediante pelicuals delgadas de diselenuro de cobre indio y galio
Preparacion y caracterizacion de electrodos basados en semiconductores para la fotoelectrolisis del agua
Caracterizacion de electrocatalizadores para celdas de combustibles</p>
<!-- 
              <p class="card-text" style="font-size: 13px" align="justify">La Dra. Ruiz realiza investigaciones en el desarrollo de nuevos electrodos para celdas de combustible, realiza la síntesis, caracterización y evaluación electroquímica de estos materiales.</p>
              <p class="card-text" style="font-size: 13px" align="justify">Ha participado y dirigido proyectos de investigación de varias organizaciones (ICyTDF, CONCYTEG y PROMEP) relacionadas con la ciencia de los nanomateriales y sus aplicaciones en energía. Ha publicado artículos en revistas internacionales (JCR) con alto factor de impacto. Sus áreas de investigación son: catálisis y materiales, energía limpia, pilas de combustible y electroquímica.</p>
  -->            
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

<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->

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