<?php 
session_start();
require_once("conexaobd.php");

//Verifica se o campo e-mail e senha for vazio
if(empty($_POST['email']) || empty(['senha'])){
    header('Location: adm_login.php'); //Fica no mesmo local
    exit();
}
//Passagem de usuário para verificação de segurança
$usuario = mysqli_real_escape_string($conn_periferia, $_POST['email']);
$senha = mysqli_real_escape_string($conn_periferia, $_POST['senha']);
//echo ($usuario); 
//echo ($senha);

$query = "SELECT * FROM tb_login WHERE email = '{$usuario}' AND senha = '{$senha}'";

$result = mysqli_query($conn_periferia, $query);

$row = mysqli_num_rows($result);

echo($row); 

//Condicional para autenticação em uma sessão
if($row == 1){
    $_SESSION['email'] = $usuario;
    header('Location: adm_lista.php');
} else{
    header('Location: adm_erro.php');
};




?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
    <h1></h1>
</body>
</html>