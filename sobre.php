<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset     = "UTF-8">
    <meta http-equiv  = "X-UA-Compatible" content  = "IE=edge">
    <meta name        = "viewport" content         = "width=device-width, initial-scale=1.0">
    <link rel         = "stylesheet" href          = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity   = "sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin = "anonymous" referrerpolicy = "no-referrer" />
    <link rel         = "stylesheet" href          = "style.css">
	<link rel="short icon" href="imagens/icon_PRIN.png">
    <title>PERIFERIA CONECTA</title>
</head>

<!--começo corpo-->

<body>

    <header>

        <div class = "navbar">
        <div class = "logo">
                PERIFERIA | CONECTA
                <a   href  = "index.php">
                <div class = "subtitulo" style = "">DA PERIFERIA PARA O MUNDO!</div>
                </a>
            </div>
            <ul    class = "links">
            <li><a href  = "index.php">Início</a></li>
            <li><a href  = "projetos.php">Projetos</a></li>
            <li><a href  = "sobre.php">Sobre</a></li>
            <li><a href  = "contato.php">Contato</a></li>
            </ul>
            <div class="search">
            <form action="busca_resultado.php" method="get" class="form-inline my-2 my-lg-0" id="form_busca">
                    <input name="palavra" type="text" required="required" class="form-control mr-sm-2" id="palavra" placeholder="Pesquisar" aria-label="Procurar">
                    <button><img src="imagens/lupaPNG.png" alt="Lupa"></button>
                    </form>
            </div>
            <a href  = "#" class = "toggle_btn">
            <i class = "fa-solid fa-bars"></i>
            </a>

        </div>

        <div   class = "dropdown_menu">
            <li><a href  = "index.php">Início</a></li>
            <li><a href  = "projetos.php">Projetos</a></li>
            <li><a href  = "sobre.php">Sobre</a></li>
            <li><a href  = "contato.php">Contato</a></li>
        <li class="search">
                <form action="busca_resultado.php" method="get" class="form-inline my-2 my-lg-0">
                <input name="palavra" type="text" required="required" class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Procurar">
                <button><img src="imagens/lupaPNG.png" alt="Lupa"></button>
                </form>
        </li>
        </div>
    </header>
    
        <br> <br> <br> <br> <br> <br> <br>
        <div     class = "descida">
        <section id    = "hero">
                <h1>Sobre nós!</h1>
                <p>Nossa missão é dar vida às histórias muitas vezes esquecidas das mentes brilhantes da periferia. <br>
                    Acreditamos que cada empreendedor traz consigo um universo de criatividade e potencial. <br>
                    Ao divulgar projetos da periferia, enriquecemos a tapeçaria da inovação, desafiando estereótipos <br>
                    e destacando a resiliência das comunidades. Estamos aqui para mostrar que grandes ideias não <br>
                    conhecem barreiras geográficas. Abrace essa jornada conosco, celebrando o talento, a coragem <br>
                    e a determinação que florescem onde a inspiração é mais necessária. Junte-se a nós para construir <br>
                    um futuro mais inclusivo e equitativo, um projeto de cada vez.<br>
                    <br>
                </p>
            </section>
    </div>

    <script>
        const toggleBtn     = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropdownMenu  = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function () {
            dropdownMenu.classList.toggle('open')
            const isOpen = dropdownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                :  'fa-solid fa-bars'
        }
    </script>

</body>

</html>