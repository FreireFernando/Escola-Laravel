@extends('Layouts.app')
@section('conteudo')
    <h1>Disciplina</h1>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Curso</th>
        </tr>
            @foreach ($disciplinas as $Disciplina)
                <tr>
                    <td>
                        <form action="Disciplina" method="get">
                            <input type="hidden" name="id" value="{{$Disciplina->id}}">
                            <a href="Disciplina{{$Disciplina->id}}" class="btn btn-danger">Deletar</a>
                            <a href="Disciplina/{{$Disciplina->id}}" class="btn btn-warning"> Editar </a>
                        </form>                            
                    </td>
                    <td>{{$Disciplina->id}}</td>
                    <td>{{$Disciplina->nome}}</td>
                    <td>{{$Disciplina->curso->nome}}</td>
                </tr>
            @endforeach
    </table>    
    <a href="/Disciplina/create" class="btn btn-success">Novo</a>
@endsection