@extends('Layouts.app')
@section('conteudo')
    <h1>Curso</h1>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Disciplina</th>
        </tr>
            @foreach ($cursos as $Curso)
                <tr>
                    <td>
                        <form action="Curso" method="delete">
                            <input type="hidden" name="id" value="{{$Curso->id}}">
                            <a href="curso/{{$Curso->id}}/destroy" class="btn btn-danger" type="submit">Deletar</a>
                            <a href="curso/{{$Curso->id}}/edit" class="btn btn-warning">Editar </a>
                        </form>                            
                    </td>
                    <td>{{$Curso->id}}</td>
                    <td>{{$Curso->nome}}</td>
                    <td>{{$Curso->disciplinas[0]->nome}}</td>
                    {{-- <td>
                        <ol>
                            @foreach ($Curso->disciplinas as $disciplina)
                                <li>{{$disciplina->nome}}</li>
                            @endforeach
                        </ol>
                    </td> --}}
                </tr>
            @endforeach
        </tr>
    </table>    
    <a href="/Curso/create" class="btn btn-success">Novo</a>
@endsection