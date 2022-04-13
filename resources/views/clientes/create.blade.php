@extends('layout')
@section('content')
    <div class="form">
        <form action="{{route("clientes.store")}}" method="post">
{{--necesitamos escribir un token--}}
            @csrf
            <input type="text" name="nombre" id="" placeholder="Nombre"><br>
            <input type="text" name="apellido" id="" placeholder="Apellido"><br>
            <input type="text" name="direccion" id="" placeholder="Dirección"><br>
            <input type="text" name="email" id="" placeholder="E-mail"><br>
            <input type="number" name="edad" id="" placeholder="Edad"><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>

@endsection
