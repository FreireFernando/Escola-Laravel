@extends('Layouts.app')
@section('conteudo')
    <h1>Aluno</h1>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </tr>
            @foreach ($alunos as $Aluno)
                <tr>
                    <td>
                        <form action="Aluno" method="get">
                            <input type="hidden" name="id" value="{{$Aluno->id}}">
                            <button class="btn btn-danger" type="submit">Deletar</button>
                            <a href="Aluno.edit/{{$Aluno->id}}" class="btn btn-warning"> Editar </a>
                        </form>                            
                    </td>
                    <td>{{$Aluno->id}}</td>
                    <td>{{$Aluno->nome}}</td>
                </tr>
            @endforeach
    </table>    
    <a href="/Aluno/create" class="btn btn-success">Novo</a>
@endsection