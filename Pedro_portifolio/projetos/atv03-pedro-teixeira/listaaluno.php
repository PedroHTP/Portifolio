<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>
    <link rel="shortcut icon" href="./img/sherlock.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $espaco = " ";
    $nome_completo = $_POST['nome'];
    $array_nome =  explode($espaco, $nome_completo);
    $usuario = $array_nome[0] . " " . $array_nome[1];
    $nascimento = $_POST['nascimento'];
    
    $traco = '-';
    $dataarray = explode ($traco, $nascimento);
    $ano = $dataarray [0];
    $mes = $dataarray [1];
    $dia = $dataarray [2];
        $anoatual = date ('Y');
        $mesatual = date ('m');
        $diaatual = date ('d');
        $idade = $anoatual - $ano;
        if ($mesatual < $mes) {
            $idade -= 1;
        } else if ($mesatual == $mes && $diaatual < $dia) {
            $idade -= 1;
        }
    ?>
<header>
        <div id="logo">
            <img src="./img/sherlock-pp.png" alt="Logo da HeavyStreet, mostra a silhueta de um Sherlock Holmes com a bengala">
        </div>
        <div id="titulo">
            <h1>Heavy Street</h1>
        </div>
        <nav>
            <ul>
                <li><a href="./index.php">INÍCIO</a></li>
                <li><a href="./cadaluno.php">CADASTRO</a></li>
                <li id="ativo"><a href="./listaaluno.php">LISTA DE ALUNOS</a></li>
            </ul>
        </nav>
        <div id="search">
            <img src="img/lupa-pp.png" alt="">
        </div>
        <div id="perfil">
            <div id="usuario">
                <p><?=strtoupper($usuario)?></p>
            </div>
            <div id="foto">
                <img src="./img/perfil-pp.png" alt="">
            </div>
        </div>
    </header>
    <main class="centro">
        <section id="lista">
            <h1>LISTA DE ALUNOS CADASTRADOS</h1>
            <div id="tabela">
                <table>
                    <tr id="topo">
                        <th>Nome:</th>
                        <th>Endereço:</th>
                        <th>Bairro:</th>
                        <th>Cidade:</th>
                        <th>UF:</th>
                        <th>CPF:</th>
                        <th>Telefone:</th>
                        <th>Idade:</th>
                        <th>Disciplina favorita:</th>
                    </tr>
                    <tr>
                        <td><?=$_POST['nome'];?></td>
                        <td><?=$_POST['endereco'];?></td>
                        <td><?=$_POST['bairro'];?></td>
                        <td><?=$_POST['cidade'];?></td>
                        <td><?=$_POST['uf'];?></td>
                        <td><?=$_POST['cpf'];?></td>
                        <td><?=$_POST['telefone'];?></td>
                        <td><?=$idade?></td>
                        <td><?=$_POST['favorita'];?></td>
                    </tr>
                    <tr>
                        <td>Helen Vieira</td>
                        <td>Praça Santo Antônio, casa 164</td>
                        <td>Vomita-mel</td>
                        <td>Mutans</td>
                        <td>BA</td>
                        <td>637.725.549-21</td>
                        <td>(77) 99934-2123</td>
                        <td>18</td>
                        <td>História</td>
                    </tr>
                    <tr>
                        <td>Cassandra Castro Teixeira</td>
                        <td>Rua Fortuna, casa 195</td>
                        <td>Princesa Isabel</td>
                        <td>Vitória da Conquista</td>
                        <td>BA</td>
                        <td>573.106.128-42</td>
                        <td>(77) 99953-5084</td>
                        <td>24</td>
                        <td>Inglês</td>
                    </tr>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <div id="termo-logo">
            <div class="logo">

            </div>
            <div id="termo">
                <p><a href="#">POLITÍCA DE PRIVACIDE</a> | <a href="#">TERMOS DE USO</a></p>
                <p>&copy; 2024 - TODOS OS DIREITOS RESERVADOS A PEDRO HENRIQUE TEIXEIRA PIÃO</p>
            </div>
            <div class="logo">
                <img src="./img/PSW.png" alt="Logo de PSW">
            </div>
        </div>
    </footer>
</body>
</html>