<?php require_once("conexaobd.php") ?>
<?php
 
 $idNegocio = isset($_GET['idNegocio']) ? $_GET['idNegocio'] : null;




if(isset($_POST['submit'])){
    $idNegocio = $_POST['idNegocio'];
    $nomeNegocio = $_POST['nomeNegocio'];   
    $enderecoNegocio = $_POST['enderecoNegocio'];
    $telNegocio = $_POST['telNegocio'];
    $emailNegocio = $_POST['emailNegocio'];
    $redesSociais = $_POST['redesSociais'];
    $descricaoNegocio = $_POST['descricaoNegocio'];
    $idCategorias = $_POST['idCategorias'];
    $ativo = isset($_POST['ativo']) && $_POST['ativo'] == '1' ? 1 : 0;
    
    
    $imgNegocio = $_FILES['imgNegocio'];
    $imgNegocioNome = $imgNegocio['name'];
    
    set_time_limit(0);  //tempo limite para execução 
    $id_imgNegocio = "imgNegocio";
    $imgNegocioNome = $_FILES[$id_imgNegocio]['name'];
    $imgNegocioTemp = $_FILES[$id_imgNegocio]['tmp_name'];
    move_uploaded_file($imgNegocioTemp, $dirUP.$imgNegocioNome);

    
    //gravando o nome da imagem no bd
    $imgNegocio = $_FILES['imgNegocio'];
    $imgNegocioNome = $imgNegocio['name'];

    //upload das imagens
    set_time_limit(0);  //tempo limite para execução 
    $id_imgNegocio = "imgNegocio";
    $imgNegocioNome = $_FILES[$id_imgNegocio]['name'];
    //corrigindo erro de upload
    if($imgNegocioNome != ''){
    //excluir o arquivo de img
    unlink($dirUP.$_REQUEST['imgNegocioG']);
    $imgNegocioTemp = $_FILES[$id_imgNegocio]['tmp_name'];
    move_uploaded_file($imgNegocioTemp,$dirUP.$imgNegocioNome);
    }  else{
    $imgNegocioNome = $_REQUEST['imgNegocioG'];
    }
    
$ativo = isset($_POST['ativo']) && $_POST['ativo'] == '1' ? 1 : 0;

$editar = "UPDATE tb_negocio SET nomeNegocio = '$nomeNegocio', enderecoNegocio = '$enderecoNegocio', emailNegocio = '$emailNegocio', redesSociais = '$redesSociais', descricaoNegocio = '$descricaoNegocio', idCategorias = '$idCategorias', imgNegocio = '$imgNegocioNome', ativo = '$ativo' WHERE tb_negocio.idNegocio = $idNegocio";
//Executar o update
$resultado = mysqli_query($conn_periferia, $editar) or die(mysqli_error($conn_periferia));


//Verificar se deu certo o resultado de editar e redirecionar para a lista de produtos
if(!$resultado){
    die("ERROR".mysqli_error($conn_periferia)); 
}else{
   header("Location: adm_lista.php");
};

}; //Fim do isset


// Consulta para retornar as informações do bd
$query_rs_negocios = "SELECT * FROM tb_negocio INNER JOIN tb_categorias ON tb_categorias.idCategorias = tb_negocio.idCategorias WHERE tb_negocio.idNegocio = ? ";
// Preparar a consulta
$stmt = mysqli_prepare($conn_periferia, $query_rs_negocios);
// Vincular o parâmetro
mysqli_stmt_bind_param($stmt, "i", $idNegocio);
// Executar a consulta
mysqli_stmt_execute($stmt);
// Obter os resultados
$rs_negocios = mysqli_stmt_get_result($stmt);
// Obter a linha da consulta
$row_rs_negocios = mysqli_fetch_assoc($rs_negocios);


$query_rs_categorias = "SELECT * FROM tb_categorias";

$rs_categorias = mysqli_query($conn_periferia, $query_rs_categorias) or die(mysqli_error($conn_periferia));

$row_rs_categorias = mysqli_fetch_assoc($rs_categorias);
//Teste
//echo($row_rs_negocios['idNegocio']); 
//echo($row_rs_negocios['nomeNegocio']);


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PERIFERIA CONECTA</title>
</head>

<body>
    <h1>Editar Projeto</h1>
    
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" id="form_editar">
    Id Projeto: <input name="idNegocio" type="hidden" id="idNegocio" value="<?php echo $row_rs_negocios['idNegocio']; ?>"><?php echo $row_rs_negocios['idNegocio']; ?><br>
    <br>
    Nome do projeto: <input name="nomeNegocio" type="text" id="nomeNegocio" size="30" value="<?php echo $row_rs_negocios['nomeNegocio'] ?>"><br>
    <br>
    Endereço do projeto: <input name="enderecoNegocio" type="text" id="enderecoNegocio" size="50"value="<?php echo $row_rs_negocios['enderecoNegocio'] ?>"> <br>
    <br>
    Telefone do projeto: <input type="number" id="telNegocio" name="telNegocio"value="<?php echo $row_rs_negocios['telNegocio'] ?>"> <br>
    <br>
    E=mail: <input name="emailNegocio" type="email" id="emailNegocio" size="50" value="<?php echo $row_rs_negocios['emailNegocio'] ?>"> <br>
    <br>
    Redes Socias: <input type="text" id="redesSociais" name="redesSociais" size="50" value="<?php echo $row_rs_negocios['redesSociais'] ?>"> <br>
    <br> 
    Descrição:<br>
    <textarea name="descricaoNegocio" cols="100" rows="10" id="descricaoNegocio"><?php echo $row_rs_negocios['descricaoNegocio']; ?></textarea>
    <br>

    
    Categoria: <select name="idCategorias" required="required" id="idCategorias">
        <?php do{ ?>
      <option value="<?php echo $row_rs_categorias['idCategorias'] ?>"
              
        <?php  if($row_rs_categorias['idCategorias'] == $row_rs_negocios['idCategorias']) { echo("selected=\"selected\""); } ?>><?php echo $row_rs_categorias['categoria'] ?></option>
        <?php }while($row_rs_categorias = mysqli_fetch_assoc($rs_categorias));?>
    </select><br>
    <br>
    Img1: <?php echo $row_rs_negocios['imgNegocio'];?> <br>
    <img src="<?php echo $dirUP.$row_rs_negocios['imgNegocio'];?>" width="100">
    <input name="imgNegocioG" type="hidden" id="imgNegocioG" value="<?php echo $row_rs_negocios['imgNegocio'];?>"><br>
    <input name="imgNegocio" type="file" id="imgNegocio" size="100"><br> 
    <br>     
    Ativo: <input name="ativo" type="checkbox" id="ativo" value="1" <?php if ($row_rs_negocios['ativo'] == 1) echo "checked"; ?>><br>
    <br>
 

    <input type="submit" name="submit" id="submit">
    
        
    
     
    
    </form>
</body>
</html>