@extends('layout')

@section('title', 'Ingresar Persona')

@section('content')

<table cellpading="3" cellspaceing="5">
    <tr>
        <th colspan="4">Ingresar Persona</th>
    </tr>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('personas.store')}}" method="post">
        @csrf
        <tr>
            <th>Apellido</th>
            <td><input type="text" name="cPerApellidos"></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="cPerNombre"></td>
        </tr>
        <tr>
            <th>Direccion</th>
            <td><input type="text" name="cPerDireccion"></td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td><input type="date" name="dPerFecNac"></td>
        </tr>
        <tr>
            <th>edad</th>
            <td><input type="number" name="nPerEdad"></td>
        </tr>
        <tr>
            <th>Sueldo</th>
            <td><input type="number" name="nPerSueldo" step="any"></td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td><input type="radio" name="cPerEstado" value="0">
                <label for='soltero'>soltero</label>
                <input type="radio" name="cPerEstado" value="1">
                <label for='soltero'>casado</label>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>
@endsection