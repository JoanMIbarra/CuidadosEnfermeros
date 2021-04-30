<?php
error_reporting(0);
require 'database.php';
$message='';

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email'])   && !empty($_POST['anio']) && !empty($_POST['password']) && $_POST['password']==$_POST['Confirm_password'] ){
$sql = "INSERT INTO users(nombre, apellido, email, anio, password) values (:nombre,:apellido, :email, :anio,:password)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nombre', $_POST['nombre']);
$stmt->bindParam(':apellido', $_POST['apellido']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':anio', $_POST['anio']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$stmt->bindParam(':password', $password);


if($stmt->execute()){
    $message =  'Successfull Created New User';
   }
   else{
    $message = 'Sorry there must have been an issue creating your password';  
   }
}
if($_POST['password'] !== $_POST['Confirm_password']){
   $message = 'No se pudo crear el usuario, las contraseñas no son iguales';
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrate</title>
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
  <script src="assets/js/Comprobar.js"></script>
  
</head>

<body>

 
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">UNMDP</a></h1>
     

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Inicio</a></li>
        </ul>

      </nav>

      <a href="login.php" class="get-started-btn">Iniciar sesión</a>
      <form action="/sessions/4" method="post">
        <input name="_method" type="hidden" value="delete">
        <input name="_csrf_token" type="hidden" value="JBxGTxkhJX09aUM+IjEVNwQHFF8jEAAAbPi+AtgRE+5sMuDRLfFmjg==">
      </form>
    </div>
    
  </header>
  <main id="main">
    
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Registrarse</h2>
        <p>La opcion de registrarse solo sera usada una vez con la cuenta que elijas</p>
      </div>
    </div>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">


            <h3>Registrate</h3>


            <form name="registro" action="signup.php" method="POST">

                   <label><strong>Nombre</strong></label>
                      <input type="text" class="form-control" name="nombre">
                    <br>
                    <label><strong>Apellido</strong></label>
                      <input type="text" class="form-control" name="apellido">
                    <br>
                    <label><strong>Año</strong></label>
                      <input type="n
                      umber" class="form-control" name="anio">
                    <br>
                    <label><strong>Email</strong></label>
                      <input type="email" class="form-control" name="email">
                    <br>
                    <label><strong>Contraseña:</strong></label>
                      <input type="password" class="form-control" name="password">
                    <br>
                    <label><strong>Confirmar contraseña</strong></label>
                      <input type="password" class="form-control" name="Confirm_password">
                    <br>
                    <p><button type="submit" class="get-started-btn" onClick="comprobarClave()">Enviar</button></p> 
            </form >
            <?php if(!empty($message)): ?>
            <p><?= $message ?></p>
            <?php endif; ?>  


                </div>
            

          </div>
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

</body>

</html>