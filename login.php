<?php
error_reporting(0);
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /pf/index.php');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT nombre, apellido, id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: /ProyectoFinal/index.php");
  } else {
    $message = 'Sorry, those credentials do not match';
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Iniciar sesión</title>
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
          <li class="active"><a href="signup.php">Registrarse</a></li>
        </ul>
        

      </nav>
      <form action="/sessions/4" method="post">
        <input name="_method" type="hidden" value="delete">
        <input name="_csrf_token" type="hidden" value="JBxGTxkhJX09aUM+IjEVNwQHFF8jEAAAbPi+AtgRE+5sMuDRLfFmjg==">
      </form>
    </div>
    
  </header>

  <main id="main">
    
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Iniciar</h2>
        <p>Solo debes ingresar tu usuario y tu contraseña que ingresaste en los campos de la pagina registrar. </p>
      </div>
    </div>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/course-details-tab-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">



            <h3>Iniciar sesión</h3>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label><strong>Email</strong></label>
                      <input type="email" class="form-control" name="email">
                    <br>
                    <label><strong>Contraseña:</strong></label>
                      <input type="password" class="form-control" name="password">
                    <br>
                </div>
                <p><button type="submit" class="get-started-btn">Enviar</button></p>
            </form>
            
          </div>
        </div>
       <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
      </div>
    </section>

    

  </main>

  
  
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