<?php 
    $title = 'Biografia';
    include_once ('./models/head.php');
    
?>

<body>
    
    <?php 
    require_once('./models/header.php')
    ?>

    <main>
        <div class="flex biografia">
            <section class="bio column">
                <div>
                    <p>
                    Pedro Henrique Teixeira Pião nasceu na cidade Guanambi, no dia 20 de maio de 2007, seu pai nasceu em Brumado e sua mãe na região rural de Caetité, nos primeiros anos de sua vida ele cresceu na casa de sua avó, época na qual ganhou de aniversário um leitor de dvd e uma caixa cheia de dvds que o fez desenvolver seus primeiros interesses e hobbies, posteriormente teve a oportunidade de acessar um notebook pela primeira vez, dispositivo do seu pai, algum tempo depois ganhou o sua própria máquina, junto com ela, ele se apaixonou pelo mundo da tecnologia, muitas vezes influenciado pelos seus familiares, Pedro viu na informática um caminho para trabalhar no futuro.
                    </p>
                    <p>
                    Na escola, ele gostava de todas as matérias que envolviam a lógica, principalmente matemática e física. Sempre pensando alto, ele sonhava em ser piloto de avião, mas decidiu seguir uma carreira mais promissora, e já que sempre foi o "TI" da sala em suas escolas decidiu entrar no curso de informática no IF, institução em que outros dos seus parentes já tinha estudado, nela se aprofundou na informática, ganhando conhecimentos tanto em hardware tanto em software, e foi introduzido nas suas primeira linguagens de programação com C, PHP e Javascript, assim como ferramentas como MySQL, Node.js, Figma e Visual Studio Code.
                    </p>
                </div>
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
                    <img src="./icons/icons8-instagram.svg" alt="Icone do instagram">
                </a>
            </div>
            <div class="logoRedes">
                <a href="https://github.com/PedroHTP">
                    <img src="./icons/icons8-github.svg" alt="Icone do Github">
                </a>
            </div>
            <div class="logoRedes">
                <a href="https://x.com/bluefrosthtp">
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