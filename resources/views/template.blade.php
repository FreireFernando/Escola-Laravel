@extends('Layouts.app')
@section('conteudo')
<h1>Template Blade</h1>
<p>{{$nome}}</p>
<p>{{$nota}}</p>
<ul>
    @foreach($ACarros as $Carros)
    <li>{{$Carros}}</li>
    @endforeach
</ul>
@if ($nota > 5)
'Você reprovou com nota {{$nota}}, bro! :/
@elseif($nota > 7)
    'Você está de recuperação com nota {{$nota}}, bro
@endif 
@endsection

@section('titulo')
    <h1>Ora ora</h1>
@endsection