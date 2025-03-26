<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografia</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header>
        <div>
            <img src="../img/favicon_io/favicon-32x32.png" alt="" id="logo">
        </div>
        <div>
            <h1>Portifolio</h1>
        </div>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="<?=$_SERVER['PHP_SELF']?>">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <div class="flex justify-end ">
            <div class="pesquisa">
                <input type="text" placeholder="Pesquisar">
                <button><img src="../icons/search.svg" alt=""></button>
            </div>
            <div class="login">
                <a href="#" class="link">Login</a>
                <a href="#" class="link" id="registrar">Cadastrar</a>
            </div>
        </div>
    </header>
</body>
</html>