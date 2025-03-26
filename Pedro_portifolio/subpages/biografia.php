<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografia</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(31, 30, 30);
        }
    </style>
</head>
<body>
<header>
        <div>
            <img src="../img/favicon_io/favicon-32x32.png" alt="" id="logo">
        </div>
        <div>
            <h1>Portifolio</h1>
        </div>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="<?=$_SERVER['PHP_SELF']?>">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <div class="flex justify-end ">
            <div class="pesquisa">
                <input type="text" placeholder="Pesquisar">
                <button><img src="../icons/search.svg" alt=""></button>
            </div>
            <div class="login">
                <a href="#" class="link">Login</a>
                <a href="#" class="link" id="registrar">Cadastrar</a>
            </div>
        </div>
    </header>

    <main>
        <div class="flex">
            <section class="bio">
                <p>
                    Pedro Henrique Teixeira Pião nasceu na cidade Guanambi, no dia 20 de maio de 2007, seu pai nasceu em Brumado e sua mãe na região rural de Caetité, nos primeiros anos de sua vida ele cresceu na casa de sua avó, época na qual ganhou de aniversário um leitor de dvd e uma caixa cheia de dvds que o fez desenvolver seus primeiros interesses e hobbies, posteriormente teve a oportunidade de acessar um notebook pela primeira vez, dispositivo do seu pai, algum tempo depois ganhou o sua própria máquina, junto com ela, ele se apaixonou pelo mundo da tecnologia, muitas vezes influenciado pelos seus familiares, Pedro via na informática um caminho para o futuro,
                </p>
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
                <a href="https://www.instagram.com/pedro_htp015/">
                    <img src="../icons/icons8-instagram.svg" alt="Icone do instagram">
                </a>
            </div>
            <div class="logoRedes">
                <a href="https://github.com/PedroHTP">
                    <img src="../icons/icons8-github.svg" alt="Icone do Github">
                </a>
            </div>
            <div class="logoRedes">
                <a href="https://x.com/bluefrosthtp">
                    <img src="../icons/icons8-logo-discord.svg" alt="Icone do Discord">
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
    <script src="../scripts/script.js"></script>
</body>
</html>