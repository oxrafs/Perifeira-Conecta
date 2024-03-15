<?php require_once("conexaobd.php"); ?>

<?php


//Consulta ao bd Areas
$query_rs_categoria = "SELECT * FROM tb_categorias ORDER BY categoria ASC";

//Executar a consulta
$rs_categoria = mysqli_query($conn_periferia, $query_rs_categoria) or die(mysqli_error($conn_periferia));

//Obter a linha de resultados
$row_rs_categoria = mysqli_fetch_assoc($rs_categoria);


//Total  de linhas da consulta
$totalRow_rs_categoria = mysqli_num_rows($rs_categoria);

//echo($totalRow_rs_categoria;

if(isset($_POST["nomeNegocio"]) && isset($_POST["enderecoNegocio"]) && isset($_POST["telNegocio"]) && isset($_POST["emailNegocio"]) && isset($_POST["redesSociais"]) && isset($_POST["descricaoNegocio"]) && isset($_POST["idCategorias"]) && isset($_FILES["imgNegocio"]) && isset($_POST["ativo"])) {

$nomeNegocio = $_POST['nomeNegocio']; 
$enderecoNegocio = $_POST['enderecoNegocio'];
$telNegocio = $_POST['telNegocio'];
$emailNegocio = $_POST['emailNegocio'];
$redesSociais = $_POST['redesSociais'];
$descricaoNegocio = $_POST['descricaoNegocio'];
$idCategorias = $_POST['idCategorias'];
$ativo = $_POST['ativo'];
    
    
$imgNegocio = $_FILES['imgNegocio'];
$imgNegocioNome = $imgNegocio['name'];
    
set_time_limit(0);  //tempo limite para execução 
$id_imgNegocio = "imgNegocio";
$imgNegocioNome = $_FILES[$id_imgNegocio]['name'];
$imgNegocioTemp = $_FILES[$id_imgNegocio]['tmp_name'];
move_uploaded_file($imgNegocioTemp, $dirUP.$imgNegocioNome);


    
    
$inserir = "INSERT INTO tb_negocio (idNegocio, nomeNegocio, enderecoNegocio, telNegocio, emailNegocio, redesSociais, descricaoNegocio, idCategorias, imgNegocio, ativo) VALUES (NULL, '$nomeNegocio', '$enderecoNegocio', '$telNegocio', '$emailNegocio', '$redesSociais', '$descricaoNegocio', '$idCategorias', '$imgNegocioNome', '$ativo')";

$resultado = mysqli_query($conn_periferia, $inserir);


if($resultado == true){
    echo('<script> alert("Dados inseridos com sucesso"); window.location.href ="adm_lista.php"; </script>');    
}else{
echo("Falha ao inserir");
};
    

};





?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PERIFERIA CONECTA</title>
</head>

<body>
    <h1>Inserir Projeto</h1>
    
    <form method="post" enctype="multipart/form-data" id="form_inserir">
    <input name="idNegocio" type="hidden" id="idNegocio">
    <br>
     
    Nome do projeto: <input name="nomeNegocio" type="text" id="nomeNegocio" size="30"> <br>
    <br>
    Endereço do projeto: <input name="enderecoNegocio" type="text" id="enderecoNegocio" size="50"> <br>
    <br>
    Telefone do projeto: <input type="number" id="telNegocio" name="telNegocio"> <br>
    <br>
    E=mail: <input name="emailNegocio" type="email" id="emailNegocio" size="50"> <br>
    <br>
    Redes Socias: <input type="text" id="redesSociais" name="redesSociais" size="50"> <br>
    <br> 
    Descrição:<br>  <textarea name="descricaoNegocio" cols="100" rows="10" id="descricaoNegocio"></textarea> <br>    
    <br>
    Categoria: 
    <select name="idCategorias" id="idCategorias">
        <?php do{ ?>
        <option value="<?php echo $row_rs_categoria['idCategorias']?>"><?php echo $row_rs_categoria['categoria']?></option>   
        <?php }while($row_rs_categoria = mysqli_fetch_assoc($rs_categoria));?>
    </select>  <br> <br>
    Img: <input name="imgNegocio" type="file" id="imgNegocio"> <br>
    <br>
    Ativo: <input name="ativo" type="hidden" id="ativo" value="0">
    <input name="ativo" type="checkbox" id="ativo" value="1" checked="checked"><br>    
    <br>

    <input type="submit">
    
        
    
     
    
    
    
    
    </form>

<?php 
 mysqli_free_result($rs_categoria);
    
 mysqli_close($conn_periferia);
?>
    

</body>
</html>