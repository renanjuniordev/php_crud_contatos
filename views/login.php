<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center col-md-6">
        <h4 class="alert alert-success">Login</h4>
    </div>

    <div class="container text-center col-md-4">
        <form action="../index.php?action=login" method="POST" class="form">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <br>
                <label for="senha" class="col-md-6">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control col-md-6">
            <br>
            <button type="submit" class="btn btn-success col-md-12">Entrar</button>
        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>