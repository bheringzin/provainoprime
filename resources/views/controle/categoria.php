<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdicionarNovaCategoria</title>
</head>
<body>
    <div class="container">

        <div>
            <h1>Adicionar Nova Categoria </h1>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="nome"> Nome da Categoria </label>
                <input type="text" class="form-control" name="nome">
            </div>
            <a href="sucessCategoria" class="btn btn-dark mt-4 ">Adicionar Categoria</a>
            <a href="ControleDeProdutos" type="submit" class="btn btn-dark mt-4 ">Voltar para Produtos</a>

        </form>
        <div>
            <h1>Categorias Existentes:</h1>
        </div>
        <td>
                <?php foreach ($categoria as $categoria): ?>
                    <li class= "list-group-item"> <?= $categoria; ?>
                    <a href="#" class="btn btn-dark mb-4  ">Editar</a>
                    <a href="#" class="btn btn-dark mb-4 ">Deletar</a>
                </li>

                <?php endforeach; ?>
            </td>
        </div>
        </div>



</body>
</html>