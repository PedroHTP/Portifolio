<?php 
// SETS
require_once './vendor/autoload.php';

use App\Model\Produto;
use App\Model\ProdutoDao;

// session
session_start();

// deleta
// 

// atualiza
//$produtoDao->update($produto);

// Leitura
$produtoDao = new ProdutoDao();
$produtoDao -> read();
?>
<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php 
        
    if (isset($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
    ?>

    <main>
        <div id="area-table">
            <table>
                <tr id="topo">
                    <th>ID</th>
                    <th>NOME</th></th>
                    <th>DESCRIÇÃO</th>
                    <th></th>
                    <th></th>
                </tr>
            <?php
            foreach ($produtoDao -> read() as $produto) {
            ?>
                <tr>
                    <td><?=$produto['id']?></td>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto['descricao']?></td>
                    <td><a href="./alterar.php?id=<?=$produto['id']?>">Alterar</a></td>
                    <td><a href="./deletar.php?id=<?=$produto['id']?>">Deletar</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <form action="./adicionar.php" method="get">
                <button type="submit" class="button">Adicionar cliente</button>
            </form>
        </div>
    </main>
</body>
</html>
