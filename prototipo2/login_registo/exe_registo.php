<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="app.css">
<title>Exercicio 5</title>
</head>
<body>
<?php

// acesso á Base de Dados
$servidor="localhost";
$utilizador="root";
$password="";
$basedados="pap";

$ligacao= new mysqli($servidor,$utilizador,$password,$basedados);

if($ligacao->connect_errno) {
    echo"problemas de ligação:(".$ligacao->connect_errno.")".$ligacao->connect_error;
    exit();
}
else
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $dateofbirth=$_POST['dateofbirth'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $consulta = "INSERT INTO users(id, username, fullname, dateofbirth, email, password) VALUES ('$id','$username','$fullname','$dateofbirth','$email','$password')";
    $resultado = $ligacao->query($consulta);

    echo "OS Dados foram adicionados Corretamente";
}
?>
</body>
</html>