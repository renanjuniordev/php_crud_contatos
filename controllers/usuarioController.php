<?php

    require_once "./models/Usuario.php";


    class usuarioController {

        protected $model;

        function __construct() {
            $this->model = new UsuarioModel;
        }

        function login($data) {
            if($this->model->login($data)){
                header("location: ./index.php");
            } else {
                header("location: ./views/login.php");
            }
        }

        function sair(){
            session_destroy();
            header("location: ./index.php");
        }

    }


?>