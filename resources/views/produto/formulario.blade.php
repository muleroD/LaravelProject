@extends('layout/principal')

@section('conteudo')
<form action="/produtos/adiciona" method="post">
    
    <input type="hidden" name="_token" value= "{{csrf_token()}}" />

    <div class="form-group">
        <label>Nome</label>
        <input class="form-control" name="nome">
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor">
    </div>

    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" name="quantidade" type="number">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>
</form>
@stop