<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdicionarNovoProduto</title>
</head>
<body>
    <div class="container">

        <div>
            <h1>Adicionar Novo Produto </h1>
        </div>
        <a href="Marca" class="btn btn-dark mb-4 ">Adicionar Marca</a>
        <a href="Categoria" class="btn btn-dark mb-4 ">Adicionar Categoria</a>

        <form method="post">
            <div class="form-group">
                <label for="nome"> Nome do Produto </label>
                <input type="text" class="form-control" name="nome">
                <label for="nome"> Valor</label>
                <input type="text" class="form-control" name="valor">
                <label for="nome"> Marca</label>
                <input type="text" class="form-control" name="marca">
                <label for="nome"> Categoria </label>
                <input type="text" class="form-control" name="categoria">
            </div>
            <a href="cadastroSucess" type="submit" class="btn btn-dark mt-4 ">Adicionar</a>
        </form>
    </div>
</body>
</html>