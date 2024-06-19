@extends('layout')

@section('title', 'Ingresar Persona')

@section('content')

<table cellpading="3" cellspaceing="5">
    <tr>
        <th colspan="4">Ingresar Persona</th>
    </tr>
    <form action="{{route('personas.store')}}" method="post">
        @csrf
        <tr>
            <th>Apellido</th>
            <td><input type="text" name="Apellido"></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="Nombre"></td>
        </tr>
        <tr>
            <th>Direccion</th>
            <td><input type="text" name="Direccion"></td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td><input type="date" name="FecNac"></td>
        </tr>
        <tr>
            <th>edad</th>
            <td><input type="number" name="edad"></td>
        </tr>
        <tr>
            <th>Sueldo</th>
            <td><input type="number" name="Sueldo" step="any"></td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td><input type="radio" name="estado" value="0">
                <label for='soltero'>soltero</label>
                <input type="radio" name="estado" value="1">
                <label for='soltero'>casado</label>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>
@endsection