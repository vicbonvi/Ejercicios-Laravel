@extends('layout')
@section('content')
    <h1>Listado de producto</h1>
    <table>
        <a href="{{route("productos.create")}}">Nuevo producto</a>
        <tr>
            <th>COD</th>
            <th>Nombre</th>
            <th>Nombre_Corto</th>
            <th>Descripción</th>
            <th>PVP</th>
            <th>Familia</th>
        </tr>
        @foreach($producto as $product)
            <tr>
                <td>{{$product->cod}}</td>
                <td>{{$product->nombre}}</td>
                <td>{{$product->nombre_corto}}</td>
                <td>{{$product->descripcion}}</td>
                <td>{{$product->PVP}}</td>
                <td>{{$product->familia}}</td>

            </tr>

        @endforeach
    </table>
@endsection
