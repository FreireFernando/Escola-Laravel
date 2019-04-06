@extends('Layouts.app')
@section('conteudo')
    <h1>Curso</h1>
    <form action="{{route('Curso.store')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$curso->id}}">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" value="{{$curso->nome}}">
          <label>Duração</label>
          <input type="text" class="form-control" id="duracao" name="duracao" value="{{$curso->duracao}}">
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="/curso" type="reset" class="btn btn-danger">Voltar</a>
      </form>
@endsection