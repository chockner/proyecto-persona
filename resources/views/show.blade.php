@extends('layout')

@section('title', 'Persona | ' . $persona->cPerApellidos)

@section('content')

<tr>

    <td colspan="4">{{$persona->nPerApellidos}}</td>

</tr>
<tr>
    <td colspan="4">{{$persona->nPerNombre}}</td>

</tr>


@endsection