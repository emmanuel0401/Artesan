

<form action="{{ url ('/Cliente/'.$cliente->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }} 
{{ method_field('PATCH') }} 

<label for="Nombre">  </label>
<input type="text" size="30" placeholder="&#128100; Nombre" name="Nombre" id="Nombre" value="{{ $cliente->Nombre}}" required autofocus>
<br><br>

<label for="Apellidos"></label>
<input type="text" size="30" placeholder="&#128100; Apellidos" name="Apellidos" id="Apellidos" value="{{ $cliente->Apellidos}}" required autofocus>
<br><br>

<label for="Direccion">  </label>
<input class="input" type="Dirección" size="30" placeholder=" &#127968; Dirección" id="Direccion" name="Direccion"  value="{{ $cliente->Direccion}}" required>
<br><br>

<label for="Telefono">  </label>
<input class="input" type="Telefono" size="30" placeholder="&#128222; Telefono" id="Telefono" name="Telefono" value="{{ $cliente->Telefono}}"required>     
<br><br>

<label for="email"> </label>
<input class="input" type="email" size="30" placeholder="&#9993; email" id="email" name="email" value="{{ $cliente->Email}}" required>
<br><br>

<label for="Contraseña"> </label>
<input class="input" type="Contraseña" size="30" placeholder="&#128273; Contraseña" id="Contraseña" name="Contraseña" value="{{ $cliente->Contraseña}}" required>
<br><br>

<input type="submit" value="Guardar">
<input TYPE="button" VALUE="Regresar" onClick="history.back()">
</form>
