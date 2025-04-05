<?php

namespace App\Model;

class ProdutoDao {

    public function create(Produto $p) {

        $comando = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";
        $stmt = Conexao::getConn()->prepare($comando);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();
    }

    public function read() {

        $comando = 'SELECT * FROM produtos';

        $stmt = Conexao::getConn() -> prepare($comando);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function readSolo($id) {

        $comando = "SELECT * FROM produtos WHERE id = '$id'";

        $stmt = Conexao::getConn() -> prepare($comando);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function update(Produto $p) {
        $comando = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($comando);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());
 
        $stmt->execute();

    }
    
    public function delete($id) {

        $comando = 'DELETE FROM produtos WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($comando);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}