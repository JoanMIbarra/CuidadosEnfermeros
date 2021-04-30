<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NUTRICIONAL/METABOLICO</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">UNMDP</a></h1>
     
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Inicio</a></li>
        
           <li class="drop-down"><a href="#">Patrones de la salud</a>
           <ul>
           <li><a href="formulario.php">Datos generales</a></li>
                  <li><a href="percepcion1.php">1. Percepción / Cuidados de la salud</a></li>
                  <li><a href="actividad2.html">2. Actividad física / Ejercicio </a></li>
                  <li><a href="nutricional3.php">3. Nutricional / Metabólico </a></li>
                  <li><a href="eliminacion4.html">4. Eliminacion</a></li>
                  <li><a href="sueño5.html">5. Sueño / Descanso </a></li>
                  <li><a href="cognitivo6.html">6. Cognitivo / Perceptivo</a></li>
                  <li><a href="autopercepcion7.html">7. Autopercepción / Autoconcepto </a></li>
                  <li><a href="relaciones8.html">8. Rol / Relaciones </a></li>
                  <li><a href="adaptacion9.html">9. Adaptación / Tolerancia al stress</a></li>
                  <li><a href="sexualidad10.html">10. Sexualidad / Reproducción </a></li>
                  <li><a href="valores11.html">11. Valores / Creencias</a></li>
                  <li><a href="comentarios.html">Observaciones</a></li>
              </ul>
            </li>
        </ul>
        

      </nav>
      <a href="buscar.html" class="get-started-btn">Buscar</a>
      <form action="/sessions/4" method="post">
        <input name="_method" type="hidden" value="delete">
        <input name="_csrf_token" type="hidden" value="JBxGTxkhJX09aUM+IjEVNwQHFF8jEAAAbPi+AtgRE+5sMuDRLfFmjg==">
      </form>
    </div>
    
  </header>
  <main id="main">
    
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>NUTRICIONAL/METABOLICO</h2>
      </div>
    </div>

   
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

<form action="formulario.php" method="POST">

                <div class="form-group">
                <p><h3>Patrón habitual (En su domicilio)</h3></p>   
          <br>
                    <label>Horario de las comidas: </label>
                    <select class="form-control" id="horacomida" name="horacomida">
                        <option value="Irregular">Irregular</option>
                        <option value="Regular">Regular</option>
                        <option value="Otro">Entre horas</option>
                  </select><br>
              
                    <label >Ingesta de líquidos (aproximadamente):</label>
                    <select class="form-control" id="liquidos" name="liquidoinfo">
                        <option value="menoslt">Menos de 1lt</option>
                        <option value="regularlt">1 a 1lt</option>
                        <option value="maslt">Mas de 2lts</option>
                  </select><br>
              
                    <label >Calidad:</label>
                    <select class="form-control" id="bebidas" name="bebidainfo">
                        <option value="Agua">Agua</option>
                        <option value="Jugos">Jugos</option>
                        <option value="Mate">Mate</option>
                         <option value="Te">Te</option>
                          <option value="Gaseosas">Bebidas gaseosas</option>
                           <option value="Alcohol">Bebidas alcoholicas</option>
                  </select><br>
              
                
                     
              <label>¿Dietas específicas?: </label>
                <select class="form-control" id="dieta" name="Dietita">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <br>


                ¿Cuál/es?:<br>
                  <input type="checkbox" value="Hiposodica" name=" ">Hiposodica<br>
                  <input type="checkbox" value="Adelgazar" name=" ">Para adelgazar<br>
                  <input type="checkbox" value="Vegana" name=" ">Vegana<br>
                  <input type="checkbox" value="Vegetariana" name=" ">Vegetariana<br>
                  <input type="checkbox" value="Otra" name=" ">Otra<br>
                  <br>

                      <label>Intolerancia alimenticia</label>
                <select class="form-control" id="Alimentos" name="IntoAlimen">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <br>

                ¿A qué?:<br>
                  <input type="checkbox" value="Grasas" name=" ">Grasas<br>
                  <input type="checkbox" value="Leche" name=" ">Leche<br>
                  <input type="checkbox" value="Picantes" name=" ">Picantes<br>
                  <input type="checkbox" value="Otros" name=" ">Otros<br>
                <br>
              <label>¿Cambios de peso en el ultimo mes?: </label>
                <select class="form-control" id="peso" name="Pesaje">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <br>


              <label >¿Cuanto?</label>
                    <select class="form-control" id="cambiospeso" name="Pesoact">
                        <option value="BajoMas">Bajo más de 5kg</option>
                        <option value="Bajo">Bajo hasta 5kg</option>
                        <option value="Aumento">Aumento 5kg</option>
                         <option value="AumentoMas">Aumento más de 5kg</option>
                  </select><br>
                  
                  <p><h3>Patrón actual </h3></p>
          <br>
                   <p>Talla (mt): <input type="number" name="aproxtalla"> </p>
                    <p>Peso (kg): <input type="number" name="aproxpeso"> </p>
                     <p>IMC: <input type="number" name="IMC"> </p>

                      <br>
                      ¿Presencia de?:<br>
                  <input type="checkbox" value="Nauseas" name=" ">Nauseas<br>
                  <input type="checkbox" value="Vomitos" name=" ">Vómitos<br>
                  <input type="checkbox" value="Disfagia" name=" ">Disfagia<br>
                  <input type="checkbox" value="Anorexia" name=" ">Anorexia<br>
                  <br>

              <label>Estado e higiene de la cavidad bucal:</label>
                    <select class="form-control" id="estadoboca" name="CavidadBucal">
                        <option value="BuenoB">Bueno</option>
                        <option value="RegularB">Regular</option>
                        <option value="MaloB">Malo</option>
                  </select><br>

                          <label >Problemas bucales:</label>
                    <select class="form-control" id="prombucal" name="ProblemaBucal">
                        <option value="FaltadePiezas">Faltan piezas dentales</option>
                        <option value="ProtesisDental">Prótesis dental</option>
                  </select><br>

              <label>Estado e higiene de la piel:</label>
                    <select class="form-control" id="estadopiel" name="Piel">
                        <option value="BuenoP">Bueno</option>
                        <option value="RegularP">Regular</option>
                        <option value="MaloP">Malo</option>
                  </select><br>


              <label >Piel:</label>
                    <select class="form-control" id="tipopiel" name="InfoPiel">
                         <option value="Flexible">Flexible</option>
                         <option value="Frágil">Frágil</option>
                        <option value="Deshidrata">Deshidratada</option>
                  </select><br>

              <label>UPP(1)</label>
                    <select class="form-control" id="upp1" name="upp1">
                        <option value="TalonDe1">Talón Derecho</option>
                        <option value="TalonIz1">Talón izquierdo</option>
                        <option value="SacroDe1">Sacro derecho</option>
                        <option value="SacroIz1">Sacro izquierdo</option>
                        <option value="EscapularDe1">Escapular derecho</option>
                        <option value="EscapularIz1">Escapular izquierdo</option>
                        <option value="Otra1">Otra</option>
                  </select><br>
                    <p>Extension (cm x cm)(1)<input type="number" name="extension1"> </p>
              <label >Estadio (1)</label>
                    <select class="form-control" id="estadio1" name="estadio1">
                        <option value="estadio11">I</option>
                        <option value="estadio12">II</option>
                        <option value="estadio13">III</option>
                        <option value="estadio14">IV</option>
                  </select><br><br>


              <label>UPP(2)</label>
                    <select class="form-control" id="upp2" name="upp2">
                        <option value="TalonDe2">Talón Derecho</option>
                        <option value="TalonIz2">Talón izquierdo</option>
                        <option value="SacroDe2">Sacro derecho</option>
                        <option value="SacroIz2">Sacro izquierdo</option>
                        <option value="EscapularDe2">Escapular derecho</option>
                        <option value="EscapularIz2">Escapular izquierdo</option>
                        <option value="Otra2">Otra</option>
                  </select><br>
                    <p>Extension (cm x cm)(2)<input type="number" name="extension2"> </p>
              <label >Estadio (2)</label>
                    <select class="form-control" id="estadio2" name="estadio2">
                        <option value="estadio21">I</option>
                        <option value="estadio22">II</option>
                        <option value="estadio23">III</option>
                        <option value="estadio24">IV</option>
                  </select><br><br>



              <label>UPP(3)</label>
                    <select class="form-control" id="upp3" name="upp3">
                        <option value="TalonDe3">Talón Derecho</option>
                        <option value="TalonIz3">Talón izquierdo</option>
                        <option value="SacroDe3">Sacro derecho</option>
                        <option value="SacroIz3">Sacro izquierdo</option>
                        <option value="EscapularDe3">Escapular derecho</option>
                        <option value="EscapularIz3">Escapular izquierdo</option>
                        <option value="Otra3">Otra</option>
                  </select><br>
                    <p>Extension (cm x cm)(3)<input type="number" name="extension3"> </p>
              <label >Estadio (3)</label>
                    <select class="form-control" id="estadio3" name="estadio3">
                        <option value="estadio31">I</option>
                        <option value="estadio32">II</option>
                        <option value="estadio33">III</option>
                        <option value="estadio34">IV</option>
                  </select><br>

              <label>¿Otras lesiones?:</label>
                <select class="form-control" id="lesiones" name="Lesion">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
              <label for="Comentario">Localización:</label>
                                <textarea class="form-control" id="lesionlugar" rows="3" name="LocalizacionLesion"></textarea>
              


              <label>Prurito:</label>
                <select class="form-control" id="prurito" name="Prurito">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

              <label>¿Edemas?</label>
                <select class="form-control" id="edemas" name="Edema">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                ¿Dónde?:<br><br>
                  <input type="checkbox" value="Sacroede" name=" ">Sacro<br>
                  <input type="checkbox" value="Pretibiales" name=" ">Pretibiales<br>
              <label>Grado</label>
                    <select class="form-control" id="grado" name="grado">
                        <option value="grado1">+</option>
                        <option value="grado2">++</option>
                        <option value="grado3">+++</option>
                        <option value="grado4">++++</option>
                  </select><br>

                      <p>Temperatura: <input type="number" name="temperatura"> </p>

                                <label for="Comentario">Comentario Adicional:</label>
                                <textarea class="form-control" id="Comentario" rows="3" name="ComentarioAdc"></textarea>
                                </div>
          
                           <p><button type="submit" class="get-started-btn">Enviar</button></p>
</form>
</div>
<?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>  
      </div>
    </section>

    <div class="container d-md-flex py-4">

      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>