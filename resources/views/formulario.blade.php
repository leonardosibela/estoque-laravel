@extends('layout.principal')

@section('conteudo')
<h1>Formulário de produto</h1>

<form action="">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Descriação</label>
        <textarea class="form-control"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>

</form>
@stop