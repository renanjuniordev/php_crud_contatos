<?php

    require_once "./config/init.php";

    class ConexaoBanco {
        protected $con;

        function __construct(){
            if(isset($this->con) == false) {
                $this->conexaoBanco();
            }
        }

        function conexaoBanco() {
            try {
                $this->con = new PDO("mysql:host=".BD_SERVIDOR.";dbname=".BD_BANCO, BD_USUARIO, BD_SENHA);
                //$this->con = new PDO("mysql:host=host;dbname=contatos", "root", "");
            } catch(PDOException $e) {
                die("Erro ao conectar com Banco de Dados. " . $e->getMessage());
            }
        }
    }

?>