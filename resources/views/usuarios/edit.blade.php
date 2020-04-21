
@extends('layouts.app')
<form action="{{ url ('/User/'.$user->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }} 
{{ method_field('PATCH') }} 

<label for="Nombre">  </label>
<input type="text" size="30" placeholder="&#128100; Nombre" name="name" id="name" value="{{ $user->name}}" required autofocus>
<br><br>

<label for="Direccion">  </label>
<input class="input" type="Dirección" size="30" placeholder=" &#127968; Dirección" id="address" name="address"  value="{{ $user->address}}" required>
<br><br>

<label for="email"> </label>
<input class="input" type="email" size="30" placeholder="&#9993; email" id="email" name="email" value="{{ $user->email}}" required>
<br><br>

<label for="Contraseña"> </label>
<input class="input" type="Contraseña" size="30" placeholder="&#128273; Contraseña" id="password" name="password" value="{{ $user->password}}" required>
<br><br>

<button class="submit-btn"> Guardar </button>
<a href="/usuarios" class="btn btn-success"> Regresar</a>

</form>
