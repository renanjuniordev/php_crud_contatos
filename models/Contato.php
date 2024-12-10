<?php

    require_once "./models/ConexaoBanco.php";

    class ContatoModel extends ConexaoBanco {

        function __construct() {
            parent::__construct();
        }

        function select() {
            $sql = $this->con->prepare("SELECT * FROM contatos ORDER BY nome");
            $sql->execute();
            return $sql->fetchAll();
        }

        function delete($id) {
            $sql = $this->con->prepare("DELETE FROM contatos WHERE id=:id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            return $sql->rowCount();
        }

        function insert($data) {
            $sql = $this->con->prepare("INSERT INTO contatos (nome, telefone, email, sexo) VALUE (:nome, :telefone, :email, :sexo)");
            $sql->bindValue(":nome", $data['nome']);
            $sql->bindValue(":telefone", $data['telefone']);
            $sql->bindValue(":email", $data['email']);
            $sql->bindValue(":sexo", $data['sexo']);
            $sql->execute();
            return $sql->rowCount();
        }

        function update($data) {
            $sql = $this->con->prepare("UPDATE contatos SET nome=:nome, telefone=:telefone, email=:email, sexo=:sexo WHERE id=:id");
            $sql->bindValue(":nome", $data['nome']);
            $sql->bindValue(":telefone", $data['telefone']);
            $sql->bindValue(":email", $data['email']);
            $sql->bindValue(":sexo", $data['sexo']);
            $sql->bindValue(":id", $data['id']);
            $sql->execute();
            return $sql->rowCount();
        }

        function selectId($id) {
            $sql = $this->con->prepare("SELECT * FROM contatos WHERE id=:id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            return $sql->fetch();
        }
    }

?>