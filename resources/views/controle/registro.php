<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produtos</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Produtos</h1>
        </div>

        <a href="New" class="btn btn-dark mb-4 ">AdicionarProduto</a>

        <ul class="list-group">
            <td>
                <?php foreach ($produto as $produto): ?>
                    <li class= "list-group-item"> <?= $produto; ?>
                    <a href="#" class="btn btn-dark mb-4  ">Editar</a>
                    <a href="#" class="btn btn-dark mb-4 ">Deletar</a>
                </li>

                <?php endforeach; ?>
            </td>
    
        </ul>
    </div>
</body>
</html>