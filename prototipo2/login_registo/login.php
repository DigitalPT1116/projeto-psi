<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','pap') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["fullname"] = $row['fullname'];
        $_SESSION["dateofbirth"] = $row['dateofbirth'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
        } else {
         //$message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:../index.php");
    }
?>
<html>
<head>
<title>Login utilizador</title>

<style>
      body{ font: 14px sans-serif; }
        .wrapper{ width: 860px; padding: 200px; margin: auto; }

body {
    background-color: #303641;
}

h1 {
color: #fff
}
    input[type=text] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=password] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
    color: #fff;
    font: 17px sans-serif;
    text-transform: uppercase;
}

input[type=submit] {
   
    width: 20%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ed563b;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    background-color: #ed563b;
    color: #fff;
}

input[type=reset] {
   
   width: 20%;
   height: calc(1.5em + 0.75rem + 2px);
   padding: 0.375rem 0.75rem;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #ed563b;
   border-radius: 0.25rem;
   transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   background-color: #ed563b;
    color: #fff;
}

button[type=submit] {
    width: 20%;
   height: calc(1.5em + 0.75rem + 2px);
   padding: 0.375rem 0.75rem;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #ed563b;
   border-radius: 0.25rem;
   transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   background-color: #ed563b;
    color: #fff;
}

</style>
</head>
<body>

<div class="wrapper">
<form name="frmUser" method="post" action="" align="center">
<form action="../index.php" method="post" >

<div class="form-group">
<?php if($message!="") { echo $message; } ?>
<h1 align="center">Login</h1>

 <input type="text" name="username" placeholder="Username"  />
 </div>

 <div class="form-group">
 
 
 <input type="password" name="password" placeholder="Password"  />
</div>

<br>

<div class="form-group">
<input type="submit" name="submit" value="Login">
<button type="submit" formaction="registo.php">Registar</button>
</div>

<br>

<div class="form-group">

<button type="submit" formaction="../index_loggedout.php">Voltar</button>
</div>

</form>
</form>
</body>
</html>
