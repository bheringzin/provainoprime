<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1> cadastro </h1>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="nome"> Nome </label>
                <input type="text" class="form-control" name="nome">
                <label for="nome"> Email</label>
                <input type="text" class="form-control" name="email">
                <label for="nome"> Senha</label>
                <input type="text" class="form-control" name="senha">
                <label for="nome"> Confirmar senha </label>
                <input type="text" class="form-control" name="confsenha">
            </div>
            <a href="sucessCadastroUsuario" type="submit" class="btn btn-dark mt-4 ">Cadastrar-se</a>
        </form>


        <div class="jumbotron mt-5">
            <h5> Já tem cadastro? Faça login </h5>
        </div>
        <a href="login" class="btn btn-dark mb-4 ">Login</a>

    </div>
</body>
</html>