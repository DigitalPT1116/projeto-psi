<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DIGITAL PT</title>
  <link rel="icon" href="fit.png">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet"><link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'><link rel="stylesheet" href="videos.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/css/videos.css">
  <link rel="stylesheet" href="album/templatemo-training-studio.css">

</head>
<body>

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
							  <li class="scroll-to-section"><a href="sobre_nos_loggedout.php">Quem somos</a></li>
							  <li class="scroll-to-section"><a class="active" href="videos_loggedout.php">Treinos</a></li>
							  <li class="scroll-to-section"><a href="360_loggedout.php">Zona 360ª</a></li>
							  <li class="scroll-to-section"><a href="parceria_loggedout.php">Parceiros</a></li> 
							  <li class="main-button"><a href="login_registo/login.php">Login</a></li>
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
<!-- partial:index.partial.html -->
<div class="wrapper">
	<h1>Galeria de videos</h1>
	</div>

	<?php

// Connect to the MySQL database
$connect = mysqli_connect('localhost', 'root', '', 'pap');

// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}
?>

<?php

// Create a query
$query = 'SELECT id,title,link,tags
	FROM videos
	ORDER BY id';

// Execute the query
$result = mysqli_query($connect, $query);

// If there is no result, display an error message
if (!$result)
{
	echo 'Error Message: ' . mysqli_error($connect) . '<br>';
	exit;
}

// Loop through the records found
while ($record = mysqli_fetch_assoc($result))
{

	// echo 
	echo '<hr>';

	echo '<h2>'.$record['title'].'</h2>';

	echo '<br><br>';

	echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['link'].'?modestbranding=1" 
		rameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
		allowfullscreen></iframe>';

		echo '<h5>Tags: '.$record['tags'].'</h5>';

}

?>   
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

</body>
</html>
