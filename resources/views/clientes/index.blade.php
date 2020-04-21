CLIENTES REGISTRADOS<br>
@extends('layouts.app')



<br>
<a href="{{ url ('/Cliente/create') }}">
<button type="submit">Registrar Cliente </button></a>
<br>
<br>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th> Acciones <th>
        </tr>
    </thead>
    <tbody>
        @foreach($cliente as $cliente)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $cliente->Nombre}}</td>
            <td>{{ $cliente->Apellidos}}</td>
            <td>{{ $cliente->Direccion}}</td>
            <td>{{ $cliente->Telefono}}</td>
            <td>{{ $cliente->Email}}</td>
            <td>
            <a class="btn btn-warning" href="{{ url ('/Cliente/'.$cliente->id.'/edit') }}">Editar</a>
            <!--<button type="submit" onclick="return confirm('¿Deseas editar?');" >Editar </button></a>-->
        <form method="post" action="{{ url('/Cliente/'.$cliente->id) }}" style="display:inline">
        {{csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar cliente?');" >Borrar </button>
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>