{{ session(['rol' => 'supervisor']) }}

@extends('layouts.plantilla')

@section('titulo', 'Expedientes')

@section('contenido')

@if(session('rol') == "administrador")
<user-administrador></user-administrador>

@elseif(session('rol') == "operador")
<user-operador></user-operador>

@elseif(session('rol') == "supervisor")
<user-supervisor></user-supervisor>

@endif

@endsection
