@extends('layout')
@section('content')
    <h1>Listado de clientes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>E-mail</th>
            <th>Edad</th>
        </tr>
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->edad}}</td>
                <td><a href="{{route('clientes.edit', $cliente->id)}}">Modificar</a></td>
            </tr>

    </table>
@endsection
