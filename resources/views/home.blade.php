{{ session(['rol' => 'operador']) }}

@extends('layouts.plantilla')

@section('titulo', 'jojo')


@section('contenido')


    @if(session('rol') == "administrador")
    <user-administrador></user-administrador>

    @elseif(session('rol') == "operador")
    <user-operador></user-operador>

    @elseif(session('rol') == "supervisor")
    <user-supervisor></user-supervisor>

    @endif

@endsection
