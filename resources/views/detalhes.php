<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

    <h1>Detalhes do produto <?= $produto->nome ?></h1>

    <ul>
        <li>Descrição: <?= $produto->descricao ?></li>
        <li>Valor: <?=  'R$' . number_format($produto->valor, 2, ',', '.') ?></li>
        <li>Quantidade: <?= $produto->quantidade ?></li>
    </ul>

</body>
</html>