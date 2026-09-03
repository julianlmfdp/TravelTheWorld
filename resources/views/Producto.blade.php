@extends('layouts.app')

@section('titulo', 'Productos')

@section('encabezado' , 'My Store')

@section('contenido')

@if(count($producto) > 0)

    <ul>

        @foreach($producto as $producto)

            <li>{{ $producto }}</li>

        @endforeach

    </ul>

@else

    <p>No hay productos que mostrar</p>

@endif

@endsection