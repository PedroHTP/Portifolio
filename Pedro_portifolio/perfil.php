
<?php 
    session_start();

    if ($_SESSION['logado'] === false) {
        header('Location: ./index.php');
        exit;
    }

    $title = 'Perfil';
    include_once ('./models/head.php');

    switch ($_SESSION['dados']['nascimento']['mes']) {
        case "01":
            $mes = "Janeiro";
        break;
        case "02":
            $mes = "Fevereiro"; 
        break;
        case "03":
            $mes = "Março";
            break;
        case "04":
            $mes = "Abril";
            break;
        case "05":
            $mes = "Maio";
            break;
        case "06":
            $mes = "Junho";
            break;
        case "07":
            $mes = "Julho";
            break;
        case "08":
            $mes = "Agosto";
            break;
        case "09":
            $mes = "Setembro";
            break;
        case "10":
            $mes = "Outubro";
            break;
        case "11":
            $mes = "Novembro";
            break;
        case "12":  
            $mes = "Dezembro";
            break;
    
        default:
            break;
    }
?>

<script>
    let textmes = document.querySelector('span#mes');
    let mes;
    
</script>

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
                            <div class="title_dados">Nome de usuário: <?=$_SESSION['dados']['usuario'] ?? 0?></div>
                        </div>
                        <div class="div_input">
                            <div class="title_dados">Idade: <?=$_SESSION['dados']['idade']?></div>
                            <div class="title_dados">Data de aniversário: <?=$_SESSION['dados']['nascimento']['dia']." de ".$mes." de ".$_SESSION['dados']['nascimento']['ano']?></div>
                        </div>
                    
                    <div class="div_input">
                        <div class="title_dados">E-mail: <?=$_SESSION['dados']['email']?></div>
                    </div>
                </div>
            </div>
            <div class="container_botoes flex">
                <button class="btn btn-primary" id="editar" onclick="Editar()">Editar</button>
                <button class="btn btn-danger" id="sair" onclick="Voltar()">Voltar</button>
            </div>
        </section>
    </main>
    <script>
        function Editar() {
            window.location.href = './editar.php';
        }

    </script>
    <script src="./js/script.js"></script>
</body>