<?php

    require_once "./models/ConexaoBanco.php";

    class UsuarioModel extends ConexaoBanco {

        function __construct() {
            parent::__construct();
        }

        function login($data){
            $sql = $this->con->prepare("SELECT * FROM usuarios WHERE email=:email AND senha=:senha");
            $sql->bindValue(":email", $data['email']);
            $sql->bindValue(":senha", md5($data['senha']));
            $sql->execute();

            if($sql->rowCount() > 0) {
                $usuarioLogado = $sql->fetch();

                $_SESSION['logado_id'] = $usuarioLogado['id'];
                $_SESSION['logado_usuario'] = $usuarioLogado['nome'];

                return true;
            } else {
                return false;
            }
        }
    }
?>