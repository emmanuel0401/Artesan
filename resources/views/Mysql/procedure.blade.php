@extends('layouts.app')

<h1> Productos tipo pulsera</h1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th> Id</th>
            <th> Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        @foreach($artesanias as $artesania)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $artesania->id}}</td>
            <td>{{ $artesania->nombre}}</td>
            <td>{{ $artesania->tipo}}</td>
            <td>{{ $artesania->precio}}</td>
            <td>{{ $artesania->cantidad}}</td>
            <td>{{ $artesania->descripcion}}</td>
            <td>{{ $artesania->stock}}</td>
            <td>
        </tr>
        @endforeach
    </tbody>
</table>
