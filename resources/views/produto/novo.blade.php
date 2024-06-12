@extends('layout.principal')

@section('conteudo')
    <form action="/produto/adicionar" method="POST">
        @csrf
        @method('POST')
        <h1 class="h4 text-center">Novo Produto</h1>
        <div class="mb-3 form-group">
            <label for="nome" class="form-label">Nome: </label>
            <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome do produto"/>
        </div>
        <div class="mb-3 form-group">
            <label for="descricao" class="form-label">Descrição: </label>
            <input id="descricao" name="descricao" type="text" class="form-control" placeholder="Descrição do produto"/>
        </div>
        <div class="mb-3 form-group">
            <label for="preco" class="form-label">Preço: </label>
            <input id="preco" name="preco"  type="number" class="form-control" placeholder="Preço do produto"/>
        </div>
        <div class="mb-3 form-group">
            <label for="saldo" class="form-label">Saldo: </label>
            <input id="saldo" name="saldo" type="number" class="form-control" placeholder="Saldo do produto"/>
        </div>
        <button type="submit" class="btn btn-primary btn-block">SALVAR</button>
    </form>
@stop
