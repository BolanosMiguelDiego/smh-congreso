
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
                <a href="javascript:window.open('https://www.trivago.com.mx/?iGeoDistanceItem=488666&sem_keyword=&sem_creativeid=272268136200&sem_matchtype=b&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=&sem_param1=&sem_param2=&sem_campaignid=327653913&sem_adgroupid=26500238553&sem_targetid=aud-571148529537%3Adsa-19959388920&sem_location=20714&cip=521131&gclid=EAIaIQobChMIlLaK4Na66AIVC8ZkCh2OyAI_EAAYAyAAEgJEHPD_BwE',);void 0" class="btn btn-primary" style="background-image:url(imagenes/trivago.jpg); width: 112px; height:40px"></a>
                <a href="javascript:window.open('https://www.booking.com/hotel/mx/los-olivos-spa.es.html?aid=311839;label=los-olivos-spa-f_fUv1lm12ImhCCjuGXEjwS388412463481%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-261710242782%3Akwd-20647610775%3Alp20714%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YUqNR_uFB9osOsPC4yaNEOA;sid=561adbf4b455216c17baf4c604bed2c2;dest_id=-1685634;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1585313105;srpvid=513f59a8d08600ea;type=total;ucfs=1&#hotelTmpl',);void 0" class="btn btn-primary" style="background-image:url(imagenes/booking.png); width: 112px; height:40px"></a>
                </div>
                
            </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="card" style="width: 100%;">
            <img src="imagenes/hoteles/fortin.png" class="card-img-top" alt="..." style="width: 50%; height: 105px;">
            <div class="card-body">
                <h5 class="card-title">Hotel Fortin Plaza</h5>
                <p class="card-text" style="font-size: 11px" align="justify">Fortín Plaza es un hotel de negocios con 90 habitaciones con vista al Valle de Oaxaca y al centro histórico. Situado a unos pasos del Auditorio de La Guelaguetza y 25 km del aeropuerto, este hotel de Oaxaca cuenta con piscina climatizada, dos estacionamientos y ofrece especialidades de la cocina oaxaqueña en su restaurante.</p>
                <p class="card-text" style="font-size: 11px" align="justify">Sus amplias habitaciones ofrecen un ambiente sencillo y acogedor con modernas amenidades, como pantalla LCD de 32” y ventilador de techo, y algunas cuentan con aire acondicionado, tina y terraza ...</p>
                <div align="right">
                <a href="javascript:window.open('https://www.trivago.com.mx/oaxaca-683966/hotel/hotel-fortin-plaza-349016',);void 0" class="btn btn-primary" style="background-image:url(imagenes/trivago.jpg); width: 112px; height:40px"></a>
                <a href="javascript:window.open('https://www.booking.com/hotel/mx/fortin-plaza.es.html?aid=311839&label=fortin-plaza-j1Ogh398BboYqKGRQ9lc4AS161718516952%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-261710242782%3Akwd-6813712125%3Alp20714%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YUqNR_uFB9osOsPC4yaNEOA&sid=561adbf4b455216c17baf4c604bed2c2&dest_id=-1685634&dest_type=city&group_adults=2&group_children=0&hapos=1&hpos=1&no_rooms=1&sr_order=popularity&srepoch=1585313322&srpvid=9ab65a1518e10080&ucfs=1&from=searchresults;highlight_room=#hotelTmpl',);void 0" class="btn btn-primary" style="background-image:url(imagenes/booking.png); width: 112px; height:40px"></a>
                </div>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="card" style="width: 100%;">
            <img src="imagenes/hoteles/victoria.png" class="card-img-top" alt="..." style="width: 45%; height=80px;">
            <div class="card-body">
                <h5 class="card-title">Hotel Victoria</h5>
                <p class="card-text" style="font-size: 10px" align="justify">Rodeado por 70,000 m2 de hermosos jardines, Hotel Victoria Oaxaca se encuentra ubicado en una reserva natural al pie del Cerro del Fortín. Con una ubicación excepcional, a tan sólo unos minutos del centro histórico de Oaxaca el hotel ofrece 147 habitaciones restaurante de cocina oaxaqueña e internacional, bar, piscina, bar de alberca, cancha de tenis y servicio a cuartos.</p>
                <p class="card-text" style="font-size: 10px" align="justify">Cuentan con transportación gratuita al centro en determinados horarios, así como todas las facilidades para la realización de eventos, congresos ...</p>
                <div align="right">
                <a href="javascript:window.open('https://www.trivago.com.mx/oaxaca-683966/hotel/hotel-victoria-oaxaca-42626?sem_keyword=&sem_creativeid=272335387891&sem_matchtype=b&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=&sem_param1=&sem_param2=&sem_campaignid=327657633&sem_adgroupid=26500277433&sem_targetid=aud-295721641839%3Adsa-815993230710&sem_location=20714&cip=521131&gclid=EAIaIQobChMIpcezy9i66AIV1x-tBh2qSQkEEAAYAiAAEgIc2vD_BwE',);void 0" class="btn btn-primary" style="background-image:url(imagenes/trivago.jpg); width: 112px; height:40px"></a>
                <a href="javascript:window.open('https://www.booking.com/hotel/mx/victoria-s-a-de-c-v.es.html?aid=311839;label=victoria-s-a-de-c-v-9QLkuY6Mrp2TZvlwaiQ97AS320763094295%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-261710242782%3Akwd-10937801%3Alp20714%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YUqNR_uFB9osOsPC4yaNEOA;sid=561adbf4b455216c17baf4c604bed2c2;dest_id=-1685634;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1585313479;srpvid=c6505a63500d0059;type=total;ucfs=1&#hotelTmpl',);void 0" class="btn btn-primary" style="background-image:url(imagenes/booking.png); width: 112px; height:40px"></a>
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