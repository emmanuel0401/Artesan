

 <form action="{{url('/Cliente')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}    

<label for="Nombre">  </label>
<input type="text" size="30" placeholder="&#128100; Nombre" name="Nombre" id="Nombre" required autofocus>
<br><br>

<label for="Apellidos">  </label>
<input type="text" size="30" placeholder="&#128100; Apellidos" name="Apellidos" id="Apellidos" required autofocus>
<br><br>

<label for="Direccion">  </label>
<input class="input" type="Dirección" size="30" placeholder=" &#127968; Dirección" id="Direccion" name="Direccion" required>
<br><br>

<label for="Telefono">  </label>
<input class="input" type="Telefono" size="30" placeholder="&#128222; Telefono" id="Telefono" name="Telefono" required>     
<br><br>

<label for="email"> </label>
<input class="input" type="email" size="30" placeholder="&#9993; email" id="email" name="email" required>
<br><br>

<label for="Contraseña">  </label>
<input class="input" type="Contraseña" size="30" placeholder="&#128273; Contraseña" id="Contraseña" name="Contraseña" required>
<br><br>

<button class="submit-btn"> Registrar </button>
</form>
