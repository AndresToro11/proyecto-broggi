{{ session(['rol' => 'supervisor']) }}

@extends('layouts.plantilla')

@section('titulo', 'Expedientes')

@section('contenido')

    @if(session('rol') == "administrador")
    <administrador></administrador>

    @elseif(session('rol') == "operador")
    <operador></operador>

    @elseif(session('rol') == "supervisor")
    <supervisor></supervisor>

    @endif

@endsection
