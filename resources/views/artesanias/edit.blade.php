@extends('layouts.app')
<form action="{{ url ('/Artesanias/'.$artesania->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }} 
{{ method_field('PATCH') }} 

<label for="Nombre">  </label>
<input type="text" size="30" placeholder="&#128100; Nombre" name="Nombre" id="Nombre"  value="{{ $artesania->nombre }}" required autofocus>
<br><br>

<label for="Tipo">  </label>
<input type="text" size="30" placeholder="&#128100; Tipo" name="Tipo" id="Tipo" value="{{ $artesania->tipo}}" required autofocus>
<br><br>

<label for="Precio">  </label>
<input class="input" type="Dirección" size="30" placeholder=" &#127968; Precio" id="Precio" name="Precio" value="{{ $artesania->precio}}" required>
<br><br>

<label for="Cantidad"> </label>
<input class="input" type="Cantidad" size="30" placeholder="&#9993; Cantidad" id="Cantidad" name="Cantidad" value="{{ $artesania->cantidad}}" required>
<br><br>

<label for="Descripcion"> </label>
<input class="input" type="Descripcion" size="30" placeholder="&#9993; Descripcion" id="Descripcion" name="Descripcion" value="{{ $artesania->descripcion}}" required>
<br><br>

<label for="Stock"> </label>
<input class="input" type="Stock" size="30" placeholder="&#9993; Stock" id="Stock" name="Stock" value="{{ $artesania->stock}}" required>
<br><br>

<label for="Foto"> Foto</label>
<br/>
<img src="{{ asset('storage').'/'.$artesania->foto}}" alt="" width="150">

<input type="file" name="Foto" id="Foto" value=""> 
<br/>

<button class="submit-btn"> Guardar </button>
<a href="/Artesanias" class="btn btn-success" > Regresar</a>
</form>
