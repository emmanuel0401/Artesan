@extends('layouts.app')
REGISTRAR ARTESANIA
     
     
<br><br>

<form action="{{url('/Artesanias')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}    

<div class="form-group">

<label for="Nombre"> </label>
<input type="text" class="form-control" size="10" placeholder="&#128100; Nombre" name="Nombre" id="Nombre" required >
<br><br>

<label for="Tipo">  </label>
<input type="text" class="form-control" size="40" placeholder="&#128400; Tipo" name="Tipo" id="Tipo" required>
<br><br>

<label for="Precio">  </label>
<input class="input" type="Dirección" size="40" placeholder=" &#127968; Precio" id="Precio" name="Precio" required>
<br><br>

<label for="Cantidad">  </label>
<input class="input" type="Cantidad" size="40" placeholder=" &#127968; Cantidad" id="Cantidad" name="Cantidad" required>
<br><br>

<label for="Descripcion"> </label>
<input class="input" type="Descripcion" size="40" placeholder="&#9993; Descripcion" id="Descripcion" name="Descripcion" required>
<br><br>

<label for="Stock"> </label>
<input class="input" type="Stock" size="40" placeholder="&#9993; Stock" id="Stock" name="Stock" required>
<br><br>

<label for="Foto"> </label>
<input class="input" type="file" size="40" placeholder="&#128273; Foto" id="Foto" name="Foto" required>
<br>
</div>

<button class="submit-btn"> Registrar </button>
</form>



