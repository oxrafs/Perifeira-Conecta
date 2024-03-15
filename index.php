<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="manifest" href="manifest.json">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel         = "stylesheet" href          = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity   = "sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin = "anonymous" referrerpolicy = "no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/icon_PRIN.png" type="image/png">
    <title>PERIFERIA CONECTA</title>
</head>
<body>

<header>
    <div class="navbar">
        <div class="logo">
            PERIFERIA | CONECTA
            <a href="index.php">
                <div class="subtitulo">DA PERIFERIA PARA O MUNDO!</div>
            </a>
        </div>
        <ul class="links">
            <li><a href="index.php">Início</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="sobre.php">Empresa</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
        <div class="search">
            <form action="busca_resultado.php" method="get" class="form-inline my-2 my-lg-0">
                <input name="palavra" type="text" required class="form-control mr-sm-2" id="palavra" placeholder="Pesquisar" aria-label="Procurar">
                <button type="submit"><img src="imagens/lupaPNG.png" alt="Lupa"></button>
            </form>
        </div>
        <a href="#" class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </a>
    </div>
    <div class="dropdown_menu">
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
        <li class="search">
            <form action="busca_resultado.php" method="get" class="form-inline my-2 my-lg-0">
                <input name="palavra" type="text" required class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Procurar">
                <button type="submit"><img src="imagens/lupaPNG.png" alt="Lupa"></button>
            </form>
        </li>
    </div>
</header>

<br><br><br><br><br><br><br>

<div class="descida">
    <main>
        <section id="hero">
            <h1>Bem-Vindo!</h1>
            <p>Navegue por nossa página para conhecer mais sobre nossos serviços inovadores.<br>
                Se você está em busca de soluções tecnológicas de ponta, parcerias estratégicas<br>
                ou inspiração para impulsionar seu negócio, você está no lugar certo. Junte-se<br>
                a nós nessa jornada emocionante rumo ao futuro. Vamos criar juntos um<br>
                mundo mais conectado, sustentável e próspero.<br>
                <br>
                </p>
                <p style="color: rgb(0, 255, 0);">Seja bem-vindo à nossa comunidade de inovação e transformação.</p>
        </section>
    </main>
</div>

<script>
    const toggleBtn = document.querySelector('.toggle_btn');
    const toggleBtnIcon = document.querySelector('.toggle_btn i');
    const dropdownMenu = document.querySelector('.dropdown_menu');

    toggleBtn.onclick = function () {
        dropdownMenu.classList.toggle('open');
        const isOpen = dropdownMenu.classList.contains('open');
        toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
    };
</script>
<script src="myscripts.js"></script>
</body>
</html>