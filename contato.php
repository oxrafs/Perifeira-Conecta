<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="manifest" href="manifest.json">
    <meta charset     = "UTF-8">
    <meta http-equiv  = "X-UA-Compatible" content  = "IE=edge">
    <meta name        = "viewport" content         = "width=device-width, initial-scale=1.0">
    <link rel         = "stylesheet" href          = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity   = "sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin = "anonymous" referrerpolicy = "no-referrer" />
    <link rel         = "stylesheet" href          = "stylecont.css">
    <link rel="stylesheet" href="form.css">
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
            <li><a href  = "sobre.php">Empresa</a></li>
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
        
        <br><br><br><br><br><br><br><br><br><br><br>

        
        
 <section id    = "hero">
  <form action="#" id="feedback-form" method="post">

    
    <input type="hidden" name="recipient" value="contato@periferiaconecta.com.br">
    <input type="hidden" name="subject" value="Formulário de contato Periferia Conecta">
    <input type="hidden" name="redirect" value="periferiaconecta.com.br">


    <label for="nome">Nome:</label>
    <input name="nome" type="text" autofocus="autofocus" required="required" id="nome" placeholder="Digite o seu nome completo" size="60">
    <br>
    <br>
    <label for="email">E-mail:</label>
    <input name="email" type="email" required="required" id="email" placeholder="Digite seu e-mail" size="60">
    <br>
    <br>
    <label for="telefone">Telefone:</label>
    <input name="telefone" type="tel" id="telefone" placeholder="Digite seu número" size="30">
    <br>
    <br>
    <label for="gostou">Gostou do site:</label>
    <input name="gostou" type="radio" value="sim" checked="checked">Sim
    <input name="gostou" type="radio" value="nao">Não
    <br>
    <br>
    <label for="feedback">O que você mais gostou no site?</label>
    <select name="feedback" id="feedback">
      <option></option>
      <option value="design">Design</option>
      <option value="responsivo">Responsividade</option>
      <option value="facil">Facilidade de navegação</option>
      <option value="conteudo">Conteúdo</option>
    </select>
    <br>
    <br>
    <label for="comentarios">Comentários:</label>
    <br>
    <textarea name="comentarios" cols="68" rows="10" required="required" id="comentarios"></textarea>
    <br>
    <br>
    <input type="reset"> 
    <input type="submit">
    <br>
    <br>
  </form>
</section>

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