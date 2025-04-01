<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // obtendo os dados
        $nomeUsuario = trim($_POST['usuario'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $senha = $_POST['senha'] ?? '';
        $nascimento = trim($_POST['nascimento'] ?? '');
        $erros = [];

        // filtro de dados
            //Nome de usuário
            $nomeUsuario = strip_tags($nomeUsuario); // Tira as HTML
            $nomeUsuario = preg_replace('/[^\w]/', '', $nomeUsuario); // Permite apenas letras, números e _

            if (empty($nomeUsuario)) {
                $erros['nome de usuário'] = "Nome de usuário obrigatório.";
            } else if (strlen($nomeUsuario) < 6) {
                $erros['nome de usuário'] = "Mínimo 6 caracteres.";
            }

            // E-mail
            $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove caracteres inválidos

            if (empty($email)) {
                $erros['e-mail'] = "E-mail obrigatório.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros['e-mail'] = "Formato de e-mail inválido.";
            }

            // Senha
            if (empty($senha)) {
                $errors['senha'] = "Senha obrigatória.";
            } elseif (strlen($senha) < 6) {
                $errors['senha'] = "Mínimo 6 caracteres.";
            }

            $senhaCodificada = password_hash($senha, PASSWORD_DEFAULT);

            // Data de nascimento
            $hoje = new DateTime();
            $aniversario = DateTime::createFromFormat('Y-m-d', $nascimento);
            $idade = $hoje->diff($aniversario)->y;
            
            if ($idade < 13) {
                $errors['data'] = "Você deve ter pelo menos 13 anos.";
            }

            // erros
                if (!empty($erros)) {

                    $_SESSION['erros'] = $erros;
                    $_SESSION['logado'] = false;

                    header('Location: ./login.php');
                        exit;
                } else {
                    $_SESSION['logado'] = true;
                    $_SESSION['dados'] = array('usuario'=>$nomeUsuario, 'email'=>$email, 'senha'=>$senha, 'idade'=>$idade);
                }
    }
?>