<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/favicon_io/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php 
    
    ?>
    <header>
        <div>
            <img src="./img/favicon_io/favicon-32x32.png" alt="" id="logo">
        </div>
        <div>
            <h1>Portifolio</h1>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <div class="flex justify-end ">
            <div class="pesquisa">
                <input type="text" placeholder="Pesquisar">
                <button><img src="./icons/search.svg" alt=""></button>
            </div>
            <div class="login">
                <a href="#" class="link">Login</a>
                <a href="#" class="link" id="registrar">Cadastrar</a>
            </div>
        </div>
    </header>
    
    <main>
        <div>
            <section>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, at ipsum molestiae necessitatibus aliquam dolorem officia vero beatae, blanditiis numquam vel sequi eius rerum possimus suscipit iste magni. Debitis, magni?
            </section>
        </div>
        <aside>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum laboriosam blanditiis optio cum. Asperiores aliquid odio consequuntur voluptatibus porro itaque quae dolorum minus repellendus perferendis maiores consequatur accusamus, sequi vero?
        </aside>
    </main>
    
    <footer class="flex justify-between column">
       <div class="flex fontAss">
            <p>
            Pedro Henrique Teixeira Piao
            </p>
       </div>

       <div>
        <div class="flex justify-space redes">
            <div class="logoRedes">
                <a href="#">
                    <img src="./icons/icons8-instagram.svg" alt="Icone do instagram">
                </a>
            </div>
            <div class="logoRedes">
                <a href="#">
                    <img src="./icons/icons8-github.svg" alt="Icone do Github">
                </a>
            </div>
            <div class="logoRedes">
                <a href="#">
                    <img src="./icons/icons8-logo-discord.svg" alt="Icone do Discord">
                </a>
            </div>
        </div>
       <div>
        <div class="flex condicoes">
            <div>
                Termos e Condições
            </div>
            <div>
                Política de Privacidade
            </div>
        </div>
        <div class="flex condicoes">
            <p>Copyright &copy; 2025 Pedro Henrique Teixeira Pião. Todos os direitos reservados.</p>
        </div>
       </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>