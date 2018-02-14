@extends('layout.principal')

@section('conteudo')
<h1>Formulário de produto</h1>

<form action="/produtos/adiciona" method="post">

<input name="_token" type="hidden" value="{{csrf_token()}}">

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input name="quantidade" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Tamanho</label>
        <input name="tamanho" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Descriação</label>
        <textarea name="descricao" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>

</form>
@stop