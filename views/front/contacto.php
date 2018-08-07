<?php 
include ('templates/head.php')
?>

<h1 class="contacto-titulo"> Formulario de contacto</h1>
<form action="" class="login">

<h2 class="titulo"> Contacto</h2>
<div class="contenedor-inputs">
  
  <input type="text" name="nombre" placeholder="Nombre completo" class="input-100 input-for" required>

  <input type="email" name="correo" placeholder="Correo electronico" class="input-100 input-for" required>
  
  <input type="text" name="telefono" placeholder="Telefono" class="input-100 input-for" required>
  
  <textarea class="mensaje" name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>

  <input type="submit" value="Enviar" class="btn-enviar">

 </div>
</form>


<?php 
include ('templates/foot.php')
?>
