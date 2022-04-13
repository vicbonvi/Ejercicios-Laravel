@extends('layout')
@section('content')
    <div class="form">
        <form action="{{route("productos.store")}}" method="post">
            {{--necesitamos escribir un token--}}
            @csrf
            <input type="text" name="cod" id="" placeholder="Código"><br>
            <input type="text" name="nombre" id="" placeholder="Nombre"><br>
            <input type="text" name="nombre_corto" id="" placeholder="nombre corto"><br>
            <textarea name="descripcion" id="" cols="30" rows="5" placeholder="descripcion">
            </textarea>
            <input type="number" name="PVP" id="" placeholder="PVP"><br>
            <input type="text" name="familia" id="" placeholder="familia"><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>

@endsection
