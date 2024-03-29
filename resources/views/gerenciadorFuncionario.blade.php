@extends('padrao')

@section('content')

<div class="container">
    <form method="get" action="{{route('gerenciar-funcionario')}}">
    <div class="mt-3 row">
        <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
        
        <div class="col-sm-8">
            <input type="text" class="form-control" name="nomefun" id="inputPesquisar" placeholder="Digite o nome do funcionario">
        </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-dark">Pesquisar</button>
            </div>
    </div>
    </form>
</div>


<div class="container my-3">
        
    <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dadosFuncionario as $dadosFuncionarios)
        <tr>
        <th scope="row">{{$dadosFuncionarios->id}}</th>
        <td>{{$dadosFuncionarios->nomefun}}</td>
        <td>{{$dadosFuncionarios->emailfun}}</td>
        <td>  
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAlterarFun-{{$dadosFuncionarios->id}}">
                    Alterar
            </button>
    @include('modal.modalFuncionarioAlterar')
        </td>
        <td>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteFun-{{$dadosFuncionarios->id}}">
            Excluir
            </button>
    @include('modal.modalFuncionarioDeletar')
        </td>  
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
@endsection