<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="./img/sherlock.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                <li id="ativo"><a href="./cadaluno.php">CADASTRO</a></li>
                <li><a href="./listaaluno.php">LISTA DE ALUNOS</a></li>
            </ul>
        </nav>
        <div id="search">
            <img src="img/lupa-pp.png" alt="">
        </div>
        <div id="perfil">
            <div id="usuario">
                
            </div>
            <div id="foto">
                <img src="./img/perfil-pp.png" alt="">
            </div>
        </div>
    </header>
    <main class="centro">
        <section id="form">
            <h1>CRIE SEU PERFIL</h1>
                <div id="formulario-reajuste">
                    <div id="form-esquerdo">
                        <form action="./listaaluno.php" method="post">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="idnome" placeholder="Ex: Pedro Henrique Teixeira Pião" required>
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" id="idendereco" placeholder="Ex: Rua São Pedro, casa 100" required>
                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" id="idbairro" placeholder="Ex: Bairro Monte Azul" required>
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" id="idcidade" placeholder="Ex: Guanambi" required>
                            <label for="uf">Unidade federativa:</label>
                            <select name="uf" id="iduf" required>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ED">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                            <label for="cpf">Insira seu CPF: </label>
                            <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="XXX.XXX.XXX-XX" title="Digite um CPF no formato: XXX.XXX.XXX-XX"  required>
                            <label for="telefone">Digite seu telefone: </label>
                            <input type="tel" name="telefone" id="idtelefone" pattern="(\([0-9]{2}\))\s([0-9]{5})-([0-9]{4})" placeholder="Ex: (77) 99903-4680" title="Digite o telefone no formato: (**) *****-****"  required>
                            <label for="nascimento">Data de nascimento: </label>
                            <input type="date" name="nascimento" id="idnascimento" title="Selecione uma data que seja antes de <?=date('d')?>/<?=date('m')?>/<?=date('Y')?>" value="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>" required>
                    </div>
                    <div id="form-direito">
                            <h3>DISCIPLINAS CURSADAS</h3>
                                <div class="selecao">
                                    <div class="opcao">
                                        <input type="checkbox" name="portugues" id="idportugues">
                                        <label for="portugues">Português</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="checkbox" name="ingles" id="idingles">
                                        <label for="ingles">Inglês</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="checkbox" name="biologia" id="idbiologia">
                                        <label for="biologia">Biologia</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="checkbox" name="quimica" id="idquimica">
                                        <label for="quimica">Química</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="checkbox" name="fisica" id="idfisica">
                                        <label for="fisica">Física</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="checkbox" name="historia" id="idhistoria">
                                        <label for="historia">História</label>
                                    </div>
                                </div>
                            <h3>DISCIPLINA FAVORITA</h3>
                                <div class="selecao">
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavmatematica" value="Matemática">
                                        <label for="favorita">Matemática</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavportugues" value="Português">
                                        <label for="favorita">Português</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavingles" value="Inglês">
                                        <label for="favorita">Inglês</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavbiologia" value="Biologia">
                                        <label for="favorita">Biologia</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavquimica" value="Química">
                                        <label for="favorita">Química</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavfisica" value="Física">
                                        <label for="favorita">Física</label>
                                    </div>
                                    <div class="opcao">
                                        <input type="radio" name="favorita" id="idfavhistoria" value="História">
                                        <label for="favorita">História</label>
                                    </div>
                                </div>
                    </div>
                </div>
            <div id="botoes"> 
                    <div id="botao-esquerda">
                        <input type="submit" value="Concluir">
                    </div>
                    <div id="botao-direita">
                        <input type="reset" value="Resetar">
                    </div>
                </form>
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