<?php 
session_start();
include 'includes/Connection.php';
$c = new Connection();

$sql_usuario1 = $c->query("SELECT nombre, correo, codEmpresa, idregistro, telefono FROM registro where correo = '".$_SESSION['CORREO']."'");
$result_register1 = mysqli_fetch_array($sql_usuario1);

$sql_usuario2 = $c->query("SELECT placa, modelo, color, lugarSalida, lugarLlegada, hora, precio FROM carro where idconductor = '".$result_register1[3]."'");
$result_register2 = mysqli_fetch_array($sql_usuario2);

$sql_usuario3 = $c->query("SELECT nombre FROM empresa where codigo = '".$result_register1[2]."'");
$result_register3 = mysqli_fetch_array($sql_usuario3);


if (isset($_SESSION['CORREO'])) {

  if(isset($_GET['menu9'])){
  if($_GET['menu9']=='ingreso9'){
    $filtro1=$_POST['lugarSalidaFiltro'];
    $filtro2=$_POST['lugarLlegadaFiltro'];
    $filtro3=$_POST['horaFiltro'];
  }
}
 if(isset($_GET['menu'])){
  if($_GET['menu']=='ingreso'){
    $_SESSION['editnom']=0;
    header('location:principal.php#about');
  }
}
if(isset($_GET['menu1'])){
  if($_GET['menu1']=='ingreso1'){
    $_SESSION['editemp']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu2'])){
  if($_GET['menu2']=='ingreso2'){
    $_SESSION['editcorr']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu3'])){
  if($_GET['menu3']=='ingreso3'){
    $_SESSION['editvehi']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu4'])){
  if($_GET['menu4']=='ingreso4'){
    $_SESSION['editlugSa']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu5'])){
  if($_GET['menu5']=='ingreso5'){
    $_SESSION['editlugLle']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu6'])){
  if($_GET['menu6']=='ingreso6'){
    $_SESSION['edithora']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu7'])){
  if($_GET['menu7']=='ingreso7'){
    $_SESSION['editprecio']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu8'])){
  if($_GET['menu8']=='ingreso8'){
    $_SESSION['eliminar']=0;
    header('location:principal.php#about');
  }
}

if(isset($_GET['menu10'])){
  if($_GET['menu10']=='ingreso10'){
    $_SESSION['editTel']=0;
    header('location:principal.php#about');
  }
}

 ?>

 <!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Flytte</title>
  <link rel="icon" type="image/png" href="img/logoFlytte.png">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menú
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Opciones de registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Conductores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Ajustes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contáctanos</a>
          </li>
          <li class="nav-item">
         <a class="nav-link js-scroll-trigger" href="logout.php">Cerrar Sesión</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Hola <?php echo $result_register1[0];?>, bienvenid@ a</div>
        <div class="intro-heading text-uppercase">Flytte</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Buscar conductor</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">También puedes</h2>
        </div>
      </div>
      <br><br>
      <div class="row text-center">
       <!--  <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <a href="registro.php"> <i class="fas fa-door-open fa-stack-1x fa-inverse"></i></a>
          </span>
          <h4 class="service-heading">Regístrarse</h4>
          <p class="text-muted">Regístrate y deja de estresarte por cómo llegar a tu trabajo o universidad, a la 
          par que conoces nuevas personas de tu entorno y disfrutas un viaje más comodo.</p>
        </div> -->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <a href="carro.php"><i class="fas fa-car-side fa-stack-1x fa-inverse"></i></a>
          </span>
          <h4 class="service-heading">Registrar vehículo</h4>
          <p class="text-muted">Registra tu vehículo y ayuda a aquellos que lo necesitan, a la vez que apoyas tus finanzas.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <a href="empresa.php"><i class="fas fa-building fa-stack-1x fa-inverse"></i></a>
          </span>
          <h4 class="service-heading">Registrar empresa</h4>
          <p class="text-muted">Registra tu empresa para darles a tus empleados la capacidad de que conecten y desarrollen
          su solidaridad, a la vez que disfrutan de un viaje seguro, rápido y único.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Conductores Disponibles</h2>
        </div>
        <div class="col-md-3">
            <form action='?menu9=ingreso9#portfolio' method="post">
              <select class="form-control" name="lugarSalidaFiltro">
                <option>Lugar de salida</option>
                  <option>Viva envigado</option>
                  <option>Estación Envigado</option>
                  <option>Estación Ayura</option>
                  <option>Estación Aguacatala</option>
                  <option>Estación Poblado</option>
              </select>
              <br>
              <select class="form-control" name="lugarLlegadaFiltro">
                <option>Lugar de llegada</option>
                  <option>Universidad EIA-Palmas</option>
                  <option>Universidad EIA-Zuñiga</option>
              </select>
              <br>
              <select class="form-control" name="horaFiltro">
                <option>Horario</option>
                  <option>6:00 am</option>
                  <option>8:00 am</option>
                  <option>10:00 am</option>
                  <option>12:00 am</option>
                  <option>1:00 pm</option>
                  <option>3:00 pm</option>
                  <option>5:00 pm</option>
                  <option>7:00 pm</option>
              </select>
              <br>
              <button class="btn float-left btn-warning">Filtrar</button>
              </form>
          </div>

        <div class="col-md-8">
        <table class="table table-striped table-dark" >
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Lugar de Salida</th>
              <th scope="col">Lugar de Llegada</th>
              <th scope="col">Hora de llegada</th>
              <th scope="col">Seleccionar</th>
            </tr>
          </thead>
          <tbody>

        <?php
        if (isset($filtro1)) {
          $consulta="SELECT * FROM registro r INNER JOIN carro c on c.idconductor=r.idregistro where r.codEmpresa = ".$result_register1[2]." and c.lugarSalida='".$filtro1."' and c.lugarLlegada='".$filtro2."' and c.hora='".$filtro3."'";
        }else{
            $consulta ="SELECT * FROM registro r INNER JOIN carro c on c.idconductor=r.idregistro where r.codEmpresa = ".$result_register1[2];
          }
        

            $resEstado=$c->query($consulta);
            if(mysqli_num_rows($resEstado)==0)
             {
                ?><center><h1>No hay conductores disponibles</h1></center><?php ;
             }

            //////// TRANSOFMRACION A NUMERO DE FILAS AFECTADAS ///////
            $result = mysqli_num_rows($resEstado);
            if($result > 0){

                while ($data = $resEstado->fetch_array(MYSQLI_BOTH)) {
                    
        ?>
        <tr>
          <th scope="row"><?php echo $data['nombre'] ;?></th>
          <td ><?php echo $data['lugarSalida'] ;?></td>
          <td ><?php echo $data['lugarLlegada'] ;?></td>
          <td ><?php echo $data['hora'] ;?></td>
          <td><a href="conductor.php?id=<?php echo $data['correo'] ?>">Más info</a></td> 
        </tr>
    <?php } } ?>
          </tbody>
        </table>
        </div>
     </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Ajustes</h2>
          <br><br>
        </div>
      </div>
      <?php if(isset($_SESSION['editnom'])){ $ruta="Editar/Nombre.php"; } elseif(isset($_SESSION['editemp'])){ $ruta="Editar/Empresa.php"; }elseif(isset($_SESSION['editcorr'])){ $ruta="Editar/Correo.php"; }elseif(isset($_SESSION['editvehi'])){ $ruta="Editar/Vehiculo.php"; }elseif(isset($_SESSION['editlugSa'])){ $ruta="Editar/LugarSalida.php"; }elseif(isset($_SESSION['editlugLle'])){ $ruta="Editar/LugarLlegada.php"; }elseif(isset($_SESSION['edithora'])){ $ruta="Editar/Horario.php"; }elseif(isset($_SESSION['editprecio'])){ $ruta="Editar/Precio.php"; }elseif(isset($_SESSION['editTel'])){ $ruta="Editar/Telefono.php"; }elseif(isset($_SESSION['eliminar'])){ $ruta="Editar/Eliminar.php"; } ; ?>
      <form action='<?php echo $ruta ?>' method="get">
       <div class="row justify-content-around">
        <div class="col">
          <div>Nombre:</div>
          <br>
          <div>Empresa:</div>
          <br>
          <div>Telefono:</div>
          <br>
          <div>Correo:</div>
          <br>
          <div>Vehiculo:</div>
          <br>
          <div>Lugar de salida:</div>
          <br>
          <div>Lugar de llegada:</div>
          <br>
          <div>Hora:</div>
          <br>
          <div>Precio:</div>
          <br>
        </div>
        <div class="col-6">
          <div><?php  if(isset($_SESSION['editnom'])){?> 
            <input type="text"  value="<?php echo $result_register1[0]; ?>" name="nombre" required="true">
          <?php }else{echo $result_register1[0]; }?>
          </div>
          <br>
          <div><?php  if(isset($_SESSION['editemp'])){?> 
            <input type="text"  value="<?php echo $result_register1[2]; ?>" name="empresa" required="true">
          <?php }else{echo $result_register3[0]; }?></div>
          <br>
          <div><?php  if(isset($_SESSION['editTel'])){?> 
            <input type="text"  value="<?php echo $result_register1[4]; ?>" name="telefono" required="true">
          <?php }else{echo $result_register1[4]; }?>
          </div>
          <br>
          <div><?php  if(isset($_SESSION['editcorr'])){?> 
            <input type="email"  value="<?php echo $result_register1[1]; ?>" name="correo" required="true">
          <?php }else{echo $result_register1[1]; }?></div>
          <br>
          <div><?php  if(isset($_SESSION['editvehi'])){?> 
            <?php echo $result_register2[0]; ?>-
            <select name="modelo" required="true">
                <option><?php echo $result_register2[1]; ?></option>
                <option>Chevrolet Spark GT</option>
                <option>Nissan March</option>
                <option>Kia Rio</option>
                <option>Renault Stpeway</option>
                <option>Chevrolet Tracker</option>
                <option>Mazda 3</option>
                <option>Kia Picanto</option>
                <option>Renault Sandero</option>
                <option>Renault Logan</option>
                <option>Renault Duster</option>
                <option>Chevrolet Sail</option>
            </select>
            <select name="color" required="true">
                <option><?php echo $result_register2[2]; ?></option>
                <option>Negro</option>
                <option>Blanco</option>
                <option>Gris</option>
                <option>Rojo</option>
                <option>Amarillo</option>
                <option>Azul</option>
                <option>Verde</option>
                <option>Morado</option>
                <option>Naranja</option>
                <option>Marron</option>
            </select>
          <?php }else{echo $result_register2[0];?>-<?php echo $result_register2[1]; ?>-<?php echo $result_register2[2]; }?></div>
          <br>
          <div><?php  if(isset($_SESSION['editlugSa'])){?> 
            <select name="lugarSalida" required="true">
                <option><?php echo $result_register2[3]; ?></option>
                  <option>Viva envigado</option>
                  <option>Estación Envigado</option>
                  <option>Estación Ayura</option>
                  <option>Estación Aguacatala</option>
                  <option>Estación Poblado</option>
              </select>
          <?php }else{echo $result_register2[3]; }?></div>
          <br>
          <div><?php  if(isset($_SESSION['editlugLle'])){?> 
            <select name="lugarLlegada" required="true">
                  <option><?php echo $result_register2[4]; ?></option>
                  <option>Universidad EIA-Palmas</option>
                  <option>Universidad EIA-Zuñiga</option>
              </select>
          <?php }else{echo $result_register2[4]; }?></div>
          <br>
          <div><?php  if(isset($_SESSION['edithora'])){?> 
            <select name="hora" required="true">
                <option><?php echo $result_register2[5]; ?></option>
                <option>6:00 am</option>
                <option>8:00 am</option>
                <option>10:00 am</option>
                <option>12:00 am</option>
                <option>1:00 pm</option>
                <option>3:00 pm</option>
                <option>5:00 pm</option>
                <option>7:00 pm</option>
              </select>
          <?php }else{echo $result_register2[5]; }?></div>
          <br>
          <div><?php  if(isset($_SESSION['editprecio'])){?> 
            <select name="precio" required="true">
                <option><?php echo $result_register2[6]; ?></option>
                <option>500</option>
                <option>1000</option>
                <option>1500</option>
                <option>2000</option>
                <option>2500</option>
                <option>3000</option>
                <option>3500</option>
                <option>4000</option>
            </select>
          <?php }else{echo $result_register2[6]; }?></div>
        
        </div>
        <div class="col">
          
          <!-- JavaScript habilitar editado --->
          <div>
            <?php if(isset($_SESSION['editnom'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu=ingreso"> Editar</a> </form><?php } ?>
          </div>
        
          <br>
          <div>
            <?php if(isset($_SESSION['editemp'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu1=ingreso1"> Editar</a> </form><?php } ?>
          </div>
          <br>
          <div>
            <?php if(isset($_SESSION['editTel'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu10=ingreso10"> Editar</a> </form><?php } ?>
          </div>
        
          <br>
          <div>
            <?php if(isset($_SESSION['editcorr'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu2=ingreso2"> Editar</a> </form><?php } ?>
          </div>
          <br>
          <div>
            <?php if(isset($_SESSION['editvehi'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu3=ingreso3"> Editar</a> </form><?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php if(isset($_SESSION['eliminar'])){?><BUTTON class="btn btn-primary js-scroll-trigger"> Confirmar</BUTTON> <?php }else{ ?> <a href="principal.php?menu8=ingreso8"> Eliminar</a></form><?php } ?>
          </div>
          <br>
          <div>
            <?php if(isset($_SESSION['editlugSa'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu4=ingreso4"> Editar</a> </form><?php } ?>
          </div>
          <br>
          <div>
            <?php if(isset($_SESSION['editlugLle'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu5=ingreso5"> Editar</a> </form><?php } ?>
          </div>
          <br>
          <div>
            <?php if(isset($_SESSION['edithora'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu6=ingreso6"> Editar</a> </form><?php } ?>
          </div>
          <br>
          <div>
            <?php if(isset($_SESSION['editprecio'])){ ?><BUTTON class="btn btn-primary js-scroll-trigger"> Guardar</BUTTON> <?php }else{ ?> <a href="principal.php?menu7=ingreso7"> Editar</a> </form><?php } ?>
          </div>
        </div>
      </div>
    </form>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nuestro equipo</h2>
          <h3 class="section-subheading text-muted">"Don't wish for it, work for it"</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpeg" alt="">
            <h4>Camilo García</h4>
            <p class="text-muted">Technological Leader</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/profile.php?id=100002029613245">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/camilo751/?hl=es-la">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpeg" alt="">
            <h4>Jose Pablo Villa</h4>
            <p class="text-muted">User Experience</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/josepablovilla4">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/josepablo.villaarango">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/jpvillaa/?hl=es-la">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpeg" alt="">
            <h4>Carolina Londoño</h4>
            <p class="text-muted">Scrum Master</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/Caro2504L">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Caro.2504">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/clondono25/?hl=es-la">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Con la sistematización de la información, nuestra compañía se encuentra a la vanguardia de la modernidad y con los más altos estándares de calidad</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="https://www.eia.edu.co/">
            <img class="img-fluid d-block mx-auto" src="img/logos/EIA.png" alt="">
          </a>
      </div>
      <div class="col-md-3 col-sm-6">
          <a href="https://www.grupoexito.com.co/es/">
            <img class="img-fluid d-block mx-auto" src="img/logos/exito.jpg" alt="">
          </a>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div> -->
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contáctanos</h2>
          <h3 class="section-subheading text-muted">Envianos tus opiniones</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Por favor digite su nombre.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Por favor digite su Email.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" required="required" data-validation-required-message="Por favor digite su teléfono.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Tú mensaje *" required="required" 
                  data-validation-required-message="Por favor digite su mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright 2019 &copy;</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="politicas_de_privacidad">Políticas de privacidad</a>
            </li>
            <li class="list-inline-item">
              <a href="terminos_de_uso">Términos de uso</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Plan educativo</h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/educativo.jpg" alt="">
                <p>Un plan diseñado para las instituciones educativas, donde se puede ... </p>
                <ul class="list-inline">
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Plan ejecutivo</h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/ejecutivo.jpg" alt="">
                <p>Plan diseñadopara todo tipo de compañías, con este se podrá ampliar ... </p>
                <ul class="list-inline">
                  <!-- <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li> -->
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Plan gubernamental</h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/gobierno.png" alt="">
                <p>Plan diseñado para suplir los diferentes servicios de transporte que requieren los entes públicos.</p>
                <ul class="list-inline">
                  <!--<li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>-->
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Plan emprendimeinto</h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/emprendimiento.jpg" alt="">
                <p>Plan diseñadro para aquellas personas que desean aprovechar su tiempo libre y aumentar sus ingresos, enfocado en el transporte de personas que ya se encuentran enlazadas a algún otro plan.</p>
                <ul class="list-inline">
                  <!-- <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li> -->
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Plan turista</h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/turismo.jpg" alt="">
                <p>Plan para personas que desean despreocuparse de sus transportes en el exterior; y así poder disfrutar de su estadía en otra parte del mundo.</p>
                <ul class="list-inline">
                  <!-- <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li> -->
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Plan global</h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/global.jpg" alt="">
                <p>Plan diseñado para aquellas personas que desean disfrutar de todos planes </p>
                <ul class="list-inline">
                  <!-- <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li> -->
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Salir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
<?php
}else{
  header('location:Login.php');
}
?>