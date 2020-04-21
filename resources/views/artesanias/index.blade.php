@extends('layouts.app')
<h1 align="center">ARTESANIAS REGISTRADAS</h1>

<br><br>
<a href="{{ url ('/Artesanias/create') }}">
<button type="submit">Registrar Artesania </button></a>
<br><br>
<table class="table table-dark table-hover" width="90%"   text-align:center>
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Stock</th>
            <th> Acciones <th>
        </tr>
    </thead>
    <tbody>
        @foreach($artesanias as $artesania)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{ asset('storage').'/'.$artesania->foto}}" alt="" width="150"></td>
            <td>{{ $artesania->nombre}}</td>
            <td>{{ $artesania->tipo}}</td>
            <td>{{ $artesania->precio}}</td>
            <td>{{ $artesania->cantidad}}</td>
            <td>{{ $artesania->descripcion}}</td>
            <td>{{ $artesania->stock}}</td>
            <td>
           
            <a class="btn btn-warning" href="{{ url ('/Artesanias/'.$artesania->id.'/edit') }}">Editar</a>
        <form method="post" action="{{ url('/Artesanias/'.$artesania->id) }}" style="display:inline">
        {{csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar cliente?');" >Borrar </button>
        </form>
        </td>
        </tr>
        @endforeach
       
    </tbody>
    {{ $artesanias->links() }}
</table>
<a href="/menu-admin" class="btn btn-success"  style="background:black"> Regresar</a>