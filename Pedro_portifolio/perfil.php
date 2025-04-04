
<?php 
    $title = 'Perfil';
    include_once ('./models/head.php'); 
    
    // sessão
    session_start();
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
                    <div class="flex">
                        <div class="div_input">
                            <div>Nome de usuário:</div>
                            <input type="text" name="usuario" id="usuario" placeholder="<?=$_SESSION['dados']['usuario'] ?? 0?>" disabled>
                        </div>
                        <div class="div_input">
                            <div>Data de aniversário:</div>
                            <input type="date" name="nascimento" id="nascimento" required value="<?=$_SESSION['dados']['nascimento'] ?? 0?>" disabled>
                        </div>
                    </div>
                    <div class="div_input">
                        <div>E-mail:</div>
                        <input type="email" name="email" id="email" placeholder="<?=$_SESSION['dados']['email'] ?? 0?>" disabled>
                    </div>
                </div>
            </div>
            <div class="container_botoes">
                <button class="btn btn-primary" id="editar">Editar</button>
                <button class="btn btn-danger" id="sair">Sair</button>
        </section>
    </main>
</body>