<?php require_once("conexaobd.php"); ?>

<?php 

$query_rs_negocios = "SELECT * FROM tb_negocio INNER JOIN tb_categorias ON tb_categorias.idCategorias = tb_negocio.idCategorias WHERE tb_negocio.ativo = 1 ORDER BY tb_negocio.nomeNegocio DESC";

$rs_negocios = mysqli_query($conn_periferia, $query_rs_negocios) or die(mysqli_error($conn_periferia));

$row_rs_negocios = mysqli_fetch_assoc($rs_negocios);

$totalRow_rs_negocios = mysqli_num_rows($rs_negocios);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel         = "stylesheet" href          = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity   = "sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin = "anonymous" referrerpolicy = "no-referrer" />
    <link rel="stylesheet" href="stylepro.css">
	<link rel="short icon" href="imagens/icon_PRIN.png">
    <title>PERIFERIA CONECTA</title>

    <style>
        .imgprojetos {
            width: 300px;
            height: 300px;
            margin: auto;
            display: flex;
        }
    </style>

</head>

<!--começo corpo-->

<body>

    <header>

        <div class="navbar">
            <div class="logo">
                 PERIFERIA | CONECTA
                <a href="index.php">
                    <div class="subtitulo" style="">DA PERIFERIA PARA O MUNDO!</div>
                </a>
            </div>
            <ul class="links">
                <li><a href="index.php">Início</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            <div class="search">
            <form action="busca_resultado.php" method="get" class="form-inline my-2 my-lg-0" id="form_busca">
                    <input name="palavra" type="text" required="required" class="form-control mr-sm-2" id="palavra" placeholder="Pesquisar" aria-label="Procurar">
                    <button><img src="imagens/lupaPNG.png" alt="Lupa"></button>
                    </form>
            </div>
            <a href="#" class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </a>

        </div>

        <div class="dropdown_menu">
            <li><a href="index.php">Início</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li class="search">
                    <form action="busca_resultado.php" method="get" class="form-inline my-2 my-lg-0">
                    <input name="palavra" type="text" required="required" class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Procurar">
                    <button><img src="imagens/lupaPNG.png" alt="Lupa"></button>
                    </form>
            </li>
        </div>
    </header>

    </div>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropdownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function () {
            dropdownMenu.classList.toggle('open')
            const isOpen = dropdownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
        }
    </script>

<br><br><br><br><br><br><br><br>

   

    <div class="negocios">
        <h2>Os Projetos</h2>
    </div>

    <div class="negocios">
        <h1>EXEMPLO EXemplo</h1>

        <img src="imagens/negócio-nas-favelas.png" class="imgprojetos" alt="01">
        <br>

        <p><strong>Lja especializada em vendas de coxinha!</strong></p>
        <br>

        </p>
        </p>
        </p>
        
        
        <p>Telefone:
            <p style="color: rgb(0, 255, 0);">11999999999
            </p>
        <p>Email: 
            <p style="color: rgb(0, 255, 0);">hello@teste.com
            </p>
        <p>Endereço: 
            <p style="color: rgb(0, 255, 0);">123 - sydnei, australia.
            </p>
        <br>
        <br>
        
        <div class="linha"></div>
    </div>

<?php 

mysqli_free_result($rs_negocios); 

mysqli_close($conn_periferia); 

?>


</body>
</html>