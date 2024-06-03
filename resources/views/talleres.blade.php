@extends('layout')

@section('title','Talleres')
 
@section('content')
    <h2>Talleres</h2>
    @foreach($talleres as $taller)
        @if($talleres)
            <li>{{$taller['nombre']}}</li>
        @else
            <li>Actualmente no se cuenta con ningún taller disponible</li>
        @endif
    @endforeach
@endsection