@extends('layout/principal')

@section('conteudo')
<h1>Detalhe do produto {{ $p->nome }}</h1>

<ul>
    <li>Descrição: {{ $p->descricao }}</li>
    <li>Valor: R$ {{ $p->valor }}</li>
    <li>Quantidade: {{ $p->quantidade }}</li>
</ul>
@stop