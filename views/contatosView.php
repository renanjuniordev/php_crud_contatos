<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="text-center alert alert-primary">
            <h1>Contatos</h1>
            <a href="/renan_crud_contatos/index.php?action=sair">Usuário Logado: <?= $_SESSION['logado_usuario'] ?> (Clique para Sair)</a>
        </div>

        <div class="table-responsive">
            <?php if(count($resultSelect) > 0) { ?>
                <table class="table table-hover table-bordered">
                    <thead class="alert alert-primary">
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Sexo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultSelect as $linha): ?>
                            <tr>
                                <td><?= $linha['id'] ?></td>
                                <td><?= $linha['nome'] ?></td>
                                <td><?= $linha['telefone'] ?></td>
                                <td><?= $linha['email'] ?></td>
                                <td><?= $linha['sexo'] ?></td>
                                <td class="text-center">
                                    <a href="./index.php?action=editar&id=<?= $linha['id'] ?>" class="btn btn-warning">Editar</a>
                                    <a href="./index.php?action=delete&id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
                <h5>Total de contatos: <?= count($resultSelect) ?></h5>
                <a href="./index.php?action=novoContato" class="btn btn-primary">Novo Contato</a>
                </div>
            <?php } else {
                echo '<h5 class="text-center">Nenhum registro foi encontrado.</h5>';
            } ?>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>




<?php

// listar contatos

//echo "contatosView<br>";

//print_r($resultSelect);
//print_r('Delete: ' . $resultDelete);
//print_r('Insert: ' . $resultInsert);
//print_r('Update: ' . $resultUpdate);

//foreach($resultSelect as $contato):

//endforeach;

?>