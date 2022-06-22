<?php
session_start();
?>

<?php
if($_SESSION["username"]) {
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Digital PT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'><link rel="stylesheet" href="./estilo.css">

    <link rel="icon" href="fit.png">

      <!-- Additional CSS Files -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  
      <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
  
</head>
<body style="background-color:#171b23;">
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo" align="left">DIGITAL<em> PT</em>
                            <img src="assets/images/gym.svg" width="50" height=50" alt="" />
                        </a>
                        
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                           <!--  <li class="scroll-to-section"><a href="#" class="active">Página Inicial</a></li>-->
                            <li class="scroll-to-section"><a class="active" href="sobre_nos.php">Quem somos</a></li>
                            <li class="scroll-to-section"><a href="videos.php">Treinos</a></li>
                            <li class="scroll-to-section"><a href="360.php">Zona 360</a></li>
                            <li class="scroll-to-section"><a href="parceria.php">Parceiros</a></li> 
                            <?php
                                }else echo "<h1>Please login first .</h1>";
                            ?> 
                            <div class="dropdown">
                                
                            <button class="dropbtn"><?php echo $_SESSION["username"]; ?></button>
                            <div class="dropdown-content">
                            <a href="personal_info/personal_info.php">Conta</a>
                            <a href="#">Planos</a>
                            <a href="admin\login.php">Admin</a>
                            <a href="../login_novo/logout.php">Logout</a>
                            </div>
                            </div>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header><br><br><br>
    <!-- ***** Header Area End ***** -->

    <div id="about-main">
        <div class="jumbotron">
            <div class="jumbotron-inner">
                <div class="top-box">
                    <div class="content-box">
                        <h1>
                            Sobre Digital PT
                        </h1>
                        <p>
                           DigitalPT é o website destinado a musculação.  <br /> O nosso objetivo é ajudar e ensinar as pessoa a fazerem exercicio de musculação sozinhas e puderem criar as suas próprias playlists. Este projeto foi construido no ambito do SiteStar e no projeto de aptidao profissional.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section" id="schedule1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3"></div>
                </div>
                <div class="row"></div>
            </div>
        </section>

        <div class="story-container">
            <div class="need-for-dx-container">
                <h3 class="text-center">
                    Porque o digital PT ?
                </h3>
                <p>
                    Deve-nos escolher pois o nosso website é simples, intuitivo e profissional! Temos planos de treinos já construidos, imagens 360 para vizualisar melhor os ginásios e máquinas de musculação e cada pessoa pode criar o seu próprio plano de treino.
                </p><br><br><br><br>
               <!-- <div class="img-container">
                    <img src="https://apimatic.io/img/theme/aboutUs/dxFlow.svg" alt="apimatic developer experience process" class="img-responsive"/>
                </div>-->
            </div>
            <section class="section" id="schedule">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3"></div>
                    </div>
                    <div class="row"></div>
                </div>
            </section>
            <div class="container-divider"></div>
            <div class="our-tech-container">
                <h3 class="text-center">
                    Os nossos objetivos!
                </h3>
                <p>
                <li>  Temos como objetivo dar a conhecer como funciona o mundo da musculação;</li> 
                <li>  Ensinar a fazer musculação;</li> 
                <li>  Mostrar espaços de musculação de uma forma mais dinamica;</li> 
                </p>
                
            </div>
        </div>  
    </div>

        <!-- ***** Footer Start ***** -->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">&copy; Digital PT</p>
          
              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              </a>
          
              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Parceiros</a></li>
                <li class="nav-item"><a href="#our-classes" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#features" class="nav-link px-2 text-muted">Sobre</a></li>
              </ul>
            </footer>
          </div>
              <!-- ***** Footer Ends ***** -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="./script.js"></script>
    <!-- ***** Footer Ends ***** -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <style>
.dropbtn {
  background-color: #ed563b;
  color: white;
  padding: 11px 17px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  line-height: 20px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #ed563b;
}
</style>
</body>
</html>
