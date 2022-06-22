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
						  <a href="index.php " class="logo" align="left">DIGITAL<em> PT</em>
							  <img src="assets/images/gym.svg" width="50" height=50" alt="" />
						  </a>
						  
						  <!-- ***** Logo End ***** -->
  
						  <!-- ***** Menu Start ***** -->
						  <ul class="nav">
							 <!--  <li class="scroll-to-section"><a href="#" class="active">Página Inicial</a></li>-->
							  <li class="scroll-to-section"><a href="sobre_nos.php">Quem somos</a></li>
							  <li class="scroll-to-section"><a class="active" href="videos.php">Treinos</a></li>
							  <li class="scroll-to-section"><a href="360.php">Zona 360ª</a></li>
							  <li class="scroll-to-section"><a href="parceria.php">Parceiros</a></li> 
							  <li class="scroll-to-section"><a href="admin\login.php">Admin</a></li>					  
							  
						  <?php
                                }else echo "<h1>Please login first .</h1>";
                            ?> 
                            <div class="dropdown">
                                
                            <button class="dropbtn"><?php echo $_SESSION["username"]; ?></button>
                            <div class="dropdown-content">
                            <a href="personal_info/personal_info.php">Conta</a>
                            <a href="#">Planos</a>
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
