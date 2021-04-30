<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT nombre, apellido, id, email, password, anio FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head> 
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 
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
          
         
          <?php if(!empty($user)): ?>

          <li class="drop-down "><a href="#">Perfil</a>
            <ul>                
                <li> Email: <?= $user['email']; ?></li>
                <li><br> Name:  <?= $user['nombre']; ?></li>
                <li><br> Surname: <?= $user['apellido']; ?></li>
                <li><br> Current year:  <?= $user['anio']; ?></li>
                <br>
                <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        
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
        </nav>

         <a href="buscar.html" class="get-started-btn">Buscar</a>

         <?php else: ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">SignUp</a></li>
      <?php endif; ?>
        </ul>
        

     
     

      <form action="/sessions/4" method="post">
        <input name="_method" type="hidden" value="delete">
        <input name="_csrf_token" type="hidden" value="JBxGTxkhJX09aUM+IjEVNwQHFF8jEAAAbPi+AtgRE+5sMuDRLfFmjg==">
      </form>
    </div>
    
  </header>
  <section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <?php if(!empty($user)): ?>
      <h1>Ingrese un número de <br> Historia Clínica</h1>
      <a href="buscar.html" class="btn-get-started">Ingresar</a>
      <?php else: ?>
      <h1>¡Buen día, enfermer@!</h1>
      <h2>Inicia sesión para conocer datos sobre las personas a tu cuidado</h2>
      <a href="login.php" class="btn-get-started">Ingresar</a>
      <?php endif; ?>
      

    </div>
  </section>

  <main id="main">

 
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
    <div class="container d-md-flex py-4">

      
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
    <div><a href="colaboradores.html" class="get-started-btn">Reconocimientos</a></div>
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