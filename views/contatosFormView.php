<?php
    if(isset($_SESSION['logado_id']) == false){
        header("location: /renan_crud_contatos/index.php");
    }

    if(! empty($result['id'])) {
        // EDITAR CONTATO
        $titulo = "Editar Contato";
        $action = "./index.php?action=update";
        $id = $result['id'];
        $nome = $result['nome'];
        $telefone = $result['telefone'];
        $email = $result['email'];
        $sexo = $result['sexo'];
    } else {
        // ADICIONAR NOVO CONTATO
        $titulo = "Adicionar Contato";
        $action = "./index.php?action=insert";
        $id = "";
        $nome = "";
        $telefone = "";
        $email = "";
        $sexo = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center alert alert-primary"><h1><?= $titulo ?></h1></div>
        <form action="<?= $action ?>" method="POST">
            <div class="row">
                <div class="col-md-2">
                    <label for="id">Id</label>
                    <input type="text" id="id" name="id" class="form-control" value="<?= $id ?>" readonly>
                </div>
                <div class="col-md-10">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?= $nome ?>" require>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" value="<?= $telefone ?>" require>
                </div>
                <div class="col-md-5">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= $email ?>">
                </div>
                <div class="col-md-2">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <button type="submit" class="btn btn-success col-md-2">Salvar</button>
                <div class="col-md-8"></div>
                <a href="./index.php" class="btn btn-warning col-md-2">Voltar</a>
            </div>
        </form>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>