<?php

//Métodos de conexão com BD mysqli, mysql e pdo


//Conexão local com Dreamweaver

$hostname_conn_periferia = "localhost";

$database_conn_periferia = "periferia_conecta";

$username_conn_periferia = "root";

$password_conn_periferia = "";

 

//Criando a conexão usando as variáveis

$conn_periferia = mysqli_connect($hostname_conn_periferia, $username_conn_periferia, $password_conn_periferia, $database_conn_periferia) or trigger_error(mysqli_errno(), e_user_error());

 

//Verificação da conexão

//echo("Conectado com sucesso");

 

$GLOBALS['dirUP'] = "imagens/upload/";
 

//Váriavel global do site

 

 

 

 

 

 

 

 

?>