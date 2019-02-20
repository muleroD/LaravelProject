@extends('layout/principal')

@section('conteudo')
<h1>Listagem de produtos</h1>

@if(empty($produtos))
<div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
</div>

@else
<table class="table table-bordered table-hover">

    <tr class="thead-dark">
        <th>Produto</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Visualizar</th>
    </tr>

    @foreach ($produtos as $p)
    <tr class="{{ $p->quantidade <= 1 ? 'table-danger' : '' }}">
        <td> {{ $p->nome }} </td>
        <td> {{ $p->valor }} </td>
        <td> {{ $p->descricao }} </td>
        <td> {{ $p->quantidade }} </td>
        <td>
            <a href="/produtos/mostra/{{ $p->id }}"><i class="fas fa-search"></i></a>
        </td>
    </tr>
    @endforeach

</table>
@endif

<h4>
    <span class="badge badge-danger">
        Um ou menos itens no estoque
    </span>
</h4>

@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong>
    Produto '{{old('nome')}}' adicionado com sucesso!
</div>
@endif

@stop