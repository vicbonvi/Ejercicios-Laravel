@extends('layout')
@section('content')
<h1>Listado de clientes</h1>
<table>
    <a href="{{route("clientes.create")}}">Nuevo Cliente</a>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>E-mail</th>
        <th>Edad</th>
    </tr>
    @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->edad}}</td>
            <td><a href="/clientes/{{$cliente->id}}">Mostrar</a></td>
            <td><form action="{{route('clientes.destroy', $cliente->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar">
                </form></td>
        </tr>

    @endforeach
</table>
@endsection
