@extends('template')

@section('title')
    Minhas Anota��es
@endsection

@section('content')
    <h1>Anota��es</h1>
    <ul>
        @foreach($notas as $nota)
            <li>{{$nota}}</li>
        @endforeach
    </ul>

@stop

