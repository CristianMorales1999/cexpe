@extends('layout')

@section('title','Programas')
 
@section('content')
    <h2>Programas</h2>
    <ul>
        @if($programas)
            @foreach($programas as $programa)
                <li>{{$programa['nombre']}}</li>
            @endforeach
        @else
            <li>Actualmente no se cuenta con ningún programa disponible</li>
        @endif
    </ul>
@endsection