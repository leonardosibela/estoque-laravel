@extends('principal')

@section('conteudo')
<h1>Detalhes do produto <?= $produto->nome ?></h1>

<ul>
    <li>Descrição: <?= $produto->descricao ?></li>
    <li>Valor: <?=  'R$' . number_format($produto->valor, 2, ',', '.') ?></li>
    <li>Quantidade: <?= $produto->quantidade ?></li>
</ul>
@stop