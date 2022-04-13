@extends('layout')
@section('content')
    <div class="form">
        <form action="{{route("clientes.update", $cliente->id)}}" method="post">
            {{--necesitamos escribir un token--}}
            @csrf
            @method('PUT')
            <input type="text" name="nombre" id="" placeholder="Nombre" value="{{$cliente->nombre}}"><br>
            <input type="text" name="apellido" id="" placeholder="Apellido" value="{{$cliente->apellido}}"><br>
            <input type="text" name="direccion" id="" placeholder="Dirección" value="{{$cliente->direccion}}"><br>
            <input type="text" name="email" id="" placeholder="E-mail" value="{{$cliente->email}}"><br>
            <input type="number" name="edad" id="" placeholder="Edad" value="{{$cliente->edad}}"><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>

@endsection
