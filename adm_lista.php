<?php require_once("conexaobd.php"); 

?>

<?php 

$query_rs_negocios = "SELECT * FROM tb_negocio INNER JOIN tb_categorias ON tb_categorias.idCategorias = tb_negocio.idCategorias ORDER BY tb_negocio.ativo DESC";



$rs_negocios = mysqli_query($conn_periferia, $query_rs_negocios) or die(mysqli_error($conn_periferia));


$row_rs_negocios = mysqli_fetch_assoc($rs_negocios);

$totalRow_rs_negocios = mysqli_num_rows($rs_negocios);

//echo($totalRow_rs_negocios . " Total de registros econtrados.");
//echo($row_rs_negocios['idNegocio']);

?>



<div class="imagensAdm">
    <a href="#"><img src="imagens/_menu.png" alt="Menu" title="Menu"></a>
    <a href="adm_logout.php" title="Sair"><img src="imagens/_sair.png" alt="Sair"></a>
</div>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Painel de Administração do Site</title>
<link rel         = "stylesheet" href          = "styleADM.css">
</head>
    


<body>
<h1>Painel de Administração do Site</h1><br><br>
    

<table width="100%" border="0">
  <tbody>
    <tr> 
     
      <td align="center" bgcolor="#3F3F3F"><strong>Inserir</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Editar</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Excluir</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Id</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Categoria</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Nome Projeto</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Telefone</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Ativo</strong></td>
      <td align="center" bgcolor="#3F3F3F"><strong>Img</strong></td>
      
    </tr>
      <?php do{  ?>
    <tr>
      <td align="center" bgcolor="#8F8E8E"><a href="inserir-projetos.php"><img src="imagens/inserir.png" width="20" height="20" alt=""/></a></td>
      <td align="center" bgcolor="#8F8E8E"><a href="editar_projeto.php?idNegocio=<?php echo($row_rs_negocios['idNegocio']) ?>"><img src="imagens/editar.png" width="16" height="15" alt=""/></a></td>
      <td align="center" bgcolor="#8F8E8E"><a href="excluir_projeto.php?idNegocio=<?php echo($row_rs_negocios['idNegocio']) ?>"><img src="imagens/excluir.png" width="16" height="15" alt=""/></a></td>
      <td align="center" bgcolor="#8F8E8E"><?php echo($row_rs_negocios['idNegocio'])?></td>
      <td align="center" bgcolor="#8F8E8E"><?php echo($row_rs_negocios['categoria'])?></td>
      <td align="center" bgcolor="#8F8E8E"><?php echo($row_rs_negocios['nomeNegocio'])?></td>
      <td align="center" bgcolor="#8F8E8E"><?php echo($row_rs_negocios['telNegocio'])?></td>
      <td align="center" bgcolor="#8F8E8E"><?php echo($row_rs_negocios['ativo'])?></td>
      <td align="center" bgcolor="#8F8E8E"><img src="<?php echo($dirUP.$row_rs_negocios['imgNegocio'])?>" width="50"></td>
    </tr>
    <tr>
      <!--<td colspan="11"><hr></td> -->
    </tr>
      <?php } while($row_rs_negocios = mysqli_fetch_assoc($rs_negocios)) ?>
  </body>
</table>

    
<?php 
//Liberando a memória associada ao resultado da consulta    
mysqli_free_result($rs_negocios);
    
//Fechar conexão do BD    
mysqli_close($conn_periferia);    
?>
    
</body>
</html>