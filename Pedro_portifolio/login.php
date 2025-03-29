<?php 
    $title = 'Login';
    include_once ('./models/head.php'); 

    // sessão
    session_start();

    if (isset($_SESSION['logado'])) {
        if ($_SESSION['logado'] == true) {
            header('Location: ./index.php');
            exit;
        }
    }
?>

<head>
    <link rel="stylesheet" href="./styles/registro.css">
</head>

<body>
    <main>
        <div class="container_form">
            <form action="./index.php" method="post">
                <div>
                    <h1>Cadastro</h1>
                </div>
                <div class="form_area">
                        <div class="flex" style="width: 100%; gap: 5%;">
                            <div class="div_input">
                                <div>Nome de usuário:</div>
                                <input type="text" name="usuario" id="usuario" placeholder="Fulano123" required oninput="formDeCadastro.AtualizaDados()">
                            </div>
                            <div class="div_input">
                                <div>Data de aniversário:</div>
                                <input type="date" name="nascimento" id="nascimento" required value="<?=date('Y-m-d')?>" oninput="formDeCadastro.AtualizaDados()">
                            </div>
                        </div>
                        <div class="div_input">
                            <div>E-mail:</div>
                            <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required oninput="formDeCadastro.AtualizaDados()">
                        </div>
                        <div class="div_input">
                            <div>Senha:</div>
                            <input type="password" name="senha" id="senha" placeholder="batataarrozpeixe123" required oninput="formDeCadastro.AtualizaDados()" minlength="6">
                        </div>
                        <div class="div_input">
                            <div>Confirme a senha:</div>
                            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="batataarrozpeixe123" required oninput="formDeCadastro.AtualizaDados()" minlength="6">
                        </div>
                    
                    
                        <div class="finalizar">
                            <input type="submit" value="Cadastrar" id="submit" disabled>
                            <input type="reset" value="Resetar">
                        </div>
                </div>

            </form>
        </div>
    </main>

    <!-- JavasScript -->
    <script src="./scripts/registro.js"></script>
</body>
</html>