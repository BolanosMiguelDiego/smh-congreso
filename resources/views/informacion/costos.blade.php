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

  #gub{
    color: #007BFF; font-size: 25px; height: 60px;
  }

  @media (max-width: 1050px)  {
    #gub{
      font-size:10px;
    }
    h2{
      font-size:10px;
    }
    .btn{
      font-size:12px;
    }
    h3{
      font-size:12px;
    }
    p{
      font-size:10px;
    }
    
  }
  @media (max-width: 575px) {

    #gub{
      font-size:25px;
    }
    h2{
      font-size:30px;
    }
    .btn{
      font-size:15px;
    }
    h3{
      font-size:20px;
    }
    p{
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
    <h1>Costos</h1>
  </div>
  <div align="center" style="margin-top: 20px;">
    <div class="row" style="width: 98%;">
      <div class="col-sm-3">
       <div align="center">
         <div class="card border-secondary mb-3" style="max-width: 18rem; border-color: black">
          <div class="card-header"><h2 style="color: #007BFF; height: 60px;">Industria</h2></div>
            <div class="card-body">
              <h3 class="card-title"> $400</h3>
              <p class="card-text">Antes del congreso</p>
              <br>
              
              <h3 class="card-title"> $450</h3>
              <p class="card-text">En el congreso</p>
              <br>
              <div align="right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Estoy interesado</button>
              </div>
            </div>
          </div>
       </div>
      </div>
      <div class="col-sm-3">
       <div align="center">
         <div class="card border-secondary mb-3" style="max-width: 18rem; border-color: black">
          <div class="card-header"><h2 id="gub" style="">Gubernamental y Academia</h2></div>
            <div class="card-body">
              <h3 class="card-title"> $350</h3>
              <p class="card-text">Antes del congreso</p>
              <br>
              
              <h3 class="card-title"> $400</h3>
              <p class="card-text">En el congreso</p>
              <br>
              <div align="right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Estoy interesado</button>
              </div>
            </div>
          </div>
       </div>
      </div>
      <div class="col-sm-3">
       <div align="center">
         <div class="card border-secondary mb-3" style="max-width: 18rem; border-color: black">
          <div class="card-header"><h2 style="color: #007BFF; height: 60px;">SMH Miembro</h2></div>
            <div class="card-body">
              <h3 class="card-title"> $230</h3>
              <p class="card-text">Antes del congreso</p>
              <br>
              
              <h3 class="card-title"> $280</h3>
              <p class="card-text">En el congreso</p>
              <br>
              <div align="right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">Estoy interesado</button>
              </div>
            </div>
          </div>
       </div>
      </div>
      <div class="col-sm-3">
       <div align="center">
         <div class="card border-secondary mb-3" style="max-width: 18rem; border-color: black">
          <div class="card-header"><h2 style="color: #007BFF; height: 60px;">Estudiante</h2></div>
            <div class="card-body">
              <h3 class="card-title"> $100</h3>
              <p class="card-text">Antes del congreso</p>
              <br>
              
              <h3 class="card-title"> $150</h3>
              <p class="card-text">En el congreso</p>
              <br>
              <div align="right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">Estoy interesado</button>
              </div>
            </div>
          </div>
       </div>
      </div>
    </div>
  </div>
</div>
</div>


<!-- codigo para ventanas modal -->
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(19, 182, 211); color white;">

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Formulario de Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- formulario -->
          <!--Body-->
          <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la industria" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                        <input type="text" class="form-control" id="clave" name="clave" placeholder="RFC industria" required>
                                    </div>

                                  
                                   
                                    <form enctype="multipart/form-data" action="uploader.php" method="POST">
                                    
                                        <input type="file" class="form-control" action="uploader.php" required>

                                    </form>
                                    <p></p>
                                    
                                    <input type="submit" value="Enviar" class="btn btn-outline-success btn-block rounded-0 py-2" data-dismiss="modal">
                                    <br>

                                </div>
                            </div>
        <!-- fin formulario -->
      <div class="modal-footer" style="background-color: rgb(19, 182, 211);">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Formulario de Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- formulario -->
          <!--Body-->
          <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la institucion" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                        <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave unica" required>
                                    </div>

                                  
                                    <form enctype="multipart/form-data" action="uploader.php" method="POST">
                                    
                                        <input type="file" class="form-control" action="uploader.php" required>

                                    </form>
                                    <p></p>
                                    
                                    <input type="submit" value="Enviar" class="btn btn-outline-success btn-block rounded-0 py-2" data-dismiss="modal">
                                    <br>

                                </div>
                            </div>
        <!-- fin formulario -->
      <div class="modal-footer" style="background-color: rgb(19, 182, 211);">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Formulario de Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- formulario -->
          <!--Body-->
          <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                        <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave SMH" required>
                                    </div>

                                  
                                    <form enctype="multipart/form-data" action="uploader.php" method="POST">
                                    
                                        <input type="file" class="form-control" action="uploader.php" required>

                                    </form>
                                    <p></p>
                                    
                                    <input type="submit" value="Enviar" class="btn btn-outline-success btn-block rounded-0 py-2" data-dismiss="modal">
                                    <br>

                                </div>
                            </div>
        <!-- fin formulario -->
      <div class="modal-footer" style="background-color: rgb(19, 182, 211);">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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

        <h5 class="modal-title" id="exampleModalLabel" align="center" style="color:white">Formulario de Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- formulario -->
          <!--Body-->
          <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                        <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave estudiante" required>
                                    </div>

                                  
                                    <form enctype="multipart/form-data" action="uploader.php" method="POST">
                                    
                                        <input type="file" class="form-control" action="uploader.php" required>

                                    </form>
                                    <p></p>
                                    
                                    <input type="submit" value="Enviar" class="btn btn-outline-success btn-block rounded-0 py-2" data-dismiss="modal">
                                    <br>

                                </div>
                            </div>
        <!-- fin formulario -->
      <div class="modal-footer" style="background-color: rgb(19, 182, 211);">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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