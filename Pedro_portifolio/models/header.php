<?php 
    echo "<script>
            let logado = false;
        </script>";
    if (isset($_SESSION['logado'])) {
        if ($_SESSION['logado'] == true) {
            echo "<script>
                logado = true;
            </script>";
        }
    } 
?>



<header>
    <div class="logo">
        <img src="./img/favicon_io/favicon-32x32.png" alt="" id="logo">
    </div>
    <div class="header_title">
        <h1>Portifolio</h1>
    </div>
    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./biografia.php">Sobre</a></li>
        <li><a href="./projetos.php">Projetos</a></li>
        <li><a href="./galeria.php">Galeria</a></li>
    </ul>
    <div class="flex justify-end right_side">
        <div class="pesquisa">
            <input type="text" placeholder="Pesquisar">
            <button><img src="./icons/search.svg" alt=""></button>
        </div>

        <div class="login" hidden>
            <a href="#" class="link">Login</a>
            <a href="./login.php" class="link" id="registrar">Cadastrar</a>
        </div>
        
        <div class="perfil flex" id="perfil" hidden>
            <div><img src="./img/user.png" alt=""></div>
            <div id="usuario">
                <a href="./perfil.php"><?=$_SESSION['dados']['usuario']?></a>
            </div>
        </div>
    </div>
</header>