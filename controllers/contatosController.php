<?php

    require_once "./models/Contato.php";


    class contatosController {

        protected $model;

        function __construct() {
            $this->model = new ContatoModel;
        }

        function select() {
            $resultSelect = $this->model->select();
            require("./views/contatosView.php");
        }

        function delete($id) {
            $resultDelete = $this->model->delete($id);
            header("location: ./index.php");
        }

        function insert($data) {
            $resultInsert = $this->model->insert($data);
            header("location: ./index.php");
        }

        function update($data) {
            $resultUpdate = $this->model->update($data);
            header("location: ./index.php");
        }

        function editar($id) {
            $result = $this->model->selectId($id);
            require_once "./views/contatosFormView.php";
        }

        function novoContato() {
            require_once "./views/contatosFormView.php";
        }
    }

?>