<?php
session_start();
?>

<?php
if($_SESSION["username"]) {
?>

<!DOCTYPE html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="icon" href="fit.png">
<title>DIGITAL PT</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"

        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" type="text/css" href="360/assets/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css" href="360/assets/css/font-awesome.css">



    <link rel="stylesheet" href="360/assets/css/template-para-360.css">

</head>



<body>



      <!--  Header Area Start  -->

  <header class="header-area header-sticky">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <nav class="main-nav">

                    <!--  Logo Start  -->

                    <a href="index.php" class="logo" align="left">DIGITAL<em> PT</em>

                        <img src="360/assets/images/gym.svg" width="50" height=50" alt="" />

                    </a>



                    <!--  Logo End  -->

                    <!--  Menu Start  -->

                    <ul class="nav">

                      <li class="scroll-to-section"><a href="sobre_nos.php" >Quem somos</a></li>

                      <li class="scroll-to-section"><a href="videos.php">Treinos</a></li>

                      <li class="scroll-to-section"><a  class="active" href="360.php">Zona 360</a></li>

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

                    <!--  Menu End  -->

                </nav>

            </div>

        </div>

    </div>

</header><br><br><br><br>

<!--  Header Area End  -->

<div class="content">

<h1>Vídeo 1 ginásio batalha - outdoor</h1> 



</div>

<iframe width="90%" height="500px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; max-width:880px;border-radius:8px; box-shadow: 0 1px 1px rgba(0,0,0,0.11),0 2px 2px rgba(0,0,0,0.11),0 4px 4px rgba(0,0,0,0.11),0 6px 8px rgba(0,0,0,0.11),0 8px 16px rgba(0,0,0,0.11);" src="https://momento360.com/e/u/f68ceb4265ca4791b9f2f2771a3af816?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium"</iframe></iframe>

<h1>Vídeo 2 ginásio batalha - outdoor</h1> 

<iframe width="90%" height="500px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; max-width:880px;border-radius:8px; box-shadow: 0 1px 1px rgba(0,0,0,0.11),0 2px 2px rgba(0,0,0,0.11),0 4px 4px rgba(0,0,0,0.11),0 6px 8px rgba(0,0,0,0.11),0 8px 16px rgba(0,0,0,0.11);" src="https://momento360.com/e/u/6a3636748bcf4ac6a791a80e2aa11711?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium"</iframe></iframe>

<h1>Vídeo 3 ginásio batalha - outdoor</h1> 

<iframe width="90%" height="500px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; max-width:880px;border-radius:8px; box-shadow: 0 1px 1px rgba(0,0,0,0.11),0 2px 2px rgba(0,0,0,0.11),0 4px 4px rgba(0,0,0,0.11),0 6px 8px rgba(0,0,0,0.11),0 8px 16px rgba(0,0,0,0.11);" src="https://momento360.com/e/u/8ae0aa18af6c4a28aed5b890b578a37d?utm_campaign=embed&utm_source=other&heading=-4.8&pitch=4&field-of-view=75&size=medium"</iframe></iframe>





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