<?php
error_reporting(0);
require 'database.php';
   $array = ($_POST['MotivoIngreso']);
   $arreglo = implode(',', $array);

   $message='';
   
   if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['NumHistoria']) && !empty($_POST['genero'])
	&& !empty($_POST['residencia']) && !empty($_POST['lugarActual']) && !empty($_POST['FechaIngreso']) && !empty($_POST['ComentarioAdc'])
    ){
       $sql = "INSERT INTO datosgenerales (nombre, apellido, NumHistoria, genero, residencia, lugarActual, FechaIngreso, FechaValoracion, MotivoIngreso, ComentarioAdc) 
	   VALUES (:Nombre, :Apellido, :NumHistoria, :Genero, :Residencia, :LugarActual, :FechaIngreso, :FechaValoracion, :MotivoIngreso, :ComentarioAdc)";
	
	   $stmt =  $conn->prepare($sql);
	   
       $stmt->bindParam(':Nombre', $_POST['nombre']);
	   $stmt->bindParam(':Apellido', $_POST['apellido']);
	   $stmt->bindParam(':NumHistoria', $_POST['NumHistoria']);
	   $stmt->bindParam(':Genero', $_POST['genero']);
	   $stmt->bindParam(':Residencia', $_POST['residencia']);
	   $stmt->bindParam(':LugarActual', $_POST['lugarActual']);
	   $stmt->bindParam(':FechaIngreso', $_POST['FechaIngreso']);
	   $stmt->bindParam(':FechaValoracion', $_POST['FechaValoracion']);
	   $stmt->bindParam(':MotivoIngreso', $arreglo);
	   $stmt->bindParam(':ComentarioAdc', $_POST['ComentarioAdc']);
	   

       if($stmt->execute()){
        $message =  'Los datos han sido cargados exitosamente';
       }
       else{
        $message = 'No se pudo crear el usuario, intentelo mas tarde';  
       }
	}    

	if (isset($_POST['MotivoIngreso'])) 
{
    print_r($_POST['MotivoIngreso']); 
}
		
	 

	

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DATOS GENERALES</title>
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
        <h2>DATOS GENERALES</h2>
      </div>
    </div>
  
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

<form action="formulario.php" method="POST">
                <div class="form-group">
                    <label>Nombre y Apellido (Iniciales):</label>
                                    <input type="text" class="form-control" placeholder="Martín" name="nombre">
                                    <br>
                  
                    <p>Tu edad: <input type="number" name="edad"> </p>
                  

                    <label>Sexo:</label>
                    
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Indefinido">Indefinido</option>
                  </select><br>

                    <label>Identidad autopercibida de género:</label>

                    <select class="form-control" id="genero" name="genero">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                  </select><br>
              
                    <label >Domicilio de residencia:</label>
                    <select class="form-control" id="domicilio" name="residencia">
                        <option value="Mar del plata">Mar del Plata ciudad</option>
                        <option value="Batan">Batan</option>
                        <option value="Sierra de los padres">Sierra de los Padres</option>
                        <option value="Rural">Rural</option>
                        <option value="Otra ciudad">Otra ciudad</option>
                  </select><br>
              
  
                    <label for="lugar">Lugar de la valoración actual:</label>
                    <select class="form-control" id="lugar" name="lugarActual">
                        <option value="Domicilio" >Domicilio</option>
                        <option value="Residencia adultos mayores">Residencia adultos mayores</option>
                        <option value="CAPS">CAPS</option>
                        <option value="Servicio de internacion">Servicio de internacion</option>
                    </select><br>
                           
                      <label for="start">Fecha de Ingreso:</label>
                  <input type="date" id="start" name="FechaIngreso"
                    value="2020-09-28"
                    min="1950-01-01" max="2050-09-30"><br>
              
                           <label for="start">Fecha de Valoracion:</label>
                 <input type="date" id="start" name="FechaValoracion"
                      value="2020-09-28"
                      min="2020-01-01" max="2050-09-30"><br>

                   <label >Motivo ingreso<br>
                   <input type="checkbox" value="Enf.Respiratoria" name="MotivoIngreso[]">Enfermedad Respiratoria<br>
                  <input type="checkbox" value="Cardiovascular" name="MotivoIngreso[]">Cardiovascular<br>
                  <input type="checkbox" value="Diabetes" name="MotivoIngreso[]">Diabetes<br>
                  <input type="checkbox" value="Traumatismos" name="MotivoIngreso[]">Traumatismos<br>
                  <input type="checkbox" value="ACV" name="MotivoIngreso[]">ACV<br>
                  <input type="checkbox" value="Cirugia" name="MotivoIngreso[]">Cirugía<br>
                  <input type="checkbox" value="Enf.Digestivas" name="MotivoIngreso[]">Enfermedades Digestivas<br>
                  <input type="checkbox" value="Cancer" name="MotivoIngreso[]">Cancer<br>
                <input type="checkbox" value="Otro" name="MotivoIngreso[]">Otro</input><br>
                
                  </label>
                  <br>
        
                                <label for="Comentario">Comentario Adicional:</label>
                                <textarea class="form-control" id="Comentario" rows="3" name="ComentarioAdc"></textarea>
                                </div>
          
                           <p><button type="submit" class="get-started-btn">Enviar</button></p>
</form>
</div>  
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
<?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>  
</body>

</html>

