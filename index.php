<?php

    session_start();

    require_once "./controllers/contatosController.php";
    require_once "./controllers/usuarioController.php";

    $cntContatos = new contatosController;
    $cntUsuario = new usuarioController;

    $action = 'select';
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if(isset($_SESSION['logado_id']) == false) {
        if($action == 'login'){
            if(isset($_POST['email']) && isset($_POST['senha'])){
                $cntUsuario->login($_POST);
            }
        } else {
           header("location: ./views/login.php");
        }
    }

    if($action == 'select') {
        $cntContatos->select();
    } elseif($action == 'delete') {
        if(isset($_GET['id'])) {
            $cntContatos->delete($_GET['id']);
        }
    } elseif($action == 'insert') {
        if(isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['sexo'])) {
            $cntContatos->insert($_POST);
        }
    } elseif($action == 'editar') {
        if(isset($_GET['id'])) {
            $cntContatos->editar($_GET['id']);
        }
    } elseif($action == 'update') {
        if(isset($_POST['id'])) {
            $cntContatos->update($_POST);
        }
    } elseif($action == 'novoContato') {
        $cntContatos->novoContato();
    } elseif($action == 'sair') {
        $cntUsuario->sair();
    }

?>