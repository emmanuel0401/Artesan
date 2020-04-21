@extends('layouts.app')
<h1> Usuarios Eliminados</h1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th> Id</th>
            <th> Nombre</th>
            <th> Correo <th>
            <td> Dirección </td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $usuario->id}}</td>
            <td>{{ $usuario->name}}</td>
            <td>{{ $usuario->email}}</td>
            <td>{{ $usuario->address}}</td>
            <td>
        </tr>
        @endforeach
    </tbody>
</table>