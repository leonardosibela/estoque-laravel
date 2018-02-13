@extends('principal')

@section('conteudo')
<h1>Listagem de produtos com Laravel</h1>

<table class="table table-striped table-bordered table-hover">

    @foreach ($produtos as $p)

        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao or 'Produto sem descriação'}}</td>
            <td>{{$p->quantidade}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}">
                Visualizar
                <!-- span class="glyphicon glyphicon-search"></span -->
            </a></td>
        </tr>

    @endforeach

</table>
@stop