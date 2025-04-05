
<?php 
    session_start();

    if ($_SESSION['logado'] === false) {
        header('Location: ./index.php');
        exit;
    }

    $title = 'Perfil';
    include_once ('./models/head.php'); 
    var_dump($_SESSION['dados']);
?>

<head>
    <link rel="stylesheet" href="./styles/perfil.css">
</head>

<body>

    <main>
        <section class="conteiner_perfil">
            <div class="container_img flex">
                <img src="./img/user.png" alt="">
                <h1>Dados do Usuário</h1>
            </div>
            <div class="container_dados">
                <div class="dados_usuario">
                    
                        <div class="div_input">
                            <div>Nome de usuário: <?=$_SESSION['dados']['usuario'] ?? 0?></div>
                        </div>
                        <div class="div_input">
                            <div>Idade: <?=$_SESSION['dados']['idade']?></div>
                            <div>Data de aniversário: <?=$_SESSION['dados']['nascimento']['dia'].' de '.$_SESSION['dados']['nascimento']['mes'].' de '.$_SESSION['dados']['nascimento']['ano']?></div>
                        </div>
                    
                    <div class="div_input">
                        <div>E-mail: <?=$_SESSION['dados']['email']?></div>
                    </div>
                </div>
            </div>
            <div class="container_botoes flex">
                <button class="btn btn-primary" id="editar" onclick="Editar()">Editar</button>
                <button class="btn btn-danger" id="sair" onclick="Sair()">Sair</button>
            </div>
        </section>
    </main>
    <script>
        function Editar() {
            window.location.href = './editar.php';
        }

        function Sair() {
            window.history.back();
        }
    </script>
</body>