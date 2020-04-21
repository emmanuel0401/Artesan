@extends('layouts.app')
<h1> Productos en bodega</h1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th> Id</th>
            <th> Nombre</th>
            <th> stock <th>
        </tr>
    </thead>
    <tbody>
        @foreach($artesanias as $artesania)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $artesania->id}}</td>
            <td>{{ $artesania->nombre}}</td>
            <td>{{ $artesania->stock}}</td>
            <td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $artesanias->links() }}