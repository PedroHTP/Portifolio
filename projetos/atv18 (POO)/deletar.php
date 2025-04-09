<?php 
    // SETS
    require_once './vendor/autoload.php';

    use App\Model\ProdutoDao;
    
    $id = $_GET['id'];

    $produtoDao = new ProdutoDao();
    $produtoDao -> delete($id);
    
    header('Location: index.php');
    exit;
?>