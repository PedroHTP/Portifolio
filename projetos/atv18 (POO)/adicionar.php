<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera</title>
</head>
<body>
    <?php 
    // SETS
    require_once './vendor/autoload.php';

    use App\Model\Produto;
    use App\Model\ProdutoDao;

    ?>
    <h1>Cadastre o novo produto</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao">
        <button type="submit">Cadastrar</button>
    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produto = new Produto();
            $produto->setNome($_POST['nome']);
            $produto->setDescricao($_POST['descricao']);

            $produtoDao = new ProdutoDao();
            $produtoDao->create($produto);

            header('Location: index.php');
            exit;
        }
    ?>
</body>
</html>