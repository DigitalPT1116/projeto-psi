<?php
session_start();
?>
<?php
if($_SESSION["username"]) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Informações pessoais</title>
    <link rel="stylesheet" href="personal_info.css">
    <link rel="stylesheet"
    href="fontawesome/css/all.css">
</head>
<body>

    <div class="container">
        <div class="leftbox">
            <nav> 
                <a onclick="tabs(0)"
                class="tab active"></a>
                    <i class="fa fa-user"></i>
                </a>
            </nav>
        </div>
        <div class="row">
        <div class="rightbox">
            <div class="profile tabShow">
            <h1>Informações pessoais</h1>   
            <h2>Nome Completo</h2> 
            <input type="text"
            class="input" value="<?php echo $_SESSION["fullname"]; ?>">
            <h2>Username</h2> 
            <input type="text"
            class="input" value="<?php echo $_SESSION["username"]; ?>">
            <h2>Data de nascimento</h2> 
            <input type="text"
            class="input" value="<?php echo $_SESSION["dateofbirth"]; ?>">
            <h2>Email</h2> 
            <input type="text"
            class="input" value="<?php echo $_SESSION["email"]; ?>">
            <h2>Password</h2> 
            <input type="password"
            class="input" value="<?php echo $_SESSION["password"]; ?>">

            <!--<button class="btn" id="botao1">Atualizar</button>-->
            <button class="btn" id="botao2">Voltar</button> 
        </div>
        <?php
}else echo "<h1>Please login first .</h1>";
?>

        </div>

    </div>
</div>
<script type="text/javascript">
    document.getElementById("botao2").onclick = function () {
        location.href = "../index.php";
    };
</script>
</body></html>