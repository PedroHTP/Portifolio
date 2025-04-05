<?php 
    $title = 'Editando';
    include_once ('./models/head.php'); 

    // sessão
    session_start();

    if (isset($_SESSION['logado'])) {
        if ($_SESSION['logado'] === false) {
            header('Location: ./index.php');
            exit;
        }
    } else {
        header('Location: ./index.php');
        exit;
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
                <div class="erros">
                    <?php 
                        if (isset($_SESSION['erros'])) {
                            $erros = $_SESSION['erros'];
                            foreach ($erros as $tipo => $mensagem) {
                                echo "Erro de $tipo: $mensagem";
                            }
                        }
                    ?>
                </div>
                    <div class="form_area">
                        <div class="flex" style="width: 100%; gap: 5%;">
                            <div class="div_input">
                                <div>Nome de usuário:</div>
                                <input type="text" name="usuario" id="usuario" placeholder="Fulano123" required oninput="formDeCadastro.AtualizaDados()" value="<?=$_SESSION['dados']['usuario'] ?? ''?>">
                            </div>
                            <div class="div_input">
                                <div>Data de aniversário:</div>
                                <input type="date" name="nascimento" id="nascimento" required value="<?=$_SESSION['dados']['nascimento']['total']?>" oninput="formDeCadastro.AtualizaDados()">
                            </div>
                        </div>
                        <div class="div_input">
                            <div>E-mail:</div>
                            <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required oninput="formDeCadastro.AtualizaDados()" value="<?=$_SESSION['dados']['email'] ?? ''?>">
                        </div>
                        <div class="div_input">
                            <div>Nova senha:</div>
                            <input type="password" name="senha" id="senha" placeholder="batataarrozpeixe123" required oninput="formDeCadastro.AtualizaDados()" minlength="6" value="<?=$_SESSION['dados']['senha'] ?? ''?>">
                        </div>
                        <div class="div_input">
                            <div>Confirme a nova senha:</div>
                            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="batataarrozpeixe123" required oninput="formDeCadastro.AtualizaDados()" minlength="6" value="<?=$_SESSION['dados']['senha'] ?? ''?>">
                        </div>
                    
                    
                        <div class="finalizar">
                            <div>
                                <input type="submit" value="Cadastrar" id="submit" disabled>
                                <input type="reset" value="Resetar">
                            </div>
                            <div class="container_voltar">
                                <input type="button" value="Voltar" onclick="Voltar()"></input>
                            </div>
                        </div>
                </div>

            </form>
        </div>
    </main>

    <!-- JavasScript -->
    <script src="./scripts/registro.js"></script>
</body>
</html>