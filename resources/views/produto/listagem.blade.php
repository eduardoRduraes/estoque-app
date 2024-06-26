@extends('layout.principal')
@section('conteudo')
    <div class="container text-center">
        <h1>Listagem de produtos</h1>
{{--        <div class="row">--}}
        <div class="table-responsive" style="max-height: 60vh; overflow-y: auto;">
            <table class="table table-striped text-start">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">descriçao</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">valor</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $p)
                    <tr class="{{$p->saldo <= 0 ?'table-danger' : ''}}">
                        <td>{{$p->nome}}</td>
                        <td>{{$p->descricao}}</td>
                        <td>{{$p->saldo}}</td>
                        <td>{{$p->preco}}</td>
                        <td class="d-flex gap-3">
                            <a href="/produto/mostrar/{{$p->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </a>
                            <a href="/produto/deletar/{{$p->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h4>
                <span class="badge text-bg-danger float-end">itens sem estoque!</span>
            </h4>

            @if(old('nome'))
                <div class="alert alert-success ">
                    <strong>Sucesso!</strong>
                    O produto <strong>{{old('nome')}}</strong> foi adicionado.
                </div>
            @endif
        </div>
    </div>
@stop
