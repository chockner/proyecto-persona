@extends('layout')

@section('title', 'Contacto')

@section('content')
<h2>Personas</h2>
<tr>
    <td colspan="4">
        <a href="{{route(('personas.create'))}}">Nueva Persona</a><br>
    </td>
</tr>
<tr>
    <th colspan="4">Listado de Personas</th>
</tr>



<tr>
    @if ($personas)
        @foreach ($personas as $persona)
            <td>{{$persona->cPerNombre}}&nbsp{{$persona->cPerApellidos}}<br></td>

        @endforeach  
    @else
        <td colspan="4">No hay personas que mostrar</td>
    @endif
</tr>
<tr>
    <td colspan="4">{{$personas->links()}}</td>
</tr>
@endsection