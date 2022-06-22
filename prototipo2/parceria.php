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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./estilo2.css">

    <link rel="icon" href="fit.png">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/template-para-360.css">

</head>
<body>
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


                            <li class="scroll-to-section"><a href="sobre_nos.php" >Quem somos</a></li>


                            <li class="scroll-to-section"><a href="videos.php">Treinos</a></li>


                            <li class="scroll-to-section"><a href="360.php">Zona 360</a></li>


                            <li class="scroll-to-section"><a class="active" href="parceria.php">Parceiros</a></li> 



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
    </header><br><br><br><br>
    <!-- ***** Header Area End ***** -->


<!-- partial:index.partial.html -->
<div class="container">
	<article class="post"><br>
		<img width="660" height="478" src="unnamed.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">1 de dezembro 2021</time>
			<h1 class="post-title">SiteStar 9</h1>
			<p class="post-abstract">Uma iniciativa nacional que desafia a comunidade educativa à criação de espaços digitais criativos e inovadores com conteúdos em português, que utilizem o domínio.pt, durante o ano letivo de 2021/2022. </p>
			<div class="post-link-c">
				<a href="https://erte.dge.mec.pt/noticias/9a-edicao-do-sitestarpt" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>
	<article class="post"><br>
		<img width="660" height="478" src="Batalha.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">10 de dezembro 2021</time>
			<h1 class="post-title">Municipio da batalha</h1>
			<p class="post-abstract">A Batalha foi palco de grandes momentos históricos, desde a presença romana até às lutas decisivas pela independência, deixando um incontornável património cultural. </p>
			<div class="post-link-c">
				<a href="https://www.cm-batalha.pt/" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>

    <article class="post"><br>
		<img width="660" height="478" src="befit.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">24 de dezembro 2021</time>
			<h1 class="post-title">befit</h1>
			<p class="post-abstract">O befit é um excelente ginásio, espaço de musculação e peso livre com equipamento único e de última geração </p>
			<div class="post-link-c">
				<a href="https://be-fit.pt/befit/leiria" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>

    <article class="post"><br>
		<img width="660" height="478" src="escolabatalha.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">7 de dezembro 2021</time>
			<h1 class="post-title">Agrupamento de Escolas da Batalha</h1>
			<p class="post-abstract">Agrupamento de Escolas da Batalha. Oferta formativa de qualidade desde o Pré-escolar ao Ensino Secundário. Cursos Profissionais inovadores. </p>
			<div class="post-link-c">
				<a href="http://agbatalha.pt/" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>
	
</div>
<!-- partial -->
  
</body>

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
</html>
