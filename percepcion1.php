<?php
error_reporting(0);
   require 'database.php';
   $array= ($_POST['Antecedentes']);
   $arreglo = implode(',',$array);
   
   $array1= ($_POST['Drogas']);
   $arreglo1 = implode(',',$array1);
   
   $array2= ($_POST['MedCual']);
   $arreglo2 = implode(',',$array2);

   

   $message='';
   
   $NumHistoria =  $_POST['NumHistoria'];
   $Antecedentes =  $arreglo;
   $Historial =  $_POST['Historial'];
   $FrecuenciaAnio =  $_POST['FrecuenciaAnio'];
   $Tabaquismo =  $_POST['Tabaquismo'];
   $TabxDia =  $_POST['TabxDia'];
   $TabCantAnio =  $_POST['TabCantAnio'];
   $Alcohol =  $_POST['Alcohol'];
   $AlcxDia =  $_POST['AlcxDia'];
   $AlcCantAnio =  $_POST['AlcCantAnio'];
   $Drogas =  $arreglo1;
   $DroFrecuencia =  $_POST['DroFrecuencia'];
   $DroCantAnio =  $_POST['DroCantAnio'];
   $Medicacion =  $_POST['Medicacion'];
   $MedCual = $arreglo2;
   $ComentarioAdc =  $_POST['ComentarioAdc'];

if(!empty($_POST['NumHistoria'])){
   $sql = "UPDATE p1percepcion SET Antecedentes = '$Antecedentes', Historial = '$Historial', FrecuenciaAnio = '$FrecuenciaAnio', Tabaquismo = '$Tabaquismo', TabxDia = '$TabxDia', TabCantAnio = '$TabCantAnio',
   Alcohol = '$Alcohol', AlcxDia = '$AlcxDia', AlcCantAnio = '$AlcCantAnio', Drogas = '$Drogas', DroFrecuencia = '$DroFrecuencia', DroCantAnio = '$DroCantAnio', Medicacion = '$Medicacion',
   MedCual = '$MedCual', ComentarioAdc = '$ComentarioAdc' WHERE NumHistoria = '$NumHistoria'";

 $stmt =  $conn->prepare($sql);

       if($stmt->execute()){
        $message =  'Los datos han sido cargados exitosamente';
       }
       else{
        $message = 'No se pudo crear el usuario, intentelo mas tarde';  
       }
       
    } 
    



?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PERCEPCIÓN / CUIDADO DE LA SALUD</title>
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
        <h2>PERCEPCIÓN / CUIDADOS DE LA SALUD</h2>
      </div>
    </div>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

      <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

 <form action="percepcion1.php" method="POST">

              <p>Tu N°Historia: <input type="number" name="NumHistoria"></p>
             
              <p>Antecedentes:
              <div class="checkbox">
                  <label><input type="checkbox" value="Diabetes" name="Antecedentes[]">Diabetes<br></label>
              </div>
              <div class="checkbox">
                  <label><input type="checkbox" value="Cardiovasculares"  name="Antecedentes[]">Cardiovasculares<br></label>
              </div> 
                  <input type="checkbox" value="Cardiovasculares"  name="Antecedentes[]">Cardiovasculares<br>
                  <input type="checkbox" value="Asma"  name="Antecedentes[]">Asma<br>
                  <input type="checkbox" value="Cancer" name="Antecedentes[]">Cáncer<br>
                  <input type="checkbox" value="EPOC" name="Antecedentes[]">EPOC<br>
                  <input type="checkbox" value="Otros" name="Antecedentes[]">Otros
                
              </p>
              
          
              
                
                <label for="Nconsultas">¿Posee historial de consultas médicas periódicas?</label>
                <select class="form-control" id="Nconsultas" name="Historial">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

                Frecuencia (Cantidad por año): <input type="number" name="FrecuenciaAnio"><br><br>
              

              
                
                <label for="tabaco">Tabaquismo: </label>
                <select class="form-control" id="tabaco" name="Tabaquismo">
                    <option>Si</option>
                    <option>No</option>
                </select>
                         ¿Cigarillos por dia?: <input type="number" name="TabxDia">
                         ¿Desde cuantos años?: <input type="number" name="TabCantAnio"><br><br>
              

                 
                
                <label for="alcohol">¿Consume bebidas alcoholicas?: </label>
                <select class="form-control" id="alcohol" name="Alcohol">
                    <option>Si</option>
                    <option>No</option>
                </select>
                         ¿Litros por dia?: <input type="number" name="AlcxDia">
                         ¿Desde cuantos años?: <input type="number" name="AlcCantAnio"><br><br>
             


                  ¿Consume drogas?:<br>
                  <input type="checkbox" value="Ninguna" name="Drogas[]">Ninguna<br>
                  <input type="checkbox" value="Marihuana" name="Drogas[]">Marihuana<br>
                  <input type="checkbox" value="Cocaina" name="Drogas[]">Cocaina<br>
                  <input type="checkbox" value="Extasis" name="Drogas[]">Extasis<br>
                  <input type="checkbox" value="Otras" name="Drogas[]">Otras<br><br>


              <label>Cuanto (Según la de mayor uso)</label>
                <select class="form-control" id="TimeUso2" name="DroFrecuencia">
                    <option value="Todos los dias">Todos los dias</option>
                    <option value="Semanalmente">Semanalmente</option>
                    <option value="Ocasionalmente">Ocasionalmente</option>
                    <option value="Nunca">Nunca</option>
                </select>

                Desde cuantos años?: <input type="number" name="DroCantAnio"><br><br>
           

            
                <label>¿En su domicilio toma alguna medicación indicada por el medico ?: </label>
                <select class="form-control" id="medicina" name="Medicacion">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <br><br>


                ¿Cuál/es?:<br><br>
                  <input type="checkbox" value="Antihipertensivos" name="MedCual[]">Antihipertensivos<br>
                  <input type="checkbox" value="Antidiabeticos" name="MedCual[]">Antidiabeticos<br>
                  <input type="checkbox" value="Diureticos" name="MedCual[]">Diureticos<br>
                  <input type="checkbox" value="Antinflamatorios" name="MedCual[]">Antinflamatorios<br>
                  <input type="checkbox" value="Broncodilatores" name="MedCual[]">Broncodilatores<br>
                  <input type="checkbox" value="ATB" name="MedCual[]">ATB<br>
                  <input type="checkbox" value="Hormona Tiroides" name="MedCual[]">Hormona tiroides<br>
                  <input type="checkbox" value="Para el colesterol" name="MedCual[]">Para el colesterol<br>
                  <input type="checkbox" value="Antiarritmicos" name="MedCual[]">Antiarritmicos<br>
                  <input type="checkbox" value="Anti anginosos" name="MedCual[]">Anti anginosos<br>
                  <input type="checkbox" value="Otros" name="MedCual[]">Otros<br><br>
            

            
            
                <label >Comentario:</label><br>
                <textarea class="form-control" id="Comentario" rows="3"  name="ComentarioAdc"  value="{{ComentarioAdc}}"></textarea>

                <p><button type="submit" class="get-started-btn">Enviar</button></p>
</form>

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
