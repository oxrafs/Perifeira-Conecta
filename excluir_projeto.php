<?php 
require("conexaobd.php");

$idNegocio = isset($_GET['idNegocio']) ? $_GET['idNegocio'] : null;


if ($idNegocio !== null) {
    
    $query_rs_img = "SELECT * FROM tb_negocio WHERE idNegocio = $idNegocio";
    $rs_img = mysqli_query($conn_periferia, $query_rs_img) or die(mysqli_error($conn_periferia));
    $row_rs_img = mysqli_fetch_assoc($rs_img);

    
    if ($row_rs_img) {
        unlink($dirUP . $row_rs_img['imgNegocio']);
    }

    
    $query_rs_negocio = "DELETE FROM tb_negocio WHERE idNegocio = $idNegocio";
    $rs_negocio = mysqli_query($conn_periferia, $query_rs_negocio) or die(mysqli_error($conn_periferia));

    if ($rs_negocio) {
        echo('<script> alert("Excluído com sucesso"); window.location.href ="adm_lista.php"; </script>');    
    } else {
        echo("Falha ao excluir");
    };
} else {
    echo("ID de projeto não fornecido");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PERIFERIA CONECTA</title>
</head>
<body>
    <h1>Excluir Projeto</h1>
</body>
</html>
